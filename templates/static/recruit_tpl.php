<?php if (!empty($static)) { ?>
<!-- <div class="img-top ">
        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/1530x320x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/1530x320x1/<?= UPLOAD_PHOTO_L . $banner_tuyendung['photo'] ?>" />
    </div> -->

<div class="wrap-content">
    <div class="title-main">
        <span><?= $static['name' . $lang] ?></span>
    </div>
    <div class="box-main-recruit ">
        <div class="box-content-recruit w-clear">
            <?php
                    if (!empty($static['content' . $lang])) { 
                ?>
            <?= $func->decodeHtmlChars($static['content' . $lang]) ?>
            <?php } else { ?>
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= dangcapnhatdulieu ?></strong>
            </div>
            <?php } ?>
        </div>
    </div>

</div>



<?php } else { ?>
<div class="alert alert-warning w-100" role="alert">
    <strong><?= dangcapnhatdulieu ?></strong>
</div>
<?php } ?>