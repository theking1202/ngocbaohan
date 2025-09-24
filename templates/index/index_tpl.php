<?php
// Assume you have these variables available from your controller/database queries:
// $sanphamListMenu - product categories
// $sanphamList - products for each category
// $dichvuList - services
// $tintucList - news articles
// $configBase - base URL
$countWishlist = $d->rawQuery("SELECT COUNT(*) as total FROM #_wishlist where id_user = '".$_SESSION[$loginMember]['id']."'");
?>

<script>
// Set user login status for wishlist functionality
window.userLoggedIn = <?= isset($_SESSION['LoginMemberMSHD']) ? 'true' : 'false' ?>;
</script>

<div class="background-wrapper">
    <div class="wrapper-sidebar">
        <div class="sidebar-custom" id="sidebar-sticky">
            <button id="sidebar-toggle" class="hamburger-menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="sidebar-inner">
                <div class="section-logo">
                    <img src="<?= $configBase ?>thumbs/100x100x1/upload/photo/thiet-ke-chua-co-ten-2-2232.png" alt=""
                        class="logo-sidebar">
                </div>
                <div class="sidebar-control-section">
                    <h4 class="text-white text-center">Thông tin</h4>
                    <div class="sidebar-control-button">
                        <div class="sidebar-control-icon text-center">
                            <div class="sidebar-control-icon-container">
                                <a href="cac-chi-nhanh" class="text-center">
                                    <img class="icon-container-img"
                                        src="<?= $configBase ?>assets/images/cac_cua_hang.png" alt="">
                                    <p class="text-white icon-container-title">Các chi nhánh</p>
                                </a>
                            </div>
                            <div class="sidebar-control-icon-container">
                                <a href="quyen-loi-thanh-vien" class="text-center">
                                    <img class="icon-container-img" src="<?= $configBase ?>assets/images/member.png"
                                        alt="">
                                    <p class="text-white icon-container-title">Quyền lợi<br> thành viên</p>
                                </a>
                            </div>
                            <div class="sidebar-control-icon-container">
                                <a href="chinh-sach-thu-doi" class="text-center">
                                    <img class="icon-container-img" src="<?= $configBase ?>assets/images/doi_tra.png"
                                        alt="">
                                    <p class="text-white icon-container-title">Chính sách<br> thu đổi</p>
                                </a>
                            </div>
                            <div class="sidebar-control-icon-container">
                                <a href="chinh-sach-bao-hanh" class="text-center">
                                    <img class="icon-container-img" src="<?= $configBase ?>assets/images/bao_hanh.png"
                                        alt="">
                                    <p class="text-white icon-container-title">Chính sách<br> bảo hành</p>
                                </a>
                            </div>
                            <div class="sidebar-control-icon-container">
                                <a href="javascript:void(0)" class="text-center" onclick="scrollToSection('xemtuvi')">
                                    <img class="icon-container-img" src="<?= $configBase ?>assets/images/phong_thuy.png"
                                        alt="">
                                    <p class="text-white icon-container-title">Coi phong<br> thủy</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="product-head d-flex">
                <div class="product-head1">
                    <div class="index-search">
                        <p class="m-0" style="cursor: pointer;" onclick="onSearch('keyword');"><i
                                class="index-search-icon fa-solid fa-magnifying-glass"></i></p>
                        <input type="text" class="index-search-input" placeholder="Tìm kiếm" id="keyword"
                            onkeypress="doEnter(event,'keyword');">
                        <i class="index-search-filter fa-solid fa-sliders"></i>
                    </div>
                    <div class="index-location">
                        <i class="fa-solid fa-location-dot index-location-icon"></i>
                        <span>Ninh Kiều, Cần Thơ</span>
                    </div>
                </div>
                <div class="index-actions">
                    <?php if (isset($_SESSION[$loginMember])): ?>
                    <div class="user-dropdown-container" style="position: relative; display: inline-block;">
                        <a href="account/tai-khoan" class="text-green fw-bold user-login">Xin chào,
                            <?= $_SESSION[$loginMember]['fullname']?></a>
                        <div class="dropup-menu-nbh" style="
                            position: absolute;
                            bottom: 100%;
                            left: 50%;
                            transform: translateX(-50%);
                            background: white;
                            border: 1px solid #e5e7eb;
                            border-radius: 8px;
                            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                            padding: 8px 0;
                            min-width: 180px;
                            z-index: 1000;
                            opacity: 0;
                            visibility: hidden;
                            transition: opacity 0.2s ease, visibility 0.2s ease;
                            margin-bottom: 8px;
                        ">
                            <a href="account/tai-khoan" class="dropup-menu-nbh-item" style="
                                display: flex;
                                align-items: center;
                                padding: 8px 16px;
                                color: #374151;
                                text-decoration: none;
                                transition: background-color 0.2s ease;
                            " onmouseover="this.style.backgroundColor='#f3f4f6'"
                                onmouseout="this.style.backgroundColor='transparent'">
                                <i class="fas fa-user" style="margin-right: 8px; width: 16px; text-align: center;"></i>
                                <span>Thông tin tài khoản</span>
                            </a>
                            <a href="account/dang-xuat" class="dropup-menu-nbh-item" style="
                                display: flex;
                                align-items: center;
                                padding: 8px 16px;
                                color: #374151;
                                text-decoration: none;
                                transition: background-color 0.2s ease, color 0.2s ease;
                            " onmouseover="this.style.backgroundColor='#fee2e2'; this.style.color='#dc2626'"
                                onmouseout="this.style.backgroundColor='transparent'; this.style.color='#374151'">
                                <i class="fas fa-sign-out-alt"
                                    style="margin-right: 8px; width: 16px; text-align: center;"></i>
                                <span>Đăng xuất</span>
                            </a>
                        </div>
                    </div>
                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const userDropdownContainer = document.querySelector('.user-dropdown-container');
                        const dropupMenu = userDropdownContainer.querySelector('.dropup-menu-nbh');

                        userDropdownContainer.addEventListener('mouseenter', function() {
                            dropupMenu.style.opacity = '1';
                            dropupMenu.style.visibility = 'visible';
                        });

                        userDropdownContainer.addEventListener('mouseleave', function() {
                            dropupMenu.style.opacity = '0';
                            dropupMenu.style.visibility = 'hidden';
                        });
                    });
                    </script>
                    <?php else: ?>
                    <a href="account/dang-nhap"><i class="fa-solid fa-user index-user-icon"></i></a>
                    <?php endif; ?>
                    <a href="gio-hang" title="Giỏ hàng">
                        <div class="cart-icon-wrapper">
                            <i class="fas fa-shopping-cart index-cart-icon"></i>
                            <span class="cart-count"
                                id="cart-count"><?= (!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0 ?></span>
                        </div>
                    </a>
                    <a href="account/san-pham-yeu-thich" title="Sản phẩm yêu thích">
                        <div class="cart-icon-wrapper">
                            <i class="fa-regular fa-heart index-cart-icon"></i>
                            <span class="cart-count"
                                id="cart-count"><?= (!empty($countWishlist[0]['total'])) ? $countWishlist[0]['total'] : 0 ?></span>
                        </div>
                    </a>
                    <div class="index-hotline">
                        <span class="index-hotline-label">Hotline:</span>
                        <span class="index-hotline-number">0949 661 188</span>
                    </div>
                </div>
            </div>

            <div class="main-content-wrapper">
                <div class="section-product">
                    <span class="section-title">SẢN PHẨM CỦA CHÚNG TÔI</span>
                    <div class="product-tabs">
                        <?php
                            if($sanphamListMenu):
                                foreach($sanphamListMenu as $k => $v): 
                        ?>
                        <span class="product-tab text-uppercase <?= ($k == 0) ? 'active' : '' ?>"
                            data-tab="<?= $v['slug' . $lang]?>"><?= $v['namevi']?></span>
                        <?php
                                endforeach;
                            endif;
                        ?>
                    </div>

                    <?php
                    if($sanphamListMenu):
                        foreach($sanphamListMenu as $k => $category):
                            // Get products for this category - filter by id_list
                            $categoryProducts = [];
                            if(isset($sanphamList) && is_array($sanphamList)) {
                                foreach($sanphamList as $product) {
                                    // Check if product belongs to this category
                                    if(is_string($product['id_list'])) {
                                        // If id_list is comma-separated string like "1,2,3"
                                        $productCategories = explode(',', $product['id_list']);
                                        if(in_array($category['id'], array_map('trim', $productCategories))) {
                                            $categoryProducts[] = $product;
                                        }
                                    } else {
                                        // If id_list is single integer
                                        if($product['id_list'] == $category['id']) {
                                            $categoryProducts[] = $product;
                                        }
                                    }
                                }
                            }
                            $chunkedProducts = array_chunk($categoryProducts, 6); // 6 products per slide
    
                    ?>
                    <!-- Tab Content: <?= $category['namevi'] ?> -->
                    <div class="tab-content <?= ($k == 0) ? 'active' : '' ?>" id="<?= $category['slug' . $lang]?>">
                        <div class="carousel-wrapper">
                            <div class="carousel-container">
                                <?php if(count($chunkedProducts) > 1): ?>
                                <button class="carousel-nav carousel-prev"
                                    onclick="prevSlide('<?= $category['slug' . $lang]?>')">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>
                                <?php endif; ?>

                                <div class="carousel-track" data-category="<?= $category['slug' . $lang]?>">
                                    <?php 
                                    if($chunkedProducts):
                                        foreach($chunkedProducts as $slideIndex => $slideProducts): 
                                    ?>
                                    <!-- Slide <?= $slideIndex + 1 ?> -->
                                    <div class="carousel-slide">
                                        <div class="product-list">
                                            <?php foreach($slideProducts as $product): ?>

                                            <div class="product-card">
                                                <div class="image-container">
                                                    <a href="<?= $product['slug' . $lang] ?>">
                                                        <div class="product-image default-image">
                                                            <img src="<?= THUMBS ?>/285x285x2/<?= UPLOAD_PRODUCT_L . $product['photo'] ?>"
                                                                alt="<?= $product['namevi'] ?>"
                                                                class="product-image default-image">
                                                        </div>
                                                        <?php if(!empty($product['icon'])): ?>
                                                        <div class="product-image hover-image">
                                                            <img src="<?= THUMBS ?>/285x285x2/<?= UPLOAD_PRODUCT_L . $product['icon'] ?>"
                                                                alt="<?= $product['namevi'] ?>"
                                                                class="product-image hover-image">
                                                        </div>
                                                    </a>
                                                    <?php endif; ?>
                                                    <?php 
                                                    // Check if product is in user's wishlist
                                                    $isInWishlist = false;
                                                    if (isset($_SESSION['LoginMemberMSHD']['id']) && isset($d)) {
                                                        $userId = $_SESSION['LoginMemberMSHD']['id'];
                                                        $wishlistCheck = $d->rawQueryOne("SELECT id FROM #_wishlist WHERE id_user = ? AND id_product = ?", array($userId, $product['id']));
                                                        $isInWishlist = !empty($wishlistCheck);
                                                    }
                                                    ?>
                                                    <div class="heart-icon wishlist-add <?= $isInWishlist ? 'active in-wishlist' : '' ?>"
                                                        data-product-id="<?= $product['id'] ?>"
                                                        title="<?= $isInWishlist ? 'Bỏ khỏi yêu thích' : 'Thêm vào yêu thích' ?>">
                                                        <i
                                                            class="<?= $isInWishlist ? 'fa-solid' : 'fa-regular' ?> fa-heart"></i>
                                                    </div>
                                                    <a class="eye-icon" href="<?= $product['slug' . $lang] ?>">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name"><?= $product['namevi'] ?></h3>
                                                    <div class="product-price">
                                                        <?php if($product['sale_price'] > 0): ?>
                                                        <span
                                                            class="sale-price"><?= number_format($product['sale_price']) ?>
                                                            VNĐ</span>
                                                        <span
                                                            class="regular-price"><?= number_format($product['regular_price']) ?>
                                                            VNĐ</span>
                                                        <?php elseif($product['regular_price'] > 0): ?>
                                                        <?= number_format($product['regular_price']) ?> VNĐ
                                                        <?php else: ?>
                                                        Liên hệ
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow addcart"
                                                            data-id="<?= $product['id'] ?>" data-action="buynow">Mua
                                                            Ngay</button>
                                                        <button class="btn btn-secondary shopnow addcart"
                                                            data-id="<?= $product['id'] ?>" data-action="addnow">Thêm
                                                            Vào Giỏ Hàng</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                    <div class="carousel-slide">
                                        <div class="product-list">
                                            <p class="no-products">Không có sản phẩm trong danh mục này</p>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>

                                <?php if(count($chunkedProducts) > 1): ?>
                                <button class="carousel-nav carousel-next"
                                    onclick="nextSlide('<?= $category['slug' . $lang]?>')">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="container-service">
    <div class="service-section">
        <div class="service-section-logo">
            <!-- Logo chính -->
            <img src="<?= $configBase ?>thumbs/100x100x1/upload/photo/thiet-ke-chua-co-ten-2-2232.png" alt="Logo"
                class="service-section-logo-img">
        </div>
        <!-- Tiêu đề -->
        <div class="service-head-title">DỊCH VỤ CỦA CHÚNG TÔI</div>
        <div class="service-list">
            <!-- Đổi trả -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-arrows-rotate" style="font-size: 50px;color:#104428"></i>
                </div>
                <div class="service-title">ĐỔI TRẢ</div>
                <div class="service-desc">Điều kiện áp dụng đổi trả: Sản phẩm được đổi trả trong vòng 7 ngày kể từ ngày
                    mua (kèm hóa đơn mua ….)</div>
                <a href="#" class="service-link">Xem thêm..</a>
            </div>
            <!-- Thiết kế theo yêu cầu -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-regular fa-pen-ruler" style="font-size: 50px;color:#104428"></i>
                </div>
                <div class="service-title">THIẾT KẾ THEO YÊU CẦU</div>
                <div class="service-desc">Khách hàng cung cấp ý tưởng, yêu cầu cụ thể về kiểu dáng, chất liệu, kích
                    thước, và các chi tiết khác. Đội ngũ tư vấn sẽ hỗ trợ để h…</div>
                <a href="#" class="service-link mt-3">Xem thêm..</a>
            </div>
            <!-- Đảm bảo đúng giá -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-hand-holding-dollar" style="font-size: 50px;color:#104428"></i>
                </div>
                <div class="service-title">ĐẢM BẢO ĐÚNG GIÁ</div>
                <div class="service-desc">Tiệm vàng cam kết báo giá chính xác và rõ ràng cho mọi sản phẩm thiết kế theo
                    yêu cầu của khách hàng trước khi bắt đầu qu……</div>
                <a href="#" class="service-link">Xem thêm..</a>
            </div>
        </div>
    </div>
</div>

<div class="news-service">
    <div class="row">
        <?php if(isset($tintucList) && count($tintucList) > 0): ?>
            <?php 
                // Get first 3 featured articles
                $featuredNews = array_slice($tintucList, 0, 3);
                $firstTwo = array_slice($featuredNews, 0, 2);
                $lastOne = isset($featuredNews[2]) ? $featuredNews[2] : null;
            ?>
            <div class="col-md-6 news-col-1">
                <div class="row">
                    <?php foreach($firstTwo as $k => $article): ?>
                    <div class="col-12 <?= $k == 0 ? 'mb-3' : '' ?> position-relative">
                        <a href="<?= $article[$sluglang] ?>" class="text-decoration-none">
                            <div class="news-service-items">
                                <img src="<?= THUMBS ?>/285x200x1/<?= UPLOAD_NEWS_L . $article['photo'] ?>" 
                                     alt="<?= $article['name' . $lang] ?>" 
                                     class="news-service-items-img"
                                     onerror="this.src='<?= $configBase ?>/assets/images/noimage.png';">
                                <div class="news-service-items-section">
                                    <div class="items-section-text-1">
                                        <?= $article['name' . $lang] ?>
                                    </div>
                                    <div class="items-section-text-2">
                                        <span style="text-decoration: underline;"><?= $func->limitWords($article['desc' . $lang], 30) ?>...</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php if($lastOne): ?>
            <div class="col-md-6">
                <div class="col-12 mb-3 position-relative">
                    <a href="<?= $lastOne[$sluglang] ?>" class="text-decoration-none">
                        <div class="news-service-items news-service-items-lg">
                            <img src="<?= THUMBS ?>/400x300x1/<?= UPLOAD_NEWS_L . $lastOne['photo'] ?>" 
                                 alt="<?= $lastOne['name' . $lang] ?>" 
                                 class="news-service-items-img"
                                 onerror="this.src='<?= $configBase ?>/assets/images/noimage.png';">
                            <div class="news-service-items-section news-service-items-section-lg">
                                <div class="items-section-text-1">
                                    <?= $lastOne['name' . $lang] ?>
                                </div>
                                <div class="items-section-text-2">
                                    <span style="text-decoration: underline;"><?= $func->limitWords($lastOne['desc' . $lang], 100) ?>...</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endif; ?>
        <?php else: ?>
           
            <!-- <div class="col-md-6 news-col-1">
                <div class="row">
                    <div class="col-12 mb-3 position-relative">
                        <div class="news-service-items">
                            <img src="<?= $configBase ?>/assets/images/vang2.png" alt="" class="news-service-items-img">
                            <div class="news-service-items-section">
                                <div class="items-section-text-1">
                                    Dự đoán tử vi<br>
                                    Canh thân<br>
                                    1980
                                </div>
                                <div class="items-section-text-2">
                                    <span style="text-decoration: underline;">Tổng quan canh<br>thân 1980...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 position-relative">
                        <div class="news-service-items">
                            <img src="<?= $configBase ?>/assets/images/vang1.jpg" alt="" class="news-service-items-img">
                            <div class="news-service-items-section">
                                <div class="items-section-text-1">
                                    Những điều cần<br>
                                    biết về tuổi Mão<br>
                                    trong năm 2025
                                </div>
                                <div class="items-section-text-2">
                                    <span style="text-decoration: underline;">Trong năm 2025,<br>tuổi Mão sẽ....</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-12 mb-3 position-relative">
                    <div class="news-service-items news-service-items-lg">
                        <img src="<?= $configBase ?>/assets/images/vang3.webp" alt="" class="news-service-items-img">
                        <div class="news-service-items-section news-service-items-section-lg">
                            <div class="items-section-text-1">
                                Trong năm 2025 <br>
                                các con giáp ăn <br>
                                nên làm ra
                            </div>
                            <div class="items-section-text-2">
                                <span style="text-decoration: underline;">Năm 2025, sẽ có<br>nhiều thay đổi...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <?php endif; ?>
    </div>
</div>

<div class="news-service text-center">
    <div class="main-content" style="margin: 0px !important;">
        <div class="service-section-logo">
            <!-- Logo chính -->
            <img src="<?= $configBase ?>thumbs/100x100x1/upload/photo/thiet-ke-chua-co-ten-2-2232.png" alt="Logo"
                class="service-section-logo-img">
        </div>

        <!-- Tiêu đề -->
        <div class="service-head-title text-uppercase">Sản phẩm phong thủy</div>

        <!-- Feng Shui Product Tabs -->
        <div class="product-tabs">
            <?php
                if($sanphamCatMenu):
                    foreach($sanphamCatMenu as $k => $v): 
            ?>
            <span class="product-tab text-uppercase <?= ($k == 0) ? 'active' : '' ?>"
                data-tab="fengshui-<?= $v['slug' . $lang]?>"><?= $v['namevi']?></span>
            <?php
                    endforeach;
                endif;
            ?>
        </div>

        <?php
        if($sanphamCatMenu):
            foreach($sanphamCatMenu as $k => $category):
                // Get feng shui products for this category - filter by id_list
                $categoryProducts = [];
                if(isset($sanphamCatList) && is_array($sanphamCatList)) {
                    foreach($sanphamCatList as $product) {
                        // Check if product belongs to this category
                        if(is_string($product['id_brand'])) {
                            // If id_list is comma-separated string like "1,2,3"
                            $productCategories = explode(',', $product['id_brand']);
                            if(in_array($category['id'], array_map('trim', $productCategories))) {
                                $categoryProducts[] = $product;
                            }
                        } else {
                            // If id_list is single integer
                            if($product['id_brand'] == $category['id']) {
                                $categoryProducts[] = $product;
                            }
                        }
                    }
                }
                $chunkedProducts = array_chunk($categoryProducts, 6); // 6 products per slide

        ?>
        <!-- Feng Shui Tab Content: <?= $category['namevi'] ?> -->
        <div class="tab-content <?= ($k == 0) ? 'active' : '' ?>" id="fengshui-<?= $category['slug' . $lang]?>"
            style="<?= ($k != 0) ? 'display: none;' : '' ?>">
            <div class="carousel-wrapper" style="position: relative; overflow: hidden;">
                <div class="carousel-container-2" style="overflow: hidden; position: relative;">
                    <?php if(count($chunkedProducts) > 1): ?>
                    <button class="carousel-nav carousel-prev"
                        onclick="prevSlideFengShui('fengshui-<?= $category['slug' . $lang]?>')"
                        style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); z-index: 10; background: rgba(16, 68, 40, 0.8); color: white; border: none; padding: 10px; border-radius: 50%; cursor: pointer;">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <?php endif; ?>

                    <div class="carousel-track-2 fengshui-track"
                        data-category="fengshui-<?= $category['slug' . $lang]?>"
                        style="display: flex; transition: transform 0.3s ease; width: <?= count($chunkedProducts) * 100 ?>%;">
                        <?php 
                        if($chunkedProducts):
                            foreach($chunkedProducts as $slideIndex => $slideProducts): 
                        ?>
                        <!-- Slide <?= $slideIndex + 1 ?> -->
                        <div class="carousel-slide-2"
                            style="width: <?= 100 / count($chunkedProducts) ?>%; flex-shrink: 0; padding: 0 10px; box-sizing: border-box;">
                            <div class="product-list2">
                                <?php foreach($slideProducts as $product): ?>
                                <div class="product-card">
                                    <div class="image-container">
                                        <a href="<?= $product['slug' . $lang] ?>">
                                            <div class="product-image default-image">
                                                <img src="<?= THUMBS ?>/285x285x2/<?= UPLOAD_PRODUCT_L . $product['photo'] ?>"
                                                    alt="<?= $product['namevi'] ?>" class="product-image default-image">
                                            </div>
                                            <?php if(!empty($product['icon'])): ?>
                                            <div class="product-image hover-image">
                                                <img src="<?= THUMBS ?>/285x285x2/<?= UPLOAD_PRODUCT_L . $product['icon'] ?>"
                                                    alt="<?= $product['namevi'] ?>" class="product-image hover-image">
                                            </div>
                                        </a>
                                        <?php endif; ?>
                                        <?php 
                                        // Check if product is in user's wishlist for feng shui products
                                        $isInWishlist = false;
                                        if (isset($_SESSION['LoginMemberMSHD']['id']) && isset($d)) {
                                            $userId = $_SESSION['LoginMemberMSHD']['id'];
                                            $wishlistCheck = $d->rawQueryOne("SELECT id FROM #_wishlist WHERE id_user = ? AND id_product = ?", array($userId, $product['id']));
                                            $isInWishlist = !empty($wishlistCheck);
                                        }
                                        ?>
                                        <div class="heart-icon wishlist-add <?= $isInWishlist ? 'active in-wishlist' : '' ?>"
                                            data-product-id="<?= $product['id'] ?>"
                                            title="<?= $isInWishlist ? 'Bỏ khỏi yêu thích' : 'Thêm vào yêu thích' ?>">
                                            <i class="<?= $isInWishlist ? 'fa-solid' : 'fa-regular' ?> fa-heart"></i>
                                        </div>
                                        <a class="eye-icon" href="<?= $product['slug' . $lang] ?>">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><?= $product['namevi'] ?></h3>
                                        <div class="product-price">
                                            <?php if($product['sale_price'] > 0): ?>
                                            <span class="sale-price"><?= number_format($product['sale_price']) ?>
                                                VNĐ</span>
                                            <span class="regular-price"><?= number_format($product['regular_price']) ?>
                                                VNĐ</span>
                                            <?php elseif($product['regular_price'] > 0): ?>
                                            <?= number_format($product['regular_price']) ?> VNĐ
                                            <?php else: ?>
                                            Liên hệ
                                            <?php endif; ?>
                                        </div>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary shopnow addcart"
                                                data-id="<?= $product['id'] ?>" data-action="buynow">Mua Ngay</button>
                                            <button class="btn btn-secondary shopnow addcart"
                                                data-id="<?= $product['id'] ?>" data-action="addnow">Thêm Vào Giỏ
                                                Hàng</button>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php 
                            endforeach;
                        else:
                        ?>
                        <div class="carousel-slide-2"
                            style="width: 100%; flex-shrink: 0; padding: 0 10px; box-sizing: border-box;">
                            <div class="product-list2">
                                <p class="no-products"></p>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <?php if(count($chunkedProducts) > 1): ?>
                    <button class="carousel-nav carousel-next"
                        onclick="nextSlideFengShui('fengshui-<?= $category['slug' . $lang]?>')"
                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); z-index: 10; background: rgba(16, 68, 40, 0.8); color: white; border: none; padding: 10px; border-radius: 50%; cursor: pointer;">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php 
            endforeach;
        endif;
        ?>
    </div>
