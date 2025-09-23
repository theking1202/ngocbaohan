<div class="img-top" style="margin-top: -20px;">
    <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/1530x320x1/assets/images/noimage.png';"
        data-src="<?= THUMBS ?>/1530x320x1/<?= UPLOAD_PHOTO_L . $banner_gioithieu['photo'] ?>" />

</div>
<div class="wrap-content mt-3">
    <div class="wrap_productsort sort">

        <div class="coll-head mb-3">

            <h1 class="title_pageproductsorrt"><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></h1>

            <div class="coll-sortby d-flex justify-content-between align-items-center">

                <div class="sortPagiBar">

                    <div class="sort-cate clearfix">

                        <div id="sort-by" class="d-flex align-items-baseline">

                            <label class="left">

                                <span class="">Sắp xếp: </span>

                            </label>

                            <select class="content_ul">

                                <option class="itemsort" data-list="<?= $productList['id'] ?>"
                                    data-cat="<?= $productCat['id'] ?>" data-sort="name:asc" value="alpha-asc">Tên A → Z

                                </option>

                                <option class="itemsort" data-list="<?= $productList['id'] ?>"
                                    data-cat="<?= $productCat['id'] ?>" data-sort="name:desc" value="alpha-desc">Tên Z →
                                    A

                                </option>

                                <option class="itemsort" data-list="<?= $productList['id'] ?>"
                                    data-cat="<?= $productCat['id'] ?>" data-sort="price_min:asc" value="price-asc">Giá
                                    tăng

                                    dần</option>

                                <option class="itemsort" data-list="<?= $productList['id'] ?>"
                                    data-cat="<?= $productCat['id'] ?>" data-sort="price_min:desc" value="price-desc">
                                    Giá giảm

                                    dần</option>

                            </select>

                        </div>

                    </div>

                </div>

                <div id="open-filters" class="btn open-filters d-lg-none d-block p-0">

                    <i class="fa fa-filter"></i>

                    <span>Lọc</span>

                </div>

            </div>

        </div>

        <div class="sortproduct-paging-list">

            <!-- măc dinh  -->





            <?php if (!empty($product)) { ?>

            <div class="product-list">

                <?php foreach ($product as $k => $v) { ?>

                <div class="product-card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="image-container">
                        <a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <div class="product-image default-image">
                                <?= $func->getImage(['class' => 'product-image default-image', 'sizes' => '275x270x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                            </div>
                            <div class="product-image hover-image">
                                <?= $func->getImage(['class' => 'product-image hover-image', 'sizes' => '275x270x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['icon'], 'alt' => $v['name' . $lang]]) ?>
                            </div>
                        </a>
                        <?php if ($v['sale_price']) { ?>
                        <div class="price-discount">
                            <?= $v['discount'] ?>%
                        </div>
                        <?php } ?>
                        <a class="heart-icon" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <i class="fa-regular fa-heart"></i>
                        </a>
                        <a class="eye-icon" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><?= $v['name' . $lang] ?></h3>
                        <div class="product-price">
                            <?php if ($v['sale_price']) { ?>
                            <?= $func->formatMoney($v['regular_price']) ?>
                            <?= $func->formatMoney($v['sale_price']) ?>
                            <?php } else { ?>
                            <?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?>
                            <?php } ?>
                        </div>
                        <div class="action-buttons">
                            <button class="btn btn-primary shopnow">Mua Ngay</button>
                            <button class="btn btn-secondary shopnow">Thêm Vào Giỏ Hàng</button>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>

            <?php } else { ?>

            <div class="col-12">

                <div class="alert alert-warning w-100" role="alert">

                    <strong><?= khongtimthayketqua ?></strong>

                </div>

            </div>

            <?php } ?>



            <div class="col-12">

                <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>

            </div>



            <!--  -->

        </div>

    </div>
</div>
<style>
.coll-head {

    display: flex;

    justify-content: space-between;

    align-items: center;

    flex-wrap: wrap;

}



h1.title_pageproductsorrt {

    padding: 0;

    letter-spacing: normal;

    color: var(--c1);

    text-transform: uppercase;

    font-weight: bold;

}



.sortPagiBar {

    font-size: 16px;

    font-weight: bold;

}



#sort-by {

    gap: 10px;

    position: relative;

}



.coll-sortby select {

    -webkit-appearance: none;

    margin-left: 5px;

    height: 30px;

    padding: 0 5px;

    padding-right: 20px;

}



#sort-by:after {

    position: absolute;

    content: "";

    width: 0;

    height: 0;

    top: 12px;

    right: 4px;

    border-top: 6px solid;

    border-left: 5px solid transparent;

    border-right: 5px solid transparent;

}
</style>