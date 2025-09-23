<?php
$linkMan = "index.php?com=man_admin&act=man";
$linkAdd = "index.php?com=man_admin&act=add";
$linkEdit = "index.php?com=man_admin&act=edit";
$linkDelete = "index.php?com=man_admin&act=delete";

$store = (isset($store)) ? (int)$store : 0;
$keyword = (isset($keyword)) ? htmlspecialchars($keyword) : '';
?>
<section class="content">
    <div class="card-footer text-sm sticky-top">
        <a class="btn btn-sm bg-gradient-primary text-white" href="<?=$linkAdd?>" title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="<?=$linkDelete?>" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>

        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <select class="custom-select custom-select-sm mr-2" id="store">
                <option value="0">-- Tất cả cửa hàng --</option>
                <?php if(!empty($stores)) foreach($stores as $st){ ?>
                    <option value="<?=$st['id']?>" <?=($store==$st['id'])?'selected':''?>><?=$st['namevi']?></option>
                <?php } ?>
            </select>
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar text-sm" type="search" id="keyword" placeholder="Tìm tên SP / SKU" aria-label="Search" value="<?=$keyword?>" onkeypress="doEnter(event)">
                <div class="input-group-append bg-primary rounded-right">
                    <button class="btn btn-navbar text-white" type="button" onclick="onSearch()">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-outline card-primary text-sm">
        <div class="card-header">
            <h3 class="card-title">Danh sách hàng hoá theo cửa hàng</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="align-middle text-center" width="5%"><input type="checkbox" id="selectall"></th>
                        <th class="align-middle">Cửa hàng</th>
                        <th class="align-middle">Sản phẩm</th>
                        <th class="align-middle">SKU</th>
                        <th class="align-middle text-right">Giá vốn</th>
                        <th class="align-middle text-right">Giá bán</th>
                        <th class="align-middle text-center">Số lượng</th>
                        <th class="align-middle text-center">Trạng thái</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($items)) { ?>
                        <tr><td colspan="9" class="text-center">Không có dữ liệu</td></tr>
                    <?php } else { foreach($items as $k=>$v) { ?>
                        <tr>
                            <td class="align-middle text-center"><input type="checkbox" name="select" value="<?=$v['id']?>"></td>
                            <td class="align-middle"><?=$v['store_name']?></td>
                            <td class="align-middle"><?=$v['product_name']?></td>
                            <td class="align-middle"><?=$v['sku']?></td>
                            <td class="align-middle text-right"><?=number_format((float)$v['cost'],0,',','.')?></td>
                            <td class="align-middle text-right font-weight-bold"><?=number_format((float)$v['price'],0,',','.')?></td>
                            <td class="align-middle text-center"><?=$v['quantity']?></td>
                            <td class="align-middle text-center"><span class="badge badge-secondary"><?=$v['status']?></span></td>
                            <td class="align-middle text-center">
                                <a class="btn btn-sm bg-gradient-primary text-white mr-1" href="<?=$linkEdit?>&id=<?=$v['id']?>" title="Sửa"><i class="far fa-edit"></i></a>
                                <a class="btn btn-sm bg-gradient-danger text-white" href="<?=$linkDelete?>&id=<?=$v['id']?>" title="Xóa" onclick="return confirm('Xoá bản ghi này?')"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } } ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-sm">
            <?=$paging?>
        </div>
    </div>
</section>
<script>
function onSearch(){
  const s = document.getElementById('store').value;
  const kw = document.getElementById('keyword').value;
  const qs = new URLSearchParams({com:'man_admin',act:'man'});
  if(s && s!='0') qs.append('store', s);
  if(kw) qs.append('keyword', kw);
  location.href = 'index.php?' + qs.toString();
}
function doEnter(e){ if(e.keyCode==13) onSearch(); }

document.getElementById('selectall')?.addEventListener('change', e=>{
  document.querySelectorAll('input[name=select]').forEach(cb=>cb.checked=e.target.checked);
});
document.getElementById('delete-all')?.addEventListener('click', e=>{
  const ids = Array.from(document.querySelectorAll('input[name=select]:checked')).map(i=>i.value).join(',');
  if(!ids){ alert('Chưa chọn bản ghi'); return; }
  if(confirm('Xoá các bản ghi đã chọn?')){ location.href = e.target.dataset.url + '&listid=' + ids; }
});
</script>