</div>

<script>
// Enhanced feng shui product tab switching and carousel
document.addEventListener('DOMContentLoaded', function() {
    // Get all feng shui tabs and tab contents
    const fengshuiTabs = document.querySelectorAll('.product-tabs .product-tab[data-tab^="fengshui-"]');
    const fengshuiTabContents = document.querySelectorAll('.tab-content[id^="fengshui-"]');

    // Initialize feng shui carousel states
    const fengshuiCarouselStates = {};

    // Setup carousel states for each feng shui category
    fengshuiTabs.forEach(tab => {
        const targetTab = tab.getAttribute('data-tab');
        const targetContent = document.getElementById(targetTab);
        if (targetContent) {
            const slides = targetContent.querySelectorAll('.carousel-slide-2');
            fengshuiCarouselStates[targetTab] = {
                currentSlide: 0,
                totalSlides: slides.length
            };
        }
    });

    // Feng shui tab switching functionality
    fengshuiTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');

            // Remove active class from all feng shui tabs and contents
            fengshuiTabs.forEach(t => t.classList.remove('active'));
            fengshuiTabContents.forEach(content => {
                content.classList.remove('active');
                content.style.display = 'none';
            });

            // Add active class to clicked tab and corresponding content
            this.classList.add('active');
            const targetContent = document.getElementById(targetTab);
            if (targetContent) {
                targetContent.classList.add('active');
                targetContent.style.display = 'block';
            }
        });
    });

    // Feng shui carousel functionality
    window.nextSlideFengShui = function(tabId) {
        const state = fengshuiCarouselStates[tabId];
        if (state && state.currentSlide < state.totalSlides - 1) {
            state.currentSlide++;
            updateFengshuiCarousel(tabId);
        }
    }

    window.prevSlideFengShui = function(tabId) {
        const state = fengshuiCarouselStates[tabId];
        if (state && state.currentSlide > 0) {
            state.currentSlide--;
            updateFengshuiCarousel(tabId);
        }
    }

    function updateFengshuiCarousel(tabId) {
        const state = fengshuiCarouselStates[tabId];
        const track = document.querySelector(`#${tabId} .fengshui-track`);
        if (track && state) {
            const slideWidth = 100 / state.totalSlides;
            const translateX = -state.currentSlide * slideWidth;
            track.style.transform = `translateX(${translateX}%)`;
        }
    }
});
</script>

