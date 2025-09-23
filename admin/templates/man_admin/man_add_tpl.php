<?php
$linkMan = "index.php?com=man_admin&act=man";
$linkSave = "index.php?com=man_admin&act=save";
?>
<section class="content">
    <form method="post" action="<?=$linkSave?>" enctype="multipart/form-data">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title"><?=(!empty($item['id']))?'Cập nhật':'Thêm mới'?> hàng hoá cửa hàng</h3>
            </div>
<section class="content">
    <form method="post" action="<?=$linkSave?>" enctype="multipart/form-data" id="productForm">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title"><?=(!empty($item['id']))?'Cập nhật':'Thêm mới'?> hàng hoá cửa hàng</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="store_id">Cửa hàng:</label>
                        <select class="custom-select" name="store_id" id="store_id" required>
                            <option value="0">-- Chọn cửa hàng --</option>
                            <?php if(!empty($stores)) foreach($stores as $st){ ?>
                                <option value="<?=$st['id']?>" <?=(!empty($item['store_id']) && $item['store_id']==$st['id'])?'selected':''?>><?=$st['fullname']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <?php if(!empty($item['id'])){ // Edit mode - single product ?>
                    <div class="form-group col-md-6">
                        <label for="product_id">Sản phẩm:</label>
                        <select class="custom-select" name="product_id" id="product_id" required>
                            <option value="0">-- Chọn sản phẩm --</option>
                            <?php if(!empty($products)) foreach($products as $p){ ?>
                                <option value="<?=$p['id']?>" <?=(!empty($item['product_id']) && $item['product_id']==$p['id'])?'selected':''?>><?=$p['name']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sku">SKU:</label>
                        <input type="text" class="form-control" name="sku" id="sku" value="<?=(!empty($item['sku']))?$item['sku']:''?>" maxlength="100">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cost">Giá vốn:</label>
                        <input type="number" step="0.01" class="form-control" name="cost" id="cost" value="<?=(!empty($item['cost']))?$item['cost']:0?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="price">Giá bán:</label>
                        <input type="number" step="0.01" class="form-control" name="price" id="price" value="<?=(!empty($item['price']))?$item['price']:0?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="quantity">Số lượng:</label>
                        <input type="number" class="form-control" name="quantity" id="quantity" value="<?=(!empty($item['quantity']))?$item['quantity']:0?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="status">Trạng thái:</label>
                        <select class="custom-select" name="status" id="status">
                            <option value="hienthi" <?=(!empty($item['status']) && $item['status']=='hienthi')?'selected':''?>>Hiển thị</option>
                            <option value="an" <?=(!empty($item['status']) && $item['status']=='an')?'selected':''?>>Ẩn</option>
                        </select>
                    </div>
                    <?php } else { // Add mode - multiple products ?>
                    <div class="form-group col-md-6">
                        <label for="status">Trạng thái:</label>
                        <select class="custom-select" name="status" id="status">
                            <option value="hienthi" selected>Hiển thị</option>
                            <option value="an">Ẩn</option>
                        </select>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-12">
                        <h5>Chọn sản phẩm:</h5>
                        <div class="form-group">
                            <label for="productSelector">Chọn nhiều sản phẩm:</label>
                            <select class="form-control" id="productSelector" multiple="multiple" style="width: 100%;">
                                <?php if(!empty($products)) foreach($products as $p){ ?>
                                    <option value="<?=$p['id']?>" 
                                            data-name="<?=htmlspecialchars($p['name'])?>"
                                            data-code="<?=htmlspecialchars($p['code'] ?? '')?>"
                                            data-price="<?=$p['default_price'] ?? 0?>"
                                            data-cost="<?=$p['default_cost'] ?? 0?>">
                                        <?=$p['name']?> <?=!empty($p['code']) ? '(SKU: '.$p['code'].')' : ''?>
                                    </option>
                                <?php } ?>
                            </select>
                            <button type="button" class="btn btn-primary mt-2" id="addSelectedProductsBtn">Thêm các sản phẩm đã chọn</button>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-12">
                        <h5>Danh sách sản phẩm đã chọn:</h5>
                        <div id="selectedProducts">
                            <!-- Dynamic product list will be inserted here -->
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="card-footer text-sm">
                <input type="hidden" name="id" value="<?=(!empty($item['id']))?$item['id']:0?>">
                <button type="submit" class="btn btn-sm bg-gradient-primary text-white" id="saveBtn"><i class="far fa-save mr-2"></i>Lưu</button>
                <a class="btn btn-sm bg-gradient-danger text-white" href="<?=$linkMan?>"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
            </div>
        </div>
    </form>
</section>

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
// Multiple ways to check jQuery availability and ensure it loads properly
(function() {
    function initMultiProductSelection() {
        let productCounter = 0;
        let selectedProductIds = [];
        
        // Initialize Select2
        function initSelect2() {
            if (typeof $.fn.select2 !== 'undefined') {
                $('#productSelector').select2({
                    placeholder: 'Chọn nhiều sản phẩm...',
                    allowClear: true,
                    theme: 'bootstrap-5',
                    width: '100%',
                    language: {
                        noResults: function() {
                            return 'Không tìm thấy sản phẩm';
                        },
                        searching: function() {
                            return 'Đang tìm kiếm...';
                        }
                    }
                });
            } else {
                console.warn('Select2 không khả dụng, sử dụng select thông thường');
            }
        }
        
        // Add multiple products functionality
        $(document).on('click', '#addSelectedProductsBtn', function() {
            const selectedValues = $('#productSelector').val();
            
            if (!selectedValues || selectedValues.length === 0) {
                alert('Vui lòng chọn ít nhất một sản phẩm');
                return;
            }
            
            let addedCount = 0;
            let skippedProducts = [];
            
            selectedValues.forEach(function(productId) {
                if (selectedProductIds.includes(productId)) {
                    const productName = $('#productSelector option[value="' + productId + '"]').text();
                    skippedProducts.push(productName);
                    return;
                }
                
                const selectedOption = $('#productSelector option[value="' + productId + '"]');
                const productName = selectedOption.text();
                
                // Get product data from data attributes
                const productData = {
                    id: productId,
                    name: selectedOption.attr('data-name') || productName,
                    code: selectedOption.attr('data-code') || '',
                    default_price: selectedOption.attr('data-price') || 0,
                    default_cost: selectedOption.attr('data-cost') || 0
                };
                
                addProductRow(productId, productName, productData);
                selectedProductIds.push(productId);
                addedCount++;
            });
            
            // Clear selection after adding
            $('#productSelector').val(null).trigger('change');
            
            // Show feedback
            let message = '';
            if (addedCount > 0) {
                message += `Đã thêm ${addedCount} sản phẩm`;
            }
            if (skippedProducts.length > 0) {
                message += (message ? '. ' : '') + `Bỏ qua ${skippedProducts.length} sản phẩm đã tồn tại`;
            }
            if (message) {
                // Create a temporary success message
                const alertDiv = $('<div class="alert alert-info alert-dismissible fade show mt-2" role="alert">' +
                    message +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                '</div>');
                $('#addSelectedProductsBtn').after(alertDiv);
                
                // Auto remove after 3 seconds
                setTimeout(function() {
                    alertDiv.fadeOut(function() {
                        $(this).remove();
                    });
                }, 3000);
            }
        });
        
        function addProductRow(productId, productName, productData) {
            const rowHtml = `
                <div class="card mb-3 product-row" data-product-id="${productId}">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">${productName}</h6>
                        <button type="button" class="btn btn-sm btn-danger remove-product" data-product-id="${productId}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label>SKU:</label>
                                <input type="text" class="form-control" name="products[${productCounter}][sku]" value="${productData.code}" maxlength="100">
                                <input type="hidden" name="products[${productCounter}][product_id]" value="${productId}">
                            </div>
                            <div class="col-md-3">
                                <label>Giá vốn:</label>
                                <input type="number" step="0.01" class="form-control" name="products[${productCounter}][cost]" value="${productData.default_cost}">
                            </div>
                            <div class="col-md-3">
                                <label>Giá bán:</label>
                                <input type="number" step="0.01" class="form-control" name="products[${productCounter}][price]" value="${productData.default_price}" required>
                            </div>
                            <div class="col-md-3">
                                <label>Số lượng:</label>
                                <input type="number" class="form-control" name="products[${productCounter}][quantity]" value="0" required>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            $('#selectedProducts').append(rowHtml);
            productCounter++;
            updateSaveButton();
        }
        
        // Remove product functionality
        $(document).on('click', '.remove-product', function() {
            const productId = $(this).attr('data-product-id');
            selectedProductIds = selectedProductIds.filter(id => id !== productId.toString());
            $(this).closest('.product-row').remove();
            updateSaveButton();
        });
        
        function updateSaveButton() {
            const hasProducts = $('#selectedProducts .product-row').length > 0;
            const isEditMode = $('input[name="id"]').val() != '0';
            
            if (isEditMode || hasProducts) {
                $('#saveBtn').prop('disabled', false);
            } else {
                $('#saveBtn').prop('disabled', true);
            }
        }
        
        // Form validation
        $(document).on('submit', '#productForm', function(e) {
            const storeId = $('#store_id').val();
            const isEditMode = $('input[name="id"]').val() != '0';
            const hasProducts = $('#selectedProducts .product-row').length > 0;
            
            if (storeId == '0') {
                alert('Vui lòng chọn cửa hàng');
                e.preventDefault();
                return false;
            }
            
            if (!isEditMode && !hasProducts) {
                alert('Vui lòng chọn ít nhất một sản phẩm');
                e.preventDefault();
                return false;
            }
        });
        
        // Initialize Select2 and set initial button state
        initSelect2();
        updateSaveButton();
    }
    
    // Multiple jQuery loading strategies
    function waitForJQuery() {
        if (typeof $ !== 'undefined' && typeof $.fn !== 'undefined') {
            // jQuery is available, initialize immediately
            $(document).ready(function() {
                initMultiProductSelection();
            });
        } else if (typeof jQuery !== 'undefined') {
            // jQuery object exists but $ might not be defined
            jQuery(document).ready(function($) {
                initMultiProductSelection();
            });
        } else {
            // Wait a bit more for jQuery to load
            setTimeout(function() {
                if (typeof $ !== 'undefined' || typeof jQuery !== 'undefined') {
                    var jq = typeof $ !== 'undefined' ? $ : jQuery;
                    jq(document).ready(function() {
                        initMultiProductSelection();
                    });
                } else {
                    // Fallback: use vanilla JavaScript with a warning
                    document.addEventListener('DOMContentLoaded', function() {
                        console.warn('jQuery is not available. Some functionality may not work.');
                        // Initialize basic functionality without jQuery
                        initBasicFunctionality();
                    });
                }
            }, 500);
        }
    }
    
    // Basic functionality without jQuery (fallback)
    function initBasicFunctionality() {
        const addBtn = document.getElementById('addSelectedProductsBtn');
        const form = document.getElementById('productForm');
        
        if (addBtn) {
            addBtn.addEventListener('click', function() {
                alert('jQuery hoặc Select2 không khả dụng. Vui lòng tải lại trang.');
            });
        }
        
        if (form) {
            form.addEventListener('submit', function(e) {
                const storeSelect = document.getElementById('store_id');
                if (storeSelect && storeSelect.value == '0') {
                    alert('Vui lòng chọn cửa hàng');
                    e.preventDefault();
                    return false;
                }
            });
        }
    }
    
    // Start the initialization process
    waitForJQuery();
})();
</script>
