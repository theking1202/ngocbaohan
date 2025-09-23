<?php

/* Giới thiệu */

$nametype = "gioi-thieu";
$config['static'][$nametype]['title_main'] = "Giới thiệu";

$config['static'][$nametype]['check'] = array("hienthi" => hienthi);

$config['static'][$nametype]['name'] = true;

$config['static'][$nametype]['desc'] = true;

$config['static'][$nametype]['desc_cke'] = true;

$config['static'][$nametype]['content'] = true;

$config['static'][$nametype]['content_cke'] = true;

$config['static'][$nametype]['images'] = false;

// slogan

$nametype = "slogan";

$config['static'][$nametype]['title_main'] = "Slogan";

$config['static'][$nametype]['check'] = array("hienthi" => hienthi);

$config['static'][$nametype]['name'] = true;

// giờ mở cửa

$nametype = "gio-mo-cuu";

$config['static'][$nametype]['title_main'] = "Giờ mở cửa";

$config['static'][$nametype]['check'] = array("hienthi" => hienthi);

$config['static'][$nametype]['desc'] = true;

$config['static'][$nametype]['desc_cke'] = true;







/* copyright */

$nametype = "copyright";

$config['static'][$nametype]['title_main'] = "Copyright";

$config['static'][$nametype]['check'] = array("hienthi" => hienthi);

$config['static'][$nametype]['name'] = true;



/* Liên hệ */

$nametype = "lienhe";

$config['static'][$nametype]['title_main'] = lienhe;

$config['static'][$nametype]['check'] = array("hienthi" => hienthi);

$config['static'][$nametype]['content'] = true;

$config['static'][$nametype]['content_cke'] = true;



/* Footer */

$nametype = "footer";

$config['static'][$nametype]['title_main'] = "Footer";

$config['static'][$nametype]['check'] = array("hienthi" => hienthi);

$config['static'][$nametype]['name'] = true;
$config['static'][$nametype]['desc'] = true;
$config['static'][$nametype]['content'] = true;

$config['static'][$nametype]['content_cke'] = true;



// chứng nhận

// $nametype = "chung-nhan";

// $config['static'][$nametype]['title_main'] = "Chứng nhận";

// $config['static'][$nametype]['check'] = array("hienthi" => hienthi);

// $config['static'][$nametype]['content'] = true;

// $config['static'][$nametype]['content_cke'] = true;
$nametype = "video-slider";
$config['static'][$nametype]['title_main'] = "Video";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['images'] = false;
$config['static'][$nametype]['file'] = true;
$config['static'][$nametype]['name'] = true;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 1366;
$config['static'][$nametype]['height'] = 535;
$config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
$config['static'][$nametype]['file_type'] = '.mp4';

