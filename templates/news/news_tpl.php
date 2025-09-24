<?php if ($com == 'tim-kiem') { ?>

<div class="div_kq_search mb-4"><?= $titleMain ?> (<?= $total ?>): <span>"<?php echo $tukhoa_show; ?>"</span></div>

<?php } ?>
<style>
.breadCrumbs .wrap-content {
    padding: 0.75rem 3.5rem;

    margin-bottom: 20px;
}
</style>
<div class="wrap-content ">
    <div class="projects-section">
        <div class="container">
            <div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
            <div class="projects-grid">
                <?php if (isset($news) && count($news) > 0) { ?>
                <?php foreach ($news as $k => $v) { ?>
                <a href="<?= $v[$sluglang] ?>" class="projects-card">
                    <img class="projects-image" onerror="this.src='<?= THUMBS ?>/400x400x1/assets/images/noimage.png';"
                        src="<?= THUMBS ?>/400x400x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>"
                        alt="<?= $v['name' . $lang] ?>" />

                    <div class="projects-info">
                        <h3 class="projects-name"><?= $v['name' . $lang] ?></h3>
                        <span class="view-more mb-3">Xem thêm</span>
                    </div>
                </a>
                <?php } ?>
                <?php } else { ?>
                <div class="col-12">
                    <div class="alert alert-warning w-100" role="alert">
                        <strong><?= khongtimthayketqua ?></strong>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="col-12 mt-2 mb-2">

        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>

    </div>
</div>