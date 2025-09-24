<div class="wrap-content">
    <div class="title-main"><span><?= $titleMain ?></span></div>

    <div class="row row-20">
        <?php if (!empty($rowDetail)) { ?>
        <?php foreach ($rowDetail as $k => $v) { ?>
        <div class="col-md-3 col-sm-6 col-6 col-20" data-aos="fade-up" data-aos-duration="1000">
            <div class="box-product wishlist-item" data-product-id="<?= $v['id'] ?>">
                <div class="pic-product">
                    <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>"
                        title="<?= $v['name' . $lang] ?>">
                        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';"
                            data-src="<?= WATERMARK ?>/product/285x285x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                            alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                    </a>
                    <!-- Heart badge for liked products -->
                    <div class="heart-badge liked-badge">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <div class="product-tool d-flex align-items-stretch justify-content-between transition mb-0">
                        <a class="product-detail-view text-decoration-none text-hover-main transition"
                            href="<?= $v[$sluglang] ?>" title="Xem chi tiêt">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="10" cy="10" r="7" />
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </svg>
                            <span>Chi tiêt</span>
                        </a>
                        <a class="product-quick-view text-decoration-none text-hover-main transition"
                            data-slug="<?= $v[$sluglang] ?>" title="Xem nhanh">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="18"
                                height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r="2" />
                                <path
                                    d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                            </svg>
                            <span>Xem nhanh</span>
                        </a>
                    </div>
                </div>
                <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>"
                        title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                <p class="price-product">
                    <?php if ($v['discount']) { ?>
                    <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                    <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                    <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                    <?php } else { ?>
                    <span
                        class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                    <?php } ?>
                </p>
                <p class="cart-product d-flex flex-wrap justify-content-between">
                    <span class="cart-add addcart transition" data-id="<?= $v['id'] ?>"
                        data-action="addnow"><?= themvaogiohang ?></span>
                    <span class="cart-remove-wishlist transition" data-id="<?= $v['id'] ?>"
                        title="Xóa khỏi danh sách yêu thích">Xóa khỏi yêu thích</span>
                </p>
            </div>
        </div>
        <?php } ?>
        <?php } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong>Không có sản phẩm nào trong danh sách yêu thích</strong>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<style>
/* Wishlist specific styles */
.wishlist-item {
    position: relative;
    border: 2px solid transparent;
    border-radius: 12px;
    transition: all 0.3s ease;
    background: linear-gradient(135deg, rgba(255, 192, 203, 0.1), rgba(255, 182, 193, 0.15));
    box-shadow: 0 4px 15px rgba(255, 105, 180, 0.2);
}

.wishlist-item:hover {
    border-color: rgba(255, 105, 180, 0.5);
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(255, 105, 180, 0.3);
}

.heart-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background: linear-gradient(45deg, #ff69b4, #ff1493);
    color: white;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    animation: heartbeat 1.5s ease-in-out infinite;
    box-shadow: 0 2px 10px rgba(255, 20, 147, 0.4);
}

@keyframes heartbeat {
    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.1);
    }

    100% {
        transform: scale(1);
    }
}

.cart-remove-wishlist {
    background: #dc3545;
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 12px;
    text-align: center;
    flex: 1;
    margin-left: 5px;
}

.cart-remove-wishlist:hover {
    background: #c82333;
    color: white;
}

.pic-product {
    position: relative;
    overflow: hidden;
}
</style>
<script src="assets/js/jquery.min.js"></script>
<script>
// Remove from wishlist functionality
$(document).ready(function() {
    $('.cart-remove-wishlist').click(function(e) {
        e.preventDefault();

        const productId = $(this).data('id');
        const productItem = $(this).closest('.wishlist-item');

        if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi danh sách yêu thích?')) {
            $.ajax({
                url: 'api/wishlist.php',
                method: 'POST',
                data: {
                    action: 'remove',
                    product_id: productId
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Fade out and remove the product item
                        productItem.fadeOut(500, function() {
                            $(this).remove();

                            // Check if there are any products left
                            if ($('.wishlist-item').length === 0) {
                                $('.row.row-20').html(`
                                    <div class="col-12">
                                        <div class="alert alert-warning w-100" role="alert">
                                            <strong>Không có sản phẩm nào trong danh sách yêu thích</strong>
                                        </div>
                                    </div>
                                `);
                            }
                        });

                        // Update wishlist count in header if exists
                        if ($('.wishlist-count').length) {
                            $('.wishlist-count').text(response.count || 0);
                        }

                        // Show success message
                        if (typeof notifyVi !== 'undefined') {
                            notifyVi(response.message, 'success');
                        } else {
                            alert(response.message);
                        }
                    } else {
                        if (typeof notifyVi !== 'undefined') {
                            notifyVi(response.message, 'danger');
                        } else {
                            alert(response.message);
                        }
                    }
                },
                error: function() {
                    if (typeof notifyVi !== 'undefined') {
                        notifyVi('Có lỗi xảy ra khi xóa sản phẩm', 'danger');
                    } else {
                        alert('Có lỗi xảy ra khi xóa sản phẩm');
                    }
                }
            });
        }
    });
});
</script>