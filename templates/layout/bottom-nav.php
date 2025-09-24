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
        <?php if (isset($_SESSION[$loginMember])): ?>
        <div style="position: relative;">
            <a href="account/tai-khoan">
                <!-- <div><i class="fas fa-user"></i></div> -->
                <div><img src="assets/images/avatar.png" alt=""
                        style="width:24.67px;height:24.67px;border-radius:50%;margin-bottom:5px;"></div>
                <div><span><?= $_SESSION[$loginMember]['fullname'] ?></span></div>
            </a>
            <div class="dropup-menu-nbh">
                <a href="account/tai-khoan" class="dropup-menu-nbh-item"onmouseover="this.style.backgroundColor='#f3f4f6'" onmouseout="this.style.backgroundColor='transparent'">
                    <i class="fas fa-user" style="margin-right: 10px; width: 16px; text-align: center;"></i>
                    <span>Thông tin tài khoản</span>
                </a>
                <a href="account/san-pham-yeu-thich" class="dropup-menu-nbh-item"onmouseover="this.style.backgroundColor='#f3f4f6'" onmouseout="this.style.backgroundColor='transparent'">
                    <i class="fas fa-heart" style="margin-right: 10px; width: 16px; text-align: center;"></i>
                    <span>Sản phẩm yêu thích</span>
                </a>
                <a href="account/dang-xuat" class="dropup-menu-nbh-item" onmouseover="this.style.backgroundColor='#fee2e2'; this.style.color='#dc2626'" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#374151'">
                    <i class="fas fa-sign-out-alt" style="margin-right: 10px; width: 16px; text-align: center;"></i>
                    <span>Đăng xuất</span>
                </a>
                
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const userDropdown = document.querySelector('.nav-item div[style*="position: relative"]');
                const dropupMenu = userDropdown.querySelector('.dropup-menu-nbh');
                
                userDropdown.addEventListener('mouseenter', function() {
                    // Calculate position relative to the user nav item
                    const rect = userDropdown.getBoundingClientRect();
                    const centerX = rect.left + (rect.width / 2);
                    
                    // Position the menu
                    dropupMenu.style.left = centerX + 'px';
                    dropupMenu.style.transform = 'translateX(-50%)';
                    dropupMenu.style.opacity = '1';
                    dropupMenu.style.visibility = 'visible';
                });
                
                userDropdown.addEventListener('mouseleave', function() {
                    dropupMenu.style.opacity = '0';
                    dropupMenu.style.visibility = 'hidden';
                });
            });
        </script>
        <?php else: ?>
        <a href="account/dang-nhap">
            <div><i class="fas fa-user"></i></div>
            <div><span>ĐĂNG NHẬP</span></div>
        </a>
        <?php endif; ?>
    </div>
    <div class="nav-item <?=($com == 'gio-hang') ? 'active' : ''?>">
        <a href="gio-hang">
            <div class="cart-icon-wrapper">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count" id="cart-count"><?= (!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0 ?></span>
            </div>
            <div><span>GIỎ HÀNG</span></div>
        </a>
    </div>
</div>

<script>
// Mobile Bottom Navigation Carousel - NBH
document.addEventListener('DOMContentLoaded', function() {
    // Only apply carousel on mobile devices
    if (window.innerWidth <= 768) {
        const bottomNav = document.querySelector('.bottom-nav');
        const navItems = document.querySelectorAll('.nav-item');
        
        if (bottomNav && navItems.length > 0) {
            let isScrolling = false;
            let startX = 0;
            let scrollLeft = 0;
            
            // Disable default scroll behavior
            bottomNav.style.scrollBehavior = 'smooth';
            
            function handleStart(e) {
                isScrolling = true;
                startX = e.type === 'mousedown' ? e.pageX : e.touches[0].pageX;
                scrollLeft = bottomNav.scrollLeft;
                bottomNav.style.scrollBehavior = 'auto';
            }
            
            function handleMove(e) {
                if (!isScrolling) return;
                
                e.preventDefault();
                const x = e.type === 'mousemove' ? e.pageX : e.touches[0].pageX;
                const walk = (x - startX) * 2; // Scroll speed multiplier
                bottomNav.scrollLeft = scrollLeft - walk;
            }
            
            function handleEnd(e) {
                if (!isScrolling) return;
                
                isScrolling = false;
                bottomNav.style.scrollBehavior = 'smooth';
                
                // Snap to nearest nav item
                const itemWidth = bottomNav.offsetWidth / 5; // 5 visible items
                const currentScroll = bottomNav.scrollLeft;
                const targetIndex = Math.round(currentScroll / itemWidth);
                const targetScroll = targetIndex * itemWidth;
                
                bottomNav.scrollTo({
                    left: targetScroll,
                    behavior: 'smooth'
                });
            }
            
            // Add event listeners for touch/mouse events
            bottomNav.addEventListener('mousedown', handleStart);
            bottomNav.addEventListener('mousemove', handleMove);
            bottomNav.addEventListener('mouseup', handleEnd);
            bottomNav.addEventListener('mouseleave', handleEnd);
            
            bottomNav.addEventListener('touchstart', handleStart, { passive: false });
            bottomNav.addEventListener('touchmove', handleMove, { passive: false });
            bottomNav.addEventListener('touchend', handleEnd);
            
            // Prevent text selection during drag
            bottomNav.addEventListener('selectstart', function(e) {
                e.preventDefault();
            });
        }
    }
});
</script>