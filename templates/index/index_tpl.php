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
                                <a href="" class="text-center">
                                    <img class="icon-container-img"
                                        src="<?= $configBase ?>assets/images/cac_cua_hang.png" alt="">
                                    <p class="text-white icon-container-title">Các chi nhánh</p>
                                </a>
                            </div>
                            <div class="sidebar-control-icon-container">
                                <a href="" class="text-center">
                                    <img class="icon-container-img" src="<?= $configBase ?>assets/images/member.png"
                                        alt="">
                                    <p class="text-white icon-container-title">Quyền lợi<br> thành viên</p>
                                </a>
                            </div>
                            <div class="sidebar-control-icon-container">
                                <a href="" class="text-center">
                                    <img class="icon-container-img" src="<?= $configBase ?>assets/images/doi_tra.png"
                                        alt="">
                                    <p class="text-white icon-container-title">Chính sách<br> thu đổi</p>
                                </a>
                            </div>
                            <div class="sidebar-control-icon-container">
                                <a href="" class="text-center">
                                    <img class="icon-container-img" src="<?= $configBase ?>assets/images/bao_hanh.png"
                                        alt="">
                                    <p class="text-white icon-container-title">Chính sách<br> bảo hành</p>
                                </a>
                            </div>
                            <div class="sidebar-control-icon-container">
                                <a href="" class="text-center">
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
                        <i class="index-search-icon fa-solid fa-magnifying-glass"></i>
                        <input type="text" class="index-search-input" placeholder="Tìm kiếm">
                        <i class="index-search-filter fa-solid fa-sliders"></i>
                    </div>

                    <!-- Location Component -->
                    <div class="index-location">
                        <i class="fa-solid fa-location-dot index-location-icon"></i>
                        <span>Ninh Kiều, Cần Thơ</span>
                    </div>
                </div>
                <!-- Actions Component -->
                <div class="index-actions">
                    <i class="fa-solid fa-user index-user-icon"></i>
                    <i class="fa-solid fa-cart-shopping index-cart-icon"></i>

                    <div class="index-hotline">
                        <span class="index-hotline-label">Hotline:</span>
                        <span class="index-hotline-number">0949 661 188</span>
                    </div>
                </div>
            </div>
            <div class="main-content-wrapper" style="margin-left: 0px !important;">
                <div class="section-product">
                    <span class="section-title">SẢN PHẨM CỦA CHÚNG TÔI</span>
                    <div class="product-tabs">
                        <span class="product-tab active" data-tab="new-products">SẢN PHẨM MỚI</span>
                        <span class="product-tab" data-tab="best-sellers">BEST SELLER</span>
                        <span class="product-tab" data-tab="design-products">SẢN PHẨM THIẾT KẾ</span>
                    </div>

                    <!-- Tab Content: New Products -->
                    <div class="tab-content active" id="new-products">
                        <div class="carousel-wrapper">
                            <div class="carousel-container">
                                <button class="carousel-nav carousel-prev" onclick="prevSlide('new-products')">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>

                                <div class="carousel-track">
                                    <!-- Slide 1 -->
                                    <div class="carousel-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1-deo.png"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Dây Mặt Vàng 24K</h3>
                                                    <div class="product-price">10.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/nhan1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/nhan1-2.jpg"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Nhẫn Vàng 24K</h3>
                                                    <div class="product-price">10.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/nhan2-1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/nhan2-2.jpg"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Nhẫn Vàng Cao Cấp</h3>
                                                    <div class="product-price">60.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/hoatai1-1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/hoatai1-2.jpg"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Hoa tai vàng</h3>
                                                    <div class="product-price">15.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/hoatai2-1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/hoatai2-2.jpg"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Hoa tai vàng 24K</h3>
                                                    <div class="product-price">14.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/daychuyen-1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/daychuyen-2.jpg"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Nhẫn Định Đá</h3>
                                                    <div class="product-price">10.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Slide 2 -->
                                    <div class="carousel-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1-deo.png"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Dây Mặt Vàng 24K</h3>
                                                    <div class="product-price">10.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/nhan1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/nhan1-2.jpg"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Nhẫn Vàng 24K</h3>
                                                    <div class="product-price">10.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/nhan2-1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/nhan2-2.jpg"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Nhẫn Vàng Cao Cấp</h3>
                                                    <div class="product-price">60.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/hoatai1-1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/hoatai1-2.jpg"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Hoa tai vàng</h3>
                                                    <div class="product-price">15.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/hoatai2-1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/hoatai2-2.jpg"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Hoa tai vàng 24K</h3>
                                                    <div class="product-price">14.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/daychuyen-1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/demo/daychuyen-2.jpg"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </div>
                                                    <div class="eye-icon">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Nhẫn Định Đá</h3>
                                                    <div class="product-price">10.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-nav carousel-next" onclick="nextSlide('new-products')">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>
                            <!-- Additional Navigation Buttons -->

                        </div>
                    </div>

                    <!-- Tab Content: Best Sellers -->
                    <div class="tab-content" id="best-sellers">
                        <div class="carousel-wrapper">
                            <div class="carousel-container">
                                <button class="carousel-nav carousel-prev" onclick="prevSlide('best-sellers')">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>

                                <div class="carousel-track-bs">
                                    <!-- Best Seller Slide 1 -->
                                    <div class="carousel-slide">
                                        <div class="product-list">
                                            <!-- Best Seller Products - Premium Items -->
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1-deo.png"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon"><i class="fa-solid fa-heart"></i></div>
                                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Bộ Trang Sức Cưới</h3>
                                                    <div class="product-price">50.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1-deo.png"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon"><i class="fa-solid fa-heart"></i></div>
                                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Dây Chuyền Kim Cương</h3>
                                                    <div class="product-price">75.000.000 VNĐ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                                            Hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-nav carousel-next" onclick="nextSlide('best-sellers')">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>

                        </div>
                    </div>

                    <!-- Tab Content: Design Products -->
                    <div class="tab-content" id="design-products">
                        <div class="carousel-wrapper">
                            <div class="carousel-container">
                                <button class="carousel-nav carousel-prev" onclick="prevSlide('design-products')">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>

                                <div class="carousel-track-dp">
                                    <!-- Design Products Slide 1 -->
                                    <div class="carousel-slide">
                                        <div class="product-list">
                                            <!-- Design Products - Custom Design Pieces -->
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1-deo.png"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon"><i class="fa-solid fa-heart"></i></div>
                                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Thiết Kế Riêng - Nhẫn Độc Đáo</h3>
                                                    <div class="product-price">Giá: Liên hệ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Liên Hệ</button>
                                                        <button class="btn btn-secondary shopnow">Xem Chi Tiết</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card">
                                                <div class="image-container">
                                                    <div class="product-image default-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1.jpg"
                                                            alt="Product Default" class="product-image default-image">
                                                    </div>
                                                    <div class="product-image hover-image">
                                                        <img src="<?= $configBase ?>assets/images/sp1-deo.png"
                                                            alt="Product Hover" class="product-image hover-image">
                                                    </div>
                                                    <div class="heart-icon"><i class="fa-solid fa-heart"></i></div>
                                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">Thiết Kế Theo Yêu Cầu</h3>
                                                    <div class="product-price">Giá: Liên hệ</div>
                                                    <div class="action-buttons">
                                                        <button class="btn btn-primary shopnow">Liên Hệ</button>
                                                        <button class="btn btn-secondary shopnow">Xem Chi Tiết</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-nav carousel-next" onclick="nextSlide('design-products')">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Tab switching functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.product-tab');
    const tabContents = document.querySelectorAll('.tab-content');

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
});

