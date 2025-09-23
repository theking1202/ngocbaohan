<?php

/* Thực đơn */

$nametype = "san-pham";

$config['product'][$nametype]['title_main'] = "Sản phẩm";

$config['product'][$nametype]['dropdown'] = true;

$config['product'][$nametype]['list'] = true;

$config['product'][$nametype]['brand'] = true;

$config['product'][$nametype]['size'] = true;

$config['product'][$nametype]['view'] = true;

$config['product'][$nametype]['copy'] = true;

$config['product'][$nametype]['copy_image'] = true;

$config['product'][$nametype]['slug'] = true;

$config['product'][$nametype]['check'] = array("noibat" => noibat, "hienthi" => hienthi);

$config['product'][$nametype]['images'] = true;

$config['product'][$nametype]['icon'] = true;

$config['product'][$nametype]['show_images'] = true;

$config['product'][$nametype]['gallery'] = array(

    $nametype => array(

        "title_main_photo" => "Hình ảnh sản phẩm",

        "title_sub_photo" => hinhanh,

        "check_photo" => array("hienthi" => hienthi),

        "number_photo" => 3,

        "images_photo" => true,

        "cart_photo" => true,

        "avatar_photo" => true,

        "name_photo" => true,

        "width_photo" => 540,

        "height_photo" => 540,

        "thumb_photo" => '100x100x1',

        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP'





    )

);

$config['product'][$nametype]['regular_price'] = true;

$config['product'][$nametype]['sale_price'] = true;

$config['product'][$nametype]['discount'] = true;

$config['product'][$nametype]['desc'] = true;

$config['product'][$nametype]['content'] = true;

$config['product'][$nametype]['content_cke'] = true;

$config['product'][$nametype]['schema'] = true;

$config['product'][$nametype]['seo'] = true;

$config['product'][$nametype]['width'] = 300;

$config['product'][$nametype]['height'] = 280;

$config['product'][$nametype]['thumb'] = '100x100x1';

$config['product'][$nametype]['width_icon'] = 300;

$config['product'][$nametype]['height_icon'] = 280;

$config['product'][$nametype]['thumb_icon'] = '100x100x1';

$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';





/* Sản phẩm (List) */

$config['product'][$nametype]['title_main_list'] = danhmuccap1;

$config['product'][$nametype]['slug_list'] = true;

$config['product'][$nametype]['check_list'] = array("noibat" => noibat, "hienthi" => hienthi);

$config['product'][$nametype]['desc_list'] = true;

$config['product'][$nametype]['seo_list'] = true;



/* sản phẩm (Cat) */

$config['product'][$nametype]['title_main_brand'] = 'Danh mục cấp 2';

$config['product'][$nametype]['slug_brand'] = true;

$config['product'][$nametype]['check_brand'] = array("noibat" => noibat, "hienthi" => hienthi);

$config['product'][$nametype]['desc_brand'] = true;

$config['product'][$nametype]['seo_brand'] = true;