<div class="container-nguhanh" id="xemtuvi">
    <div class="nguhanh-section">
        <div class="service-section-logo1">
            <!-- Logo chính -->
            <img src="<?= $configBase ?>thumbs/100x100x1/upload/photo/thiet-ke-chua-co-ten-2-2232.png" alt="Logo"
                class="service-section-logo-img">
        </div>
        <!-- Tiêu đề -->
        <div class="nguhanh-head-title text-uppercase">nhập thông tin để ngọc bảo hân xem phong thủy giúp bạn</div>
        <form class="nguhanh-form">
            <div class="nguhanh-input-group">
                <label class="nguhanh-label">Họ Và Tên</label>
                <input type="text" class="nguhanh-input" placeholder="Ngày / Tháng / Năm">
            </div>

            <div class="nguhanh-input-group">
                <label class="nguhanh-label">Năm sinh của bạn</label>
                <input type="text" class="nguhanh-input" placeholder="Ngày / Tháng / Năm">
            </div>

            <div class="nguhanh-input-group">
                <label class="nguhanh-label">Giới tính của bạn</label>
                <select name="" class="nguhanh-input select-nguhanh" id="">
                    <option value="1">Nam</option>
                    <option value="2">Nữ</option>
                </select>
            </div>

            <div class="nguhanh-input-group">
                <label class="nguhanh-label">Thông tin liên hệ</label>
                <input type="text" class="nguhanh-input" placeholder="SĐT, Email, ....">
            </div>

            <div class="nguhanh-input-group full-width">
                <label class="nguhanh-label">Ghi chú</label>
                <textarea class="nguhanh-input nguhanh-textarea"
                    placeholder="Bạn có thể chia sẻ thêm một vài thông tin cần thiết....."></textarea>
            </div>
            <button type="submit" class="nguhanh-submit">XEM PHONG THỦY</button>
            <div class="nguhanh-description">
                <h3>Màu sắc & Ngũ hành</h3>
                <p>Ngũ hành mang cùng có nhiều loại, nên khi dùng màu của Mạng trùng với màu của Hành thì phải cần nhớ
                    cần thận vì "tương" hành là con đạo hại lưỡi, tùy theo mạng mà đối khi tôi tốt, đội khi lại xấu. Thí
                    dụ: Lương Kim thành khi, tức là tốt chỉ cho những người mạng kim nguyên tùy chưa chế biết nhợ như
                    Hải Trung Kim; Sạ Trung Kim; Bạch Lạp Kim. Các mạng Kim khác thi lại hòa ra "tương kim, kim khuyết"
                    tức là hại kim hành mà Kim ăn nhau có thể gây sức mẽ, hư hại cho nhau. Cho nên nếu không biết chắc
                    thận thì tránh mặc, deo, mang những màu cùng Mạng của mình.</p>
            </div>


        </form>
    </div>
