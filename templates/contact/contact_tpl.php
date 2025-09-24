<?php
 if($com === "lien-he"){
?>
<div class="img-top" style="margin-top: -20px;">

    <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/1530x320x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/1530x320x1/<?= UPLOAD_PHOTO_L . $banner_gioithieu['photo'] ?>" />

</div>

<div class="content-main wrap-content">
    <div class="title-main">

        <span>Liên hệ và góp ý</span>

        <span class="animate-border"></span>

        <p>Hãy để chúng tôi kết nối và đồng hành cùng bạn</p>




    </div>
    <div class="group-contact">
        <div class="group-form">
            <div class="box-contact-left">

                <form class="contact-form validation-contactcontact_us" novalidate method="post" action="" enctype="multipart/form-data">


                    <div class="row-20">

                        <div class="contact-input col-sm-12 col-20">

                            <div class="">

                                <input type="text" name="dataContact[fullname]" class="text-sm input" id="fullname-contact" placeholder="<?= hoten ?>" value="<?= $flash->get('fullname') ?>" required>

                            </div>

                            <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>

                        </div>

                        <div class="contact-input col-sm-12 col-20">

                            <div class="">

                                <input type="number" name="dataContact[phone]" class="text-sm input" id="phone-contact" placeholder="<?= dienthoai ?>" value="<?= $flash->get('phone') ?>" required>


                            </div>

                            <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>

                        </div>



                        <div class="contact-input col-sm-12 col-20">

                            <div class="">

                                <input type="email" class="text-sm input" id="email-contact" name="dataContact[email]" placeholder="Email" value="<?= $flash->get('email') ?>" required />


                            </div>

                            <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>

                        </div>

                    </div>


                    <div class="contact-input">

                        <div class="">

                            <textarea class="text-sm input" id="content-contact" name="dataContact[content]" placeholder="<?= noidung ?>" required /><?= $flash->get('content') ?></textarea>


                        </div>



                        <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>

                    </div>

                    <button class="gr_btniconsubmit">

                        <input type="submit" class="gr_btniconsubmit" name="submit-contact" value="Gửi thông tin ">

                    </button>


                    <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">

                </form>
            </div>
            <div class="box-contact-right">
                <div class=""><?= htmlspecialchars_decode($lienhe['content' . $lang]) ?></div>
            </div>
        </div>

    </div>
    
</div>
<div class="contact-map"><?= $func->decodeHtmlChars($optsetting['coords_iframe']) ?></div>
<?php
}else{

?>
<div class="img-top">

    <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/1530x320x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/1530x320x1/<?= UPLOAD_PHOTO_L . $banner_lienhe['photo'] ?>" />

</div>

<div class="content-main wrap-content">
    <div class="title-main">

        <span>Nhận báo giá</span>

        <span class="animate-border"></span>

        <p>Liên hệ ngay với chúng tôi để nhận báo giá</p>




    </div>
    <div class="group-contact">
        <div class="group-form">
            <div class="box-contact-left">

                <form class="contact-form validation-contactcontact_us" novalidate method="post" action="" enctype="multipart/form-data">


                    <div class="row-20">

                        <div class="contact-input col-sm-12 col-20">

                            <div class="">

                                <input type="text" name="dataContact[fullname]" class="text-sm input" id="fullname-contact" placeholder="<?= hoten ?>" value="<?= $flash->get('fullname') ?>" required>

                            </div>

                            <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>

                        </div>

                        <div class="contact-input col-sm-12 col-20">

                            <div class="">

                                <input type="number" name="dataContact[phone]" class="text-sm input" id="phone-contact" placeholder="<?= dienthoai ?>" value="<?= $flash->get('phone') ?>" required>


                            </div>

                            <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>

                        </div>



                        <div class="contact-input col-sm-12 col-20">

                            <div class="">

                                <input type="email" class="text-sm input" id="email-contact" name="dataContact[email]" placeholder="Email" value="<?= $flash->get('email') ?>" required />


                            </div>

                            <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>

                        </div>

                    </div>


                    <div class="contact-input">

                        <div class="">

                            <textarea class="text-sm input" id="content-contact" name="dataContact[content]" placeholder="<?= noidung ?>" required /><?= $flash->get('content') ?></textarea>


                        </div>



                        <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>

                    </div>

                    <button class="gr_btniconsubmit">

                        <input type="submit" class="gr_btniconsubmit" name="submit-contact" value="Gửi thông tin ">

                    </button>


                    <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">

                </form>
            </div>
            <div class="box-contact-right">
                <div class=""><?= htmlspecialchars_decode($lienhe['contentvi']) ?></div>
            </div>
        </div>

    </div>
</div>
<?php
}
?>