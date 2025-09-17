<?php
// Giả lập mảng sản phẩm lấy từ database
$products = [
    ['title' => 'Smartphone Premium X1', 'price' => '15.990.000₫', 'desc' => 'Điện thoại flagship với camera AI, chip xử lý mạnh mẽ và màn hình OLED sắc nét.', 'icon' => '📱'],
    ['title' => 'Laptop Gaming Pro', 'price' => '32.990.000₫', 'desc' => 'Laptop gaming hiệu năng cao với RTX 4080, màn hình 144Hz và bàn phím RGB.', 'icon' => '💻'],
    ['title' => 'Tai Nghe Bluetooth Elite', 'price' => '4.990.000₫', 'desc' => 'Tai nghe không dây với công nghệ chống ồn chủ động và âm thanh Hi-Fi.', 'icon' => '🎧'],
    ['title' => 'Smartwatch Health+', 'price' => '8.990.000₫', 'desc' => 'Đồng hồ thông minh theo dõi sức khỏe 24/7 với GPS và chống nước.', 'icon' => '⌚'],
    ['title' => 'Camera Mirrorless 4K', 'price' => '25.990.000₫', 'desc' => 'Máy ảnh không gương lật quay 4K với ống kính kit và chống rung quang học.', 'icon' => '📷'],
    ['title' => 'Monitor 4K UltraWide', 'price' => '12.990.000₫', 'desc' => 'Màn hình 34 inch 4K với độ phủ màu 99% sRGB, hoàn hảo cho thiết kế.', 'icon' => '🖥️'],
    ['title' => 'Gaming Console Next', 'price' => '18.990.000₫', 'desc' => 'Máy chơi game thế hệ mới với SSD tốc độ cao và ray tracing.', 'icon' => '🎮'],
    ['title' => 'Power Bank 30000mAh', 'price' => '1.990.000₫', 'desc' => 'Sạc dự phòng dung lượng lớn với sạc nhanh 65W và 3 cổng USB.', 'icon' => '🔌'],
    ['title' => 'Gaming Mouse RGB', 'price' => '2.990.000₫', 'desc' => 'Chuột gaming với 16000 DPI, 12 nút có thể lập trình và LED RGB.', 'icon' => '🖱️'],
    ['title' => 'Mechanical Keyboard', 'price' => '3.990.000₫', 'desc' => 'Bàn phím cơ switch Cherry MX với đèn nền RGB và keycap PBT.', 'icon' => '⌨️'],
    ['title' => 'Bluetooth Speaker', 'price' => '5.990.000₫', 'desc' => 'Loa bluetooth chống nước IPX7 với âm thanh 360° và pin 24 giờ.', 'icon' => '🎵'],
    ['title' => 'Wireless Charger', 'price' => '1.490.000₫', 'desc' => 'Sạc không dây 15W với thiết kế siêu mỏng và tản nhiệt hiệu quả.', 'icon' => '🔋'],
    ['title' => 'Tablet Pro 2024', 'price' => '12.490.000₫', 'desc' => 'Máy tính bảng màn hình lớn, pin trâu, hỗ trợ bút cảm ứng.', 'icon' => '📱'],
    ['title' => 'Smart TV 55"', 'price' => '19.990.000₫', 'desc' => 'Tivi thông minh 4K, điều khiển giọng nói, kho ứng dụng phong phú.', 'icon' => '📺'],
    ['title' => 'Fitness Tracker', 'price' => '2.490.000₫', 'desc' => 'Vòng đeo tay sức khỏe, đo nhịp tim, đếm bước chân, chống nước.', 'icon' => '🏃‍♂️'],
    ['title' => 'Drone Camera', 'price' => '9.990.000₫', 'desc' => 'Flycam quay phim 4K, định vị GPS, thời lượng bay 30 phút.', 'icon' => '🚁'],
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Carousel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .carousel-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .carousel-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .carousel-header h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .carousel-header p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
        }

        .carousel-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .carousel-track {
            display: flex;
            justify-content: center;
            transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            cursor: grab;
        }

        .carousel-track:active {
            cursor: grabbing;
        }

        .carousel-slide {
            min-width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 20px;
            padding: 20px;
            background: white;
        }

        .product-card {
            background: linear-gradient(145deg, #ffffff, #f0f0f0);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s;
        }

        .product-card:hover::before {
            left: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            border-radius: 10px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            font-weight: bold;
            position: relative;
            overflow: hidden;
        }

        .product-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.3), transparent);
        }

        .product-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
            line-height: 1.4;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #e74c3c;
            margin-bottom: 10px;
        }

        .product-description {
            color: #666;
            line-height: 1.5;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .product-button {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1rem;
        }

        .product-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .carousel-nav {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #prevBtn { left: 10px; }
        #nextBtn { right: 10px; }
        .nav-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-50%) scale(1.1);
        }

        .nav-button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            display: none; /* Ẩn disabled state vì buttons không còn bị disable */
        }

        .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background: white;
            transform: scale(1.2);
        }

        .drag-indicator {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .carousel-wrapper:hover .drag-indicator {
            opacity: 1;
        }

        @media (max-width: 768px) {
            .carousel-slide {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(4, 1fr);
                gap: 15px;
            }
            
            .carousel-header h1 {
                font-size: 2rem;
            }
            
            .product-image {
                height: 150px;
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
        
        <div class="carousel-wrapper">
            <button class="nav-button" id="prevBtn">‹</button>
            <div class="carousel-track" id="carouselTrack">
                <?php foreach (array_chunk($products, 4) as $slide): ?>
                    <div class="carousel-slide">
                        <?php foreach ($slide as $product): ?>
                            <div class="product-card">
                                <div class="product-image"><?= $product['icon'] ?></div>
                                <h3 class="product-title"><?= $product['title'] ?></h3>
                                <div class="product-price"><?= $product['price'] ?></div>
                                <p class="product-description"><?= $product['desc'] ?></p>
                                <button class="product-button">Thêm vào giỏ hàng</button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="nav-button" id="nextBtn">›</button>
        </div>
        
        <div class="carousel-dots" id="dotsContainer"></div>


    <script>
        class ProductCarousel {
            constructor() {
                this.track = document.getElementById('carouselTrack');
                this.slides = this.track.querySelectorAll('.carousel-slide');
                this.prevBtn = document.getElementById('prevBtn');
                this.nextBtn = document.getElementById('nextBtn');
                this.dotsContainer = document.getElementById('dotsContainer');
                
                this.currentSlide = 0;
                this.totalSlides = this.slides.length;
                
                this.isDragging = false;
                this.startX = 0;
                this.startY = 0;
                this.currentX = 0;
                this.currentY = 0;
                this.initialTransform = 0;
                this.dragDirection = null; // null | 'horizontal' | 'vertical'
                
                this.init();
            }
            
            init() {
                this.createDots();
                this.updateCarousel();
                this.addEventListeners();
            }
            
            createDots() {
                for (let i = 0; i < this.totalSlides; i++) {
                    const dot = document.createElement('div');
                    dot.className = 'dot';
                    dot.addEventListener('click', () => this.goToSlide(i));
                    this.dotsContainer.appendChild(dot);
                }
            }
            
            updateCarousel() {
                const translateX = -this.currentSlide * 100;
                this.track.style.transform = `translateX(${translateX}%)`;
                
                // Navigation buttons không còn disabled vì có thể loop
                this.prevBtn.disabled = false;
                this.nextBtn.disabled = false;
                
                // Update dots
                const dots = this.dotsContainer.querySelectorAll('.dot');
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === this.currentSlide);
                });
            }
            
            goToSlide(slideIndex) {
                this.currentSlide = Math.max(0, Math.min(slideIndex, this.totalSlides - 1));
                this.updateCarousel();
            }
            
            nextSlide() {
                if (this.currentSlide < this.totalSlides - 1) {
                    this.currentSlide++;
                } else {
                    this.currentSlide = 0; // Quay về slide đầu tiên
                }
                this.updateCarousel();
            }
            
            prevSlide() {
                if (this.currentSlide > 0) {
                    this.currentSlide--;
                } else {
                    this.currentSlide = this.totalSlides - 1; // Quay về slide cuối cùng
                }
                this.updateCarousel();
            }
            
            addEventListeners() {
                // Navigation buttons
                this.prevBtn.addEventListener('click', () => this.prevSlide());
                this.nextBtn.addEventListener('click', () => this.nextSlide());
                
                // Touch/Mouse drag events
                this.track.addEventListener('mousedown', (e) => this.dragStart(e));
                this.track.addEventListener('touchstart', (e) => this.dragStart(e));
                
                this.track.addEventListener('mousemove', (e) => this.dragMove(e));
                this.track.addEventListener('touchmove', (e) => this.dragMove(e));
                
                this.track.addEventListener('mouseup', () => this.dragEnd());
                this.track.addEventListener('touchend', () => this.dragEnd());
                this.track.addEventListener('mouseleave', () => this.dragEnd());
                
                // Prevent default drag behavior
                this.track.addEventListener('dragstart', (e) => e.preventDefault());
                
                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') this.prevSlide();
                    if (e.key === 'ArrowRight') this.nextSlide();
                });
                
                // Auto-play (optional)
                this.startAutoPlay();
            }
            
            dragStart(e) {
                this.isDragging = true;
                this.dragDirection = null;
                if (e.type === 'mousedown') {
                    this.startX = e.clientX;
                    this.startY = e.clientY;
                } else {
                    this.startX = e.touches[0].clientX;
                    this.startY = e.touches[0].clientY;
                }
                this.initialTransform = -this.currentSlide * 100;
                this.track.style.transition = 'none';
            }
            
            dragMove(e) {
                if (!this.isDragging) return;
                
                if (e.type === 'mousemove') {
                    this.currentX = e.clientX;
                    this.currentY = e.clientY;
                } else {
                    this.currentX = e.touches[0].clientX;
                    this.currentY = e.touches[0].clientY;
                }
                const diffX = this.currentX - this.startX;
                const diffY = this.currentY - this.startY;
                
                // Xác định hướng drag nếu chưa xác định
                if (!this.dragDirection) {
                    if (Math.abs(diffX) > 10 || Math.abs(diffY) > 10) {
                        if (Math.abs(diffX) > Math.abs(diffY)) {
                            this.dragDirection = 'horizontal';
                        } else {
                            this.dragDirection = 'vertical';
                        }
                    } else {
                        return; // Chưa đủ để xác định hướng
                    }
                }
                // Nếu là vertical thì bỏ qua, để browser xử lý scroll
                if (this.dragDirection === 'vertical') return;
                
                e.preventDefault(); // Chỉ preventDefault nếu là drag ngang
                const dragPercentage = (diffX / this.track.offsetWidth) * 100;
                const newTransform = this.initialTransform + dragPercentage;
                this.track.style.transform = `translateX(${newTransform}%)`;
            }
            
            dragEnd() {
                if (!this.isDragging || this.dragDirection === 'vertical') {
                    this.isDragging = false;
                    this.dragDirection = null;
                    return;
                }
                this.isDragging = false;
                this.track.style.transition = 'transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                const diffX = this.currentX - this.startX;
                const threshold = 50;
                if (Math.abs(diffX) > threshold) {
                    if (diffX > 0) {
                        this.prevSlide();
                    } else if (diffX < 0) {
                        this.nextSlide();
                    }
                } else {
                    this.updateCarousel();
                }
                this.dragDirection = null;
            }
            
            startAutoPlay() {
                setInterval(() => {
                    if (this.currentSlide < this.totalSlides - 1) {
                        this.nextSlide();
                    } else {
                        this.goToSlide(0);
                    }
                }, 5000); // Auto-play every 5 seconds
            }
        }
        
        // Initialize carousel when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            new ProductCarousel();
        });
        
        // Add click effects to product buttons
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('product-button')) {
                const button = e.target;
                const productTitle = button.parentElement.querySelector('.product-title').textContent;
                
                // Add ripple effect
                const ripple = document.createElement('span');
                ripple.style.position = 'absolute';
                ripple.style.background = 'rgba(255, 255, 255, 0.6)';
                ripple.style.borderRadius = '50%';
                ripple.style.width = '20px';
                ripple.style.height = '20px';
                ripple.style.animation = 'ripple 0.6s linear';
                ripple.style.left = '50%';
                ripple.style.top = '50%';
                ripple.style.transform = 'translate(-50%, -50%)';
                ripple.style.pointerEvents = 'none';
                
                button.style.position = 'relative';
                button.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
                
                // Show alert (in real app, this would add to cart)
                alert(`Đã thêm "${productTitle}" vào giỏ hàng!`);
            }
        });
        
        // Add CSS animation for ripple effect
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                from {
                    width: 0;
                    height: 0;
                    opacity: 1;
                }
                to {
                    width: 100px;
                    height: 100px;
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>