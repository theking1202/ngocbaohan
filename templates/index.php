<!DOCTYPE html>

<html lang="<?= $config['website']['lang-doc'] ?>">



<head>

    <?php include TEMPLATE . LAYOUT . "head.php"; ?>

    <?php include TEMPLATE . LAYOUT . "css.php"; ?>

</head>



<body>

    <div class="containerr_layout">

        <?php


        if ($source == 'index'){
            // include TEMPLATE . LAYOUT . "loader-wrapper.php";
        }

        include TEMPLATE . LAYOUT . "seo.php";

        // include TEMPLATE . LAYOUT . "header.php";

        // include TEMPLATE . LAYOUT . "menu.php";

        if ($source == 'index') {

            include TEMPLATE . LAYOUT . "slide.php";

            

        } else {

            if ($source != 'index') {

                include TEMPLATE . LAYOUT . "breadcrumb.php";

            }

        }

        ?>

        <div

            class="<?= ($source == 'index') ? 'wrap-home' : 'padding-top-bottom' ?> <?= ($source == 'contact') ? 'isigncontact' : '' ?>">

            <?php include TEMPLATE . $template . "_tpl.php"; ?>

        </div>

        <?php

        include TEMPLATE . LAYOUT . "bottom-nav.php";

        include TEMPLATE . LAYOUT . "footer.php";

        include TEMPLATE . LAYOUT . "modal.php";

        include TEMPLATE . LAYOUT . "js.php";

        // if ($deviceType == 'mobile') include TEMPLATE . LAYOUT . "phone.php";

        // if ($deviceType == 'mobile')

        //     include TEMPLATE . LAYOUT . "phonemobile.php";

        // ?>

    </div>

</body>



</html>