// Carousel functionality for each tab
const carouselStates = {
    'new-products': {
        currentSlide: 0,
        totalSlides: 2
    },
    'best-sellers': {
        currentSlide: 0,
        totalSlides: 1
    },
    'design-products': {
        currentSlide: 0,
        totalSlides: 1
    }
};

function nextSlide(tabId) {
    const state = carouselStates[tabId];
    if (state.currentSlide < state.totalSlides - 1) {
        state.currentSlide++;
        updateCarousel(tabId);
    }
}

function prevSlide(tabId) {
    const state = carouselStates[tabId];
    if (state.currentSlide > 0) {
        state.currentSlide--;
        updateCarousel(tabId);
    }
}

function updateCarousel(tabId) {
    const state = carouselStates[tabId];
    let trackSelector;

    switch (tabId) {
        case 'new-products':
            trackSelector = '.carousel-track';
            break;
        case 'best-sellers':
            trackSelector = '.carousel-track-bs';
            break;
        case 'design-products':
            trackSelector = '.carousel-track-dp';
            break;
    }

    const track = document.querySelector(`#${tabId} ${trackSelector}`);
    if (track) {
        const translateX = -state.currentSlide * 50; // 50% per slide
        track.style.transform = `translateX(${translateX}%)`;
    }
}
</script>


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
        <div class="col-md-6 news-col-1">
            <div class="row">
                <div class="col-12 mb-3 position-relative">
                    <div class="news-service-items">
                        <img src="<?= $configBase ?>/assets/images/vang2.png" alt="" class="news-service-items-img">
                        <div class="news-service-items-section">
                            <div class="items-section-text-1" style="">
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
        </div>
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
        <div class="product-tabs">
            <span class="product-tab active">Mệnh kim</span>
            <span class="product-tab">Mệnh mộc</span>
            <span class="product-tab">Mệnh thủy</span>
            <span class="product-tab">Mệnh hỏa</span>
            <span class="product-tab">Mệnh thổ</span>
        </div>
        <!-- Feng Shui Product Carousel -->
        <div class="carousel-wrapper" style="position: relative; overflow: hidden;">
            <div class="carousel-container-2" style="overflow: hidden; position: relative;">
                <div class="carousel-track-2" style="display: flex; transition: transform 0.3s ease; width: 200%;">
                    <!-- Slide 1 -->
                    <div class="carousel-slide-2"
                        style="width: 50%; flex-shrink: 0; padding: 0 10px; box-sizing: border-box;">
                        <div class="product-list2">
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/sp1.jpg" alt="Product Default"
                                            class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/sp1-deo.png" alt="Product Hover"
                                            class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Dây Mặt Vàng 24K</h3>
                                    <div class="product-price">10.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/demo/nhan1.jpg" alt="Product Default"
                                            class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/demo/nhan1-2.jpg" alt="Product Hover"
                                            class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Nhẫn Vàng 24K</h3>
                                    <div class="product-price">10.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/demo/nhan2-1.jpg"
                                            alt="Product Default" class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/demo/nhan2-2.jpg" alt="Product Hover"
                                            class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Nhẫn Vàng Cao Cấp</h3>
                                    <div class="product-price">60.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/demo/hoatai1-1.jpg"
                                            alt="Product Default" class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/demo/hoatai1-2.jpg"
                                            alt="Product Hover" class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Hoa tai vàng</h3>
                                    <div class="product-price">15.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/demo/hoatai2-1.jpg"
                                            alt="Product Default" class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/demo/hoatai2-2.jpg"
                                            alt="Product Hover" class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Hoa tai vàng 24K</h3>
                                    <div class="product-price">14.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/demo/daychuyen-1.jpg"
                                            alt="Product Default" class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/demo/daychuyen-2.jpg"
                                            alt="Product Hover" class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Nhẫn Định Đá</h3>
                                    <div class="product-price">10.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/sp1.jpg" alt="Product Default"
                                            class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/sp1-deo.png" alt="Product Hover"
                                            class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Dây Mặt Vàng 24K</h3>
                                    <div class="product-price">10.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-slide-2"
                        style="width: 50%; flex-shrink: 0; padding: 0 10px; box-sizing: border-box;">
                        <div class="product-list2">
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/sp1.jpg" alt="Product Default"
                                            class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/sp1-deo.png" alt="Product Hover"
                                            class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Dây Mặt Vàng 24K</h3>
                                    <div class="product-price">10.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/demo/nhan1.jpg" alt="Product Default"
                                            class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/demo/nhan1-2.jpg" alt="Product Hover"
                                            class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Nhẫn Vàng 24K</h3>
                                    <div class="product-price">10.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/demo/nhan2-1.jpg"
                                            alt="Product Default" class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/demo/nhan2-2.jpg" alt="Product Hover"
                                            class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Nhẫn Vàng Cao Cấp</h3>
                                    <div class="product-price">60.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/demo/hoatai1-1.jpg"
                                            alt="Product Default" class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/demo/hoatai1-2.jpg"
                                            alt="Product Hover" class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Hoa tai vàng</h3>
                                    <div class="product-price">15.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/demo/hoatai2-1.jpg"
                                            alt="Product Default" class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/demo/hoatai2-2.jpg"
                                            alt="Product Hover" class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Hoa tai vàng 24K</h3>
                                    <div class="product-price">14.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="image-container">
                                    <div class="product-image default-image">
                                        <img src="<?= $configBase ?>assets/images/demo/daychuyen-1.jpg"
                                            alt="Product Default" class="product-image default-image">
                                    </div>
                                    <div class="product-image hover-image">
                                        <img src="<?= $configBase ?>assets/images/demo/daychuyen-2.jpg"
                                            alt="Product Hover" class="product-image hover-image">
                                    </div>
                                    <div class="heart-icon">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="eye-icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">Nhẫn Định Đá</h3>
                                    <div class="product-price">10.000.000 VNĐ</div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary shopnow">Mua Ngay</button>
                                        <button class="btn btn-secondary shopnow">Thêm Vào Giỏ
                                            Hàng</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript for second carousel -->
    </div>
