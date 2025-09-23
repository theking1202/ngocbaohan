
<div class="bottom-nav">
    <div class="nav-item <?=($com == 'index' || $com == '') ? 'active' : ''?>">
        <a href="<?=$config_base?>">
            <div><i class="fas fa-house"></i></div>
            <div><span>TRANG CHỦ</span></div>
        </a>
    </div>
    <div class="nav-item <?=($com == 'gioi-thieu') ? 'active' : ''?>">
        <a href="gioi-thieu">
            <div><i class="fas fa-circle-info"></i></div>
            <div><span>GIỚI THIỆU</span></div>
        </a>
    </div>
    <div class="nav-item <?=($com == 'san-pham') ? 'active' : ''?>">
        <a href="san-pham">
            <div><i class="fas fa-cubes"></i></div>
            <div><span>SẢN PHẨM</span></div>
        </a>
    </div>
    <div class="nav-item <?=($com == 'dich-vu') ? 'active' : ''?>">
        <a href="dich-vu">
            <div><i class="fas fa-handshake"></i></div>
            <div><span>DỊCH VỤ</span></div>
        </a>
    </div>
    <div class="nav-item <?=($com == 'tuyen-dung') ? 'active' : ''?>">
        <a href="tuyen-dung">
            <div><i class="fas fa-briefcase"></i></div>
            <div><span>TUYỂN DỤNG</span></div>
        </a>
    </div>
    <div class="nav-item <?=($com == 'lien-he') ? 'active' : ''?>">
        <a href="lien-he">
            <div><i class="fas fa-envelope"></i></div>
            <div><span>LIÊN HỆ</span></div>
        </a>
    </div>
    <div class="nav-item <?=($com == 'dang-nhap') ? 'active' : ''?>">
        <a href="dang-nhap">
            <div><i class="fas fa-user"></i></div>
            <div><span>ĐĂNG NHẬP</span></div>
        </a>
    </div>
    <div class="nav-item <?=($com == 'gio-hang') ? 'active' : ''?>">
        <a href="gio-hang">
            <div class="cart-icon-wrapper">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count" id="cart-count">0</span>
            </div>
            <div><span>GIỎ HÀNG</span></div>
        </a>
    </div>
</div>