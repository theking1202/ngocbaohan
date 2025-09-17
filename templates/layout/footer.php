<div class="footer">

    <div class="footer-article">

        <div class="wrap-content">

            <div class="footer-news footer-logo-desc-social">

                <a class="logo-head" href="">

                    <img onerror="this.src='<?= THUMBS ?>/100x100x1/assets/images/noimage.png';" src="<?= THUMBS ?>/100x100x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt="logo" title="logo" />

                </a>

                <div class="footer-name"><?= $footer['desc' . $lang] ?></div>

                <div class="social-footer">

                    <!-- <p class="title-social">Theo dõi chúng tôi:</p> -->

                    <ul class="list-unstyled d-flex align-items-center justify-content-center">

                        <?php foreach ($social as $k => $v) { ?>

                            <li class="d-inline-block align-top">

                                <a href="<?= $v['link'] ?>" target="_blank" class="me-2">

                                    <img class="lazy" data-src="<?= THUMBS ?>/30x30x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">

                                </a>

                            </li>

                        <?php } ?>

                    </ul>

                </div>



            </div>

<!--            <div class="footer-news">-->
<!---->
<!---->
<!---->
<!--                <h3 class="title-footer">Thông tin liên hệ</h3>-->
<!---->
<!--                <div class="footer-info">-->
<!---->
<!--                    --><?php //= $func->decodeHtmlChars($footer['content' . $lang]) ?>
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->

            <div class="footer-news ">

                <h3 class="title-footer">Thông tin và chính sách</h3>

                <ul class="footer-ul d-flex flex-wrap justify-content-between">

                    <?php foreach ($policy as $v) { ?>

                        <li><a class=" text-decoration-none " href="<?= $v[$sluglang] ?>"

                                title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>

                    <?php } ?>

                </ul>

                <h3 class="title-footer">Dịch vụ của chúng tôi</h3>

                <ul class="footer-ul d-flex flex-wrap justify-content-between">

                    <?php foreach ($service as $v) { ?>

                        <li><a class=" text-decoration-none " href="<?= $v[$sluglang] ?>"

                            title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>

                    <?php } ?>

                </ul>

                <!-- Đăng ký nhận thông tin -->
                <div class="newsletter-box">
                    <p class="newsletter-title">ĐĂNG KÝ NHẬN THÔNG TIN</p>
                    <div class="newsletter-divider"></div>
                    <form class="newsletter-form">
                        <div class="newsletter-input-wrap">
                            <input type="text" class="newsletter-input" placeholder="Email, sđt..." />
                            <button type="submit" class="newsletter-btn">
                            <i class="fa-solid fa-paper-plane-top newsletter-btn-icon"></i>
                            </button>
                        </div>
                    </form>


                </div>

            </div>



            <div class="footer-news">

                <!-- <div class="group-payment"> -->

                    <h3 class="title-footer">Cửa hàng</h3>

                    <div class="">

                        <?php foreach ($payment as $v) { ?>
                            <p class="store"><strong><?= $v['name' . $lang] ?></strong>: <?= $v['desc' . $lang] ?></p>

                            <!-- <a class="me-2">

                                <img class="lazy" data-src="<?= THUMBS ?>/50x50x2/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">

                            </a> -->


                        <?php } ?>

                    </div>

                <!-- </div> -->
                <div class="map">

                    <?= $addons->set('footer-map', 'footer-map', 1); ?>

                </div>
                
            </div>


            

        </div>

<!--        <div class="map-facebook">-->
<!---->
<!--            -->
<!---->
<!--            <div class="face">-->
<!---->
<!--                --><?php //= $addons->set('fanpage-facebook', 'fanpage-facebook', 1); ?>
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->



    </div>



    <div class="footer-powered">

        <div class="wrap-content">

            <div class="row text-align-center">

                <div class="footer-copyright col-md-6">Copyright © 2024 <?= $copyright['name' . $lang] ?>

                </div>

                <div class="footer-statistic col-md-6">

                    <span><?= dangonline ?>: <?= $online ?></span>

                    <span><?= homnay ?>: <?= $counter['today'] ?></span>

                    <span><?= trongtuan ?>: <?= $counter['week'] ?></span>

                    <span><?= trongthang ?>: <?= $counter['month'] ?></span>

                    <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>

                </div>

            </div>

        </div>

    </div>



    <?php
    // $addons->set('messages-facebook', 'messages-facebook', 2); 
    ?>

</div>



<a class="btn-youtube btn-frame text-decoration-none" target="_blank" href="<?= $optsetting['youtube'] ?>">

    <div class="animated infinite zoomIn kenit-alo-circle"></div>

    <div class="animated infinite pulse kenit-alo-circle-fill"></div>

    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'youtube2.png', 'alt' => 'Zalo']) ?></i>

</a>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">

    <div class="animated infinite zoomIn kenit-alo-circle"></div>

    <div class="animated infinite pulse kenit-alo-circle-fill"></div>

    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>

</a>

<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">

    <div class="animated infinite zoomIn kenit-alo-circle"></div>

    <div class="animated infinite pulse kenit-alo-circle-fill"></div>

    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>

</a>