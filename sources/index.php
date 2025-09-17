<?php

if (!defined('SOURCES')) die("Error");

/* static */

$popup = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('popup', 'photo_static'), 'fetch', 7200);

/* multi */

$slogan = $d->rawQueryOne("select name$lang from #_static where type = ? limit 0,1", array('slogan'));

$thucdonNoibat = $cache->get("select name$lang,desc$lang, slugvi, slugen, id, photo from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('thuc-don'), 'result', 7200);

$banner = $cache->get("select photo from #_photo where type = ? and act = ? limit 0,1", array('banner', 'photo_static'), 'fetch', 7200);

$news = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'));

$dichvu = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu'));

$tieuchi = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tieu-chi'));

$taisao = $d->rawQueryOne("select name$lang,desc$lang,photo ,photo1 from #_static where type = ? limit 0,1", array('tai-sao'));

$video = $cache->get("select name$lang, desc$lang, link_video,photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('video'), 'result', 7200);

$danhgia = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang,content$lang, id, photo from #_news where type = ?  and find_in_set('hienthi',status) order by numb,id desc", array('danh-gia'));

$doitac = $cache->get("select photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('doi-tac'), 'result', 7200);

$muctuvan = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news where type = ?  and find_in_set('hienthi',status) order by numb,id desc", array('muc-tu-van'));

$video_slider = $cache->get("select * from #_static where type = ? and find_in_set('hienthi',status) limit 0,1", array('video-slider'), 'fetch', 7200);


/* SEO */

$seopage = $d->rawQueryOne("select * from #_seopage where type = ? limit 0,1", array('trang-chu'));

$seo->set('h1', $seopage['title' . $seolang]);

if (!empty($seopage['title' . $seolang])) $seo->set('title', $seopage['title' . $seolang]);

else $seo->set('title', $titleMain);

if (!empty($seopage['keywords' . $seolang])) $seo->set('keywords', $seopage['keywords' . $seolang]);

if (!empty($seopage['description' . $seolang])) $seo->set('description', $seopage['description' . $seolang]);

$seo->set('url', $func->getPageURL());

$imgJson = (!empty($seopage['options'])) ? json_decode($seopage['options'], true) : null;

if (!empty($seopage['photo'])) {

    if (empty($imgJson) || ($imgJson['p'] != $seopage['photo'])) {

        $imgJson = $func->getImgSize($seopage['photo'], UPLOAD_SEOPAGE_L . $seopage['photo']);

        $seo->updateSeoDB(json_encode($imgJson), 'seopage', $seopage['id']);
    }

    if (!empty($imgJson)) {

        $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_SEOPAGE_L . $seopage['photo']);

        $seo->set('photo:width', $imgJson['w']);

        $seo->set('photo:height', $imgJson['h']);

        $seo->set('photo:type', $imgJson['m']);
    }
}