</div>

<script>
// Enhanced tab switching with database categories
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.product-tab');
    const tabContents = document.querySelectorAll('.tab-content');

    // Initialize carousel states dynamically
    const carouselStates = {};

    // Setup carousel states for each category
    tabs.forEach(tab => {
        const targetTab = tab.getAttribute('data-tab');
        const targetContent = document.getElementById(targetTab);
        if (targetContent) {
            const slides = targetContent.querySelectorAll('.carousel-slide');
            carouselStates[targetTab] = {
                currentSlide: 0,
                totalSlides: slides.length
            };
        }
    });

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');

            // Remove active class from all tabs and contents
            tabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(content => {
                content.classList.remove('active');
                content.style.display = 'none';
            });

            // Add active class to clicked tab and corresponding content
            this.classList.add('active');
            const targetContent = document.getElementById(targetTab);
            if (targetContent) {
                targetContent.classList.add('active');
                targetContent.style.display = 'block';
            }
        });
    });

    // Enhanced carousel functionality
    window.nextSlide = function(tabId) {
        const state = carouselStates[tabId];
        if (state && state.currentSlide < state.totalSlides - 1) {
            state.currentSlide++;
            updateCarousel(tabId);
        }
    }

    window.prevSlide = function(tabId) {
        const state = carouselStates[tabId];
        if (state && state.currentSlide > 0) {
            state.currentSlide--;
            updateCarousel(tabId);
        }
    }

    function updateCarousel(tabId) {
        const state = carouselStates[tabId];
        const track = document.querySelector(`#${tabId} .carousel-track`);
        if (track && state) {
            const slideWidth = 100 / state.totalSlides;
            const translateX = -state.currentSlide * slideWidth;
            track.style.transform = `translateX(${translateX}%)`;
        }
    }
});

function scrollToSection(id) {
    document.getElementById(id).scrollIntoView({
        behavior: "smooth" // cuộn mượt
    });
}
</script>