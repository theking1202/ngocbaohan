<?php

include "config.php";



/* Paginations */

include LIBRARIES . "class/class.PaginationsAjax.php";

$pagingAjax = new PaginationsAjax();

$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;

$eShow = htmlspecialchars($_GET['eShow']);

$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;

$idCat = (isset($_GET['idCat']) && $_GET['idCat'] > 0) ? htmlspecialchars($_GET['idCat']) : 0;

$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;

$start = ($p - 1) * $pagingAjax->perpage;

$pageLink = "api/product.php?perpage=" . $pagingAjax->perpage;

$tempLink = "";

$where = "";

$params = array();

/* Math url */

if ($idList > 0) {

    $tempLink .= "&idList=" . $idList;

    $where .= " and id_list = ?";

    array_push($params, $idList);
}

if ($idCat > 0) {

    $tempLink .= "&idCat=" . $idCat;

    $where .= " and id_cat = ?";

    array_push($params, $idCat);
}

$tempLink .= "&p=";

$pageLink .= $tempLink;



/* Get data */

$sql = "select name$lang,desc$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type,file_attach,icon  from #_product where type='san-pham' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";

$sqlCache = $sql . " limit $start, $pagingAjax->perpage";

$items = $cache->get($sqlCache, $params, 'result', 7200);



/* Count all data */

$countItems = count($cache->get($sql, $params, 'result', 7200));



/* Get page result */

$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>

<?php if ($countItems) { ?>

    <div class="grid-product">

        <?php foreach ($items as $k => $v) { ?>

            <a class="box-product text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>" data-aos="fade-up" data-aos-duration="1000">

                <div class="product-img">

                    <?= $func->getImage(['class' => 'img1 lazy w-100', 'sizes' => '275x270x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    <?= $func->getImage(['class' => 'img2 lazy w-100', 'sizes' => '275x270x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['icon'], 'alt' => $v['name' . $lang]]) ?>

                    <?php if ($v['sale_price']) { ?>

                        <div class="price-discount">

                            <?= $v['discount'] ?>%

                        </div>

                    <?php }

                    ?>

                </div>

                <div class="product-info">

                    <h3 class="product-name text-split-1"> <?= $v['name' . $lang] ?></h3>

                    <div class="product-price">

                        <?php if ($v['sale_price']) { ?>

                            <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>

                            <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>



                        <?php } else { ?>

                            <span class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>

                        <?php } ?>

                    </div>

                </div>

            </a>

        <?php } ?>

    </div>

    <div class="pagination-ajax"><?= $pagingItems ?></div>

<?php } ?>

<script>
    BLUEWEB_FRAMEWORK.toolTip();
</script>