</div>

<div class="container-nguhanh">
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
const track = document.querySelector('.carousel-track');
const slides = document.querySelectorAll('.carousel-slide');
const prevButton = document.querySelector('.carousel-prev');
const nextButton = document.querySelector('.carousel-next');

let currentIndex = 0;
const totalSlides = 2; // Fixed for 2-slide layout

// Initialize
updateCarousel();

function updateCarousel() {
    // Move carousel - for 2 slides with 50% width each
    const translateX = -(currentIndex * 50);
    track.style.transform = `translateX(${translateX}%)`;

    // Update button states
    const isFirstSlide = currentIndex === 0;
    const isLastSlide = currentIndex === totalSlides - 1;

    // Update prev button
    prevButton.style.opacity = isFirstSlide ? '0.5' : '1';
    prevButton.style.pointerEvents = isFirstSlide ? 'none' : 'auto';

    // Update next button
    nextButton.style.opacity = isLastSlide ? '0.5' : '1';
    nextButton.style.pointerEvents = isLastSlide ? 'none' : 'auto';
}

function goToSlide(index) {
    if (index >= 0 && index < totalSlides) {
        currentIndex = index;
        updateCarousel();
    }
}

// Event listeners
prevButton.addEventListener('click', () => {
    goToSlide(currentIndex - 1);
});

