<?php
if (!defined('SOURCES')) die("Error");

/* man_admin — quản lý hàng hoá theo từng cửa hàng (giá, tồn kho, SKU) */
/* Truy cập: index.php?com=man_admin&act=man */

$strUrl = "";
$curPage = (isset($_GET['p'])) ? max(1, (int)$_GET['p']) : 1;

/* === Optional store lock theo session (tuỳ hệ thống) ===
   Nếu hệ thống của bạn có session user/role/store, bỏ comment để bật:
   if(!empty($_SESSION['store_id']) && !empty($_SESSION['user_role']) && $_SESSION['user_role']<3){
       $_REQUEST['store'] = (int)$_SESSION['store_id'];
   }
*/

/* Build back-url keep filters */
if(isset($_REQUEST['store']) && $_REQUEST['store']!=''){ $strUrl .= "&store=" . htmlspecialchars($_REQUEST['store']); }
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!=''){ $strUrl .= "&keyword=" . htmlspecialchars($_REQUEST['keyword']); }

switch ($act) {
    case "man":
        viewMans();
        $template = "man_admin/mans";
        break;
    case "add":
        addMan();
        $template = "man_admin/man_add";
        break;
    case "edit":
        editMan();
        $template = "man_admin/man_add";
        break;
    case "save":
        saveMan();
        break;
    case "delete":
        deleteMan();
        break;
    default:
        $template = "index";
}

/* ============= FUNCTIONS ============= */

function viewMans()
{
    global $d, $func, $curPage, $items, $paging, $strUrl, $stores, $store, $keyword;
    $where = " where 1 = 1 ";
    $store = (isset($_REQUEST['store'])) ? (int)$_REQUEST['store'] : 0;
    $keyword = (isset($_REQUEST['keyword'])) ? trim($_REQUEST['keyword']) : '';

    // Kiểm tra quyền người dùng
    $user_id = isset($_SESSION['LoginAdminMSHD']['id']) ? (int)$_SESSION['LoginAdminMSHD']['id'] : 0;
    // $user_role = isset($_SESSION['login']['role']) ? (int)$_SESSION['login']['role'] : 0;
    // echo $user_id;
    if ($user_id != 1) { // Nếu không phải admin
        $where .= " and ps.store_id = $user_id ";
    } elseif ($store > 0) {
        $where .= " and ps.store_id = $user_id ";
    }

    if ($keyword != '') {
        $keyword_sql = htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8');
        $where .= " and (p.namevi like '%$keyword_sql%' or p.nameen like '%$keyword_sql%' or ps.sku like '%$keyword_sql%') ";
    }

    $perPage = 20;
    $startpoint = ($curPage * $perPage) - $perPage;
    $limit = " limit " . $startpoint . "," . $perPage;

    $sql = "select ps.id, ps.sku, ps.price, ps.cost, ps.quantity, ps.status,
                   p.id as product_id, COALESCE(p.namevi, p.nameen, concat('SP#', p.id)) as product_name,
                   s.id as store_id, s.fullname as store_name
            from #_product_store ps
            inner join #_product p on p.id = ps.product_id
            inner join #_user s on s.id = ps.store_id
            $where
            order by s.fullname, p.namevi, p.nameen ".$limit;

    $items = $d->rawQuery($sql);

    $sqlNum = "select count(*) as 'num'
            from #_product_store ps
            inner join #_product p on p.id = ps.product_id
            inner join #_user s on s.id = ps.store_id
            $where";
    $count = $d->rawQueryOne($sqlNum);
    $total = (!empty($count)) ? (int)$count['num'] : 0;

    $url = "index.php?com=man_admin&act=man" . $strUrl;
    $paging = $func->pagination($total, $perPage, $curPage, $url);

    /* fetch stores for filter dropdown */
    $stores = $d->rawQuery("select id, fullname from #_user order by fullname");
}

function addMan()
{
    global $d, $item, $stores, $products;

    $stores = $d->rawQuery("select id, fullname from #_user order by fullname");
    $products = $d->rawQuery("select id, COALESCE(namevi, nameen, concat('SP#', id)) as name, code, regular_price as default_price, sale_price as default_cost from #_product order by namevi, nameen");
    $item = array(
        'store_id' => 0,
        'selected_products' => array(),
        'status' => 'hienthi'
    );
}

function editMan()
{
    global $d, $func, $item, $stores, $products;

    $id = (!empty($_GET['id'])) ? (int)$_GET['id'] : 0;
    if (!$id) $func->transfer('Chưa có dữ liệu', "index.php?com=man_admin&act=man", false);

    $stores = $d->rawQuery("select id, fullname from #_user order by fullname");
    $products = $d->rawQuery("select id, COALESCE(namevi, nameen, concat('SP#', id)) as name, code, regular_price as default_price, sale_price as default_cost from #_product order by namevi, nameen");

    $item = $d->rawQueryOne("select * from #_product_store where id = ? limit 0,1", array($id));
    if (empty($item)) $func->transfer('Dữ liệu không hợp lệ', "index.php?com=man_admin&act=man", false);
}

