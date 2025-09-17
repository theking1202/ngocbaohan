<!-- Js Config -->

<script type="text/javascript">
    var BLUEWEB_FRAMEWORK = BLUEWEB_FRAMEWORK || {};

    var CONFIG_BASE = '<?= $configBase ?>';

    var ASSET = '<?= ASSET ?>';

    var WEBSITE_NAME = '<?= (!empty($setting['name' . $lang])) ? addslashes($setting['name' . $lang]) : '' ?>';

    var TIMENOW = '<?= date("d/m/Y", time()) ?>';

    var SHIP_CART = <?= (!empty($config['order']['ship'])) ? 'true' : 'false' ?>;

    var RECAPTCHA_ACTIVE = <?= (!empty($config['googleAPI']['recaptcha']['active'])) ? 'true' : 'false' ?>;

    var RECAPTCHA_SITEKEY = '<?= $config['googleAPI']['recaptcha']['sitekey'] ?>';

    var GOTOP = ASSET + 'assets/images/top.png';

    var LANG = {

        'no_keywords': '<?= chuanhaptukhoatimkiem ?>',

        'delete_product_from_cart': '<?= banmuonxoasanphamnay ?>',

        'no_products_in_cart': '<?= khongtontaisanphamtronggiohang ?>',

        'ward': '<?= phuongxa ?>',

        'back_to_home': '<?= vetrangchu ?>',

        'thongbao': '<?= thongbao ?>',

        'dongy': '<?= dongy ?>',

        'dungluonghinhanhlon': '<?= dungluonghinhanhlon ?>',

        'dulieukhonghople': '<?= dulieukhonghople ?>',

        'banchiduocchon1hinhanhdeuplen': '<?= banchiduocchon1hinhanhdeuplen ?>',

        'dinhdanghinhanhkhonghople': '<?= dinhdanghinhanhkhonghople ?>',

        'huy': '<?= huy ?>',

    };

    var logo_img = '<?= $configBase ?><?= UPLOAD_PHOTO_L . $logo['photo'] ?>';
</script>



<!-- Js Files -->

<?php

$js->set("js/jquery.min.js");

$js->set("js/lazyload.min.js");

$js->set("bootstrap/bootstrap.js");

$js->set("js/wow.min.js");

$js->set("owlcarousel2/owl.carousel.js");

$js->set("holdon/HoldOn.js");

$js->set("confirm/confirm.js");

$js->set("simplenotify/simple-notify.js");





$js->set("easyticker/easy-ticker.js");

$js->set("fotorama/fotorama.js");

$js->set("photobox/photobox.js");

$js->set("fileuploader/jquery.fileuploader.min.js");

$js->set("datetimepicker/php-date-formatter.min.js");

$js->set("datetimepicker/jquery.mousewheel.js");

$js->set("datetimepicker/jquery.datetimepicker.js");

$js->set("js/jquery.pixelentity.shiner.min.js");

$js->set("js/comment.js");



$js->set("fancybox5/fancybox.umd.js");

$js->set("slick/slick.js");

$js->set("magiczoomplus/magiczoomplus.js");

$js->set("js/functions.js");

$js->set("mmenu/mmenu.js");

$js->set("aos/aos.js");

$js->set("toc/toc.js");

$js->set("js/apps.js");

echo $js->get();

?>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<?php if (!empty($config['googleAPI']['recaptcha']['active'])) { ?>

    <!-- Js Google Recaptcha V3 -->

    <script src="https://www.google.com/recaptcha/api.js?render=<?= $config['googleAPI']['recaptcha']['sitekey'] ?>">

    </script>

    <script type="text/javascript">
        grecaptcha.ready(function() {

            /* Newsletter */

            generateCaptcha('Newsletter', 'recaptchaResponseNewsletter');



            <?php if ($source == 'contact') { ?>

                /* Contact */

                generateCaptcha('contact', 'recaptchaResponseContact');

            <?php } ?>

        });
    </script>

<?php } ?>



<?php if (!empty($config['oneSignal']['active'])) { ?>

    <!-- Js OneSignal -->

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>

    <script type="text/javascript">
        var OneSignal = window.OneSignal || [];

        OneSignal.push(function() {

            OneSignal.init({

                appId: "<?= $config['oneSignal']['id'] ?>"

            });

        });
    </script>

<?php } ?>



<!-- Js Structdata -->

<?php include TEMPLATE . LAYOUT . "strucdata.php"; ?>



<!-- Js Addons -->

<?= $addons->set('script-main', 'script-main', 2); ?>

<?= $addons->get(); ?>



<!-- Js Body -->

<?= $func->decodeHtmlChars($setting['bodyjs']) ?>



<script type="text/javascript">
    $(document).ready(function() {

        $(".btn_toolbar").click(function() {

            $(this).toggleClass("active");

            $(".iconstoolbar").toggleClass("open");

        });

    });
</script>



<script>
    document.addEventListener('DOMContentLoaded', function() {

        const selectElement = document.getElementById('hinhthuc-newsletter');

        const labelElement = document.querySelector('label[for="hinhthuc-newsletter"]');



        selectElement.addEventListener('change', function() {

            const selectedOptionText = selectElement.options[selectElement.selectedIndex].text;

            labelElement.textContent = selectedOptionText;

        });

    });
</script>

<script>
    $(document).ready(function() {

        $('.group-tuvan').click(function() {

            $('#tuvan').val($(this).find('.tuvan-txt').html());

        })

    });

    if (isExist($('.group-tuvan'))) {

        $(".group-tuvan").click(function() {

            $('.group-tuvan').removeClass('active');



            $(this).closest('.group-tuvan').addClass('active');

        });

    }
</script>
<script>
    $(document).ready(function() {
        $('#popup').modal('show');
    });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
      var sidebar = document.getElementById("sidebar-sticky");
      var sidebarIndexMb = document.querySelector(".wrapper-sidebar");
      if (!sidebar || !sidebarIndexMb) return;

      // Lấy vị trí DƯỚI của wrapper-sidebar
      var sidebarIndexMbBottom =
          sidebarIndexMb.getBoundingClientRect().top +
          window.pageYOffset +
          sidebarIndexMb.offsetHeight;

      function handleSidebarFixed() {
          // Chỉ áp dụng fixed-sidebar khi màn hình lớn hơn 991px (desktop)
          if (window.innerWidth > 991) {
              if (window.pageYOffset > sidebarIndexMbBottom) {
                  sidebar.classList.add("fixed-sidebar");
              } else {
                  sidebar.classList.remove("fixed-sidebar");
              }
          } else {
              // Luôn xóa fixed-sidebar ở mobile
              sidebar.classList.remove("fixed-sidebar");
          }
      }

      window.addEventListener("scroll", handleSidebarFixed);
      window.addEventListener("resize", handleSidebarFixed);
      // Gọi lần đầu để đảm bảo đúng trạng thái khi load
      handleSidebarFixed();
  });

</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("sidebar-toggle");
    const sidebar = document.getElementById("sidebar-sticky");

    toggleButton.addEventListener("click", function () {
      sidebar.classList.toggle("active");
    });
  });
</script>
