<?php

if (!defined('SOURCES')) die("Error");



/* static */
$copyright = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('copyright'), 'fetch', 7200);

$favicon = $cache->get("select photo from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('favicon', 'photo_static'), 'fetch', 7200);

$logo = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo', 'photo_static'), 'fetch', 7200);

$footer = $cache->get("select name$lang,desc$lang, content$lang from #_static where type = ? limit 0,1", array('footer'), 'fetch', 7200);

$giomocuu = $d->rawQueryOne("select desc$lang from #_static where type = ? limit 0,1", array('gio-mo-cuu'));

$policy = $d->rawQuery("select name$lang, slugvi, slugen, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('chinh-sach'));

$payment = $d->rawQuery("select name$lang, slugvi, slugen, id, photo, desc$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('hinh-thuc-thanh-toan'));

$ship = $d->rawQuery("select name$lang, slugvi, slugen, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('ho-tro-van-chuyen'));

$service = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('service'));

// $dangkynhantin =$d->rawQuery("select id, name$lang,desc$lang, slugvi, slugen  from #_newsletter where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('dangkynhantin'));

/* multi */

$vechungtoi = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('ve-chung-toi'));

$social = $d->rawQuery("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('social'));

$dichvuListMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu'));

$chungnhanListMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('chung-nhan'));

$sanphamListMenu = $d->rawQuery("select id, name$lang,desc$lang, slugvi, slugen  from #_product_list where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('san-pham'));

$sanphamCatMenu = $d->rawQuery("select id, name$lang,desc$lang, slugvi, slugen  from #_product_brand where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'));

$sanphamCatList = $d->rawQuery("select id, name$lang,desc$lang, photo, icon, slugvi, slugen, id_list, id_brand, regular_price, sale_price  from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('san-pham'));

$sanphamList = $d->rawQuery("select id, name$lang,desc$lang, photo, icon, slugvi, slugen, id_list, id_brand, regular_price, sale_price  from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('san-pham'));

$tintucList = $d->rawQuery("select name$lang, slugvi, desc$lang, content$lang, view, photo, slugen, id from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'));
// Group products by brand for tabs
$sanphamByBrand = array();
if (!empty($sanphamList)) {
    foreach ($sanphamList as $product) {
        $brandId = $product['id_brand'];
        if (!isset($sanphamByBrand[$brandId])) {
            $sanphamByBrand[$brandId] = array();
        }
        $sanphamByBrand[$brandId][] = $product;
    }
}

// Group products by category (id_list) for better product organization
$sanphamByCategory = array();
if (!empty($sanphamList)) {
    foreach ($sanphamList as $product) {
        // Handle multiple categories (comma-separated id_list)
        if (!empty($product['id_list'])) {
            $categoryIds = explode(',', $product['id_list']);
            foreach ($categoryIds as $categoryId) {
                $categoryId = trim($categoryId);
                if (!empty($categoryId)) {
                    if (!isset($sanphamByCategory[$categoryId])) {
                        $sanphamByCategory[$categoryId] = array();
                    }
                    $sanphamByCategory[$categoryId][] = $product;
                }
            }
        }
    }
}

$banner_gioithieu = $cache->get("select photo from #_photo where type = ? and act = ? limit 0,1", array('banner', 'photo_static'), 'fetch', 7200);
// 

$cauhoi = $d->rawQuery("select name$lang,content$lang, id from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('cau-hoi-thuong-gap'));

$slider = $cache->get("select name$lang, desc$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('slide'), 'result', 7200);

$partner = $d->rawQuery("select name$lang, link, photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb, id desc", array('doitac'));

/* Get statistic */

$counter = $statistic->getCounter();

$online = $statistic->getOnline();



/* Newsletter */

if (!empty($_POST['submit-newsletter'])) {

    $responseCaptcha = $_POST['recaptcha_response_newsletter'];

    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);

    $scoreCaptcha = (!empty($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;

    $actionCaptcha = (!empty($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';

    $testCaptcha = (!empty($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;

    $dataNewsletter = (!empty($_POST['dataNewsletter'])) ? $_POST['dataNewsletter'] : null;



    /* Valid data */

    if (empty($dataNewsletter['email'])) {

        $flash->set('error', emailkhongduoctrong);

    }



    if (!empty($dataNewsletter['email']) && !$func->isEmail($dataNewsletter['email'])) {

        $flash->set('error', emailkhonghople);

    }



    $error = $flash->get('error');



    if (!empty($error)) {

        $func->transfer($error, $configBase, false);

    }



    /* Save data */

    if (($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true) {

        foreach ($dataNewsletter as $column => $value) {

            $dataNewsletter[$column] = htmlspecialchars($value);

        }



        if ($d->insert('newsletter', $dataNewsletter)) {

            $func->transfer(dangkynhantinthanhcong, $configBase);

        } else {

            $func->transfer(dangkynhantinthatbai, $configBase, false);

        }

    } else {

        $func->transfer(dangkynhantinthatbai, $configBase, false);

    }

}