function saveMan()
{
    global $d, $func, $curPage, $strUrl;

    if (empty($_POST)) $func->transfer('Dữ liệu không hợp lệ', "index.php?com=man_admin&act=man", false);

    $id = (isset($_POST['id'])) ? (int)$_POST['id'] : 0;
    $store_id = (int)($_POST['store_id'] ?? 0);
    $status = htmlspecialchars($_POST['status'] ?? 'hienthi');

    if ($store_id <= 0) {
        $func->transfer('Thiếu dữ liệu cửa hàng', "index.php?com=man_admin&act=man".$strUrl, false);
    }

    // Handle single product edit
    if ($id) {
        $data = array();
        $data['store_id'] = $store_id;
        $data['product_id'] = (int)($_POST['product_id'] ?? 0);
        $data['sku'] = htmlspecialchars($_POST['sku'] ?? '');
        $data['cost'] = (float)($_POST['cost'] ?? 0);
        $data['price'] = (float)($_POST['price'] ?? 0);
        $data['quantity'] = (int)($_POST['quantity'] ?? 0);
        $data['status'] = $status;
        $data['date_updated'] = time();
        
        $d->where('id', $id);
        if ($d->update('product_store', $data)) {
            $func->transfer('Cập nhật dữ liệu thành công', "index.php?com=man_admin&act=man&p=".$curPage.$strUrl);
        } else {
            $func->transfer('Cập nhật dữ liệu thất bại', "index.php?com=man_admin&act=man&p=".$curPage.$strUrl, false);
        }
    } else {
        // Handle multiple products
        $products_data = isset($_POST['products']) ? $_POST['products'] : array();
        
        if (empty($products_data)) {
            $func->transfer('Chưa chọn sản phẩm nào', "index.php?com=man_admin&act=man".$strUrl, false);
        }
        
        $success_count = 0;
        $error_messages = array();
        
        foreach ($products_data as $product_data) {
            $product_id = (int)($product_data['product_id'] ?? 0);
            $sku = htmlspecialchars($product_data['sku'] ?? '');
            $cost = (float)($product_data['cost'] ?? 0);
            $price = (float)($product_data['price'] ?? 0);
            $quantity = (int)($product_data['quantity'] ?? 0);
            
            if ($product_id <= 0) continue;
            
            // Check if product already exists in store
            $exist = $d->rawQueryOne("select id from #_product_store where product_id = ? and store_id = ? limit 0,1", array($product_id, $store_id));
            if (!empty($exist)) {
                $product_name = $d->rawQueryOne("select COALESCE(namevi, nameen, concat('SP#', id)) as name from #_product where id = ?", array($product_id));
                $error_messages[] = 'Sản phẩm "' . ($product_name['name'] ?? 'SP#'.$product_id) . '" đã tồn tại trong cửa hàng';
                continue;
            }
            
            $data = array(
                'store_id' => $store_id,
                'product_id' => $product_id,
                'sku' => $sku,
                'cost' => $cost,
                'price' => $price,
                'quantity' => $quantity,
                'status' => $status,
                'date_created' => time()
            );
            
            if ($d->insert('product_store', $data)) {
                $success_count++;
            }
        }
        
        if ($success_count > 0) {
            $message = "Thêm thành công $success_count sản phẩm";
            if (!empty($error_messages)) {
                $message .= ". Lỗi: " . implode(', ', $error_messages);
            }
            $func->transfer($message, "index.php?com=man_admin&act=man".$strUrl);
        } else {
            $message = "Không thể thêm sản phẩm nào";
            if (!empty($error_messages)) {
                $message .= ". Lỗi: " . implode(', ', $error_messages);
            }
            $func->transfer($message, "index.php?com=man_admin&act=man".$strUrl, false);
        }
    }
}

function deleteMan()
{
    global $d, $func, $curPage, $strUrl;

    $id = (isset($_GET['id'])) ? (int)$_GET['id'] : 0;
    $listid = (isset($_GET['listid'])) ? $_GET['listid'] : '';

    if ($id) {
        $d->rawQuery("delete from #_product_store where id = ?", array($id));
        $func->transfer('Xoá dữ liệu thành công', "index.php?com=man_admin&act=man&p=".$curPage.$strUrl);
    } elseif ($listid) {
        $listid = explode(",", $listid);
        foreach ($listid as $id) {
            $id = (int)$id;
            $d->rawQuery("delete from #_product_store where id = ?", array($id));
        }
        $func->transfer('Xoá dữ liệu thành công', "index.php?com=man_admin&act=man&p=".$curPage.$strUrl);
    } else {
        $func->transfer('Không nhận được dữ liệu', "index.php?com=man_admin&act=man&p=".$curPage.$strUrl, false);
    }
}