nextButton.addEventListener('click', () => {
    goToSlide(currentIndex + 1);
});

// Tab switching functionality
const tabs = document.querySelectorAll('.product-tab');
tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
    });
});

// Heart and eye icon functionality
document.querySelectorAll('.heart-icon').forEach(icon => {
    icon.addEventListener('click', (e) => {
        e.preventDefault();
        icon.classList.toggle('liked');
        const heartIcon = icon.querySelector('i');
        if (icon.classList.contains('liked')) {
            heartIcon.style.color = '#e74c3c';
            heartIcon.classList.remove('fa-regular');
            heartIcon.classList.add('fa-solid');
        } else {
            heartIcon.style.color = '';
        }
    });
});

document.querySelectorAll('.eye-icon').forEach(icon => {
    icon.addEventListener('click', (e) => {
        e.preventDefault();
        alert('Quick view functionality coming soon!');
    });
});

// Auto-play functionality
let autoPlayInterval;

function startAutoPlay() {
    autoPlayInterval = setInterval(() => {
        const nextIndex = currentIndex === totalSlides - 1 ? 0 : currentIndex + 1;
        goToSlide(nextIndex);
    }, 5000);
}

function stopAutoPlay() {
    clearInterval(autoPlayInterval);
}

// Start auto-play
startAutoPlay();

// Pause auto-play on hover
const carouselWrapper = document.querySelector('.carousel-wrapper');
carouselWrapper.addEventListener('mouseenter', stopAutoPlay);
carouselWrapper.addEventListener('mouseleave', startAutoPlay);

// Touch/swipe support for mobile
let startX = null;
let currentX = null;
let isDragging = false;

carouselWrapper.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
    isDragging = true;
    stopAutoPlay();
});

carouselWrapper.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    currentX = e.touches[0].clientX;
});

carouselWrapper.addEventListener('touchend', (e) => {
    if (!isDragging) return;

    const diffX = startX - currentX;
    const threshold = 50;

    if (Math.abs(diffX) > threshold) {
        if (diffX > 0 && currentIndex < totalSlides - 1) {
            goToSlide(currentIndex + 1);
        } else if (diffX < 0 && currentIndex > 0) {
            goToSlide(currentIndex - 1);
        }
    }

    isDragging = false;
    startX = null;
    currentX = null;
    startAutoPlay();
});

// Keyboard navigation
document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft' && currentIndex > 0) {
        goToSlide(currentIndex - 1);
    } else if (e.key === 'ArrowRight' && currentIndex < totalSlides - 1) {
        goToSlide(currentIndex + 1);
    }
});
</script>