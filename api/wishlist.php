<?php
include "config.php";


// Get request data
$action = (!empty($_POST['action'])) ? htmlspecialchars($_POST['action']) : '';
$productId = (!empty($_POST['product_id'])) ? (int)$_POST['product_id'] : 0;
$productData = (!empty($_POST['product_data'])) ? $_POST['product_data'] : '';

// Check multiple possible session structures for user ID
$userId = 0;
if (!empty($_SESSION[$loginMember]['id'])) {
    $userId = (int)$_SESSION[$loginMember]['id'];
}

// Response array
$response = array(
    'success' => false,
    'message' => '',
    'count' => 0,
    'wishlist' => array(),
    'debug' => array(
        'user_id' => $userId,
        'action' => $action,
        'product_id' => $productId,
        'session_keys' => array_keys($_SESSION ?? array())
    )
);

// Check if user is logged in
if (!$userId) {
    $response['message'] = 'Bạn cần đăng nhập để sử dụng tính năng này';
    $response['debug']['error'] = 'No user ID found in session';
    echo json_encode($response);
    exit;
}

// Validate product ID
if ($productId <= 0) {
    $response['message'] = 'ID sản phẩm không hợp lệ';
    $response['debug']['error'] = 'Invalid product ID: ' . $productId;
    echo json_encode($response);
    exit;
}

// Handle different actions
switch ($action) {
    case 'add':
        addToWishlist($userId, $productId, $productData);
        break;
    
    case 'remove':
        removeFromWishlist($userId, $productId);
        break;
    
    case 'get_list':
        getWishlist($userId);
        break;
    
    case 'get_count':
        getWishlistCount($userId);
        break;
    
    case 'clear':
        clearWishlist($userId);
        break;
    
    case 'check':
        checkProductInWishlist($userId, $productId);
        break;
    
    default:
        $response['message'] = 'Hành động không hợp lệ';
        $response['debug']['error'] = 'Invalid action: ' . $action;
        echo json_encode($response);
        exit;
}

// Add product to wishlist
function addToWishlist($userId, $productId, $productData) {
    global $d, $response;
    
    // Check if product exists
    $productExists = $d->rawQueryOne("SELECT id FROM #_product WHERE id = ? AND find_in_set('hienthi',status)", array($productId));
    if (!$productExists) {
        $response['message'] = 'Sản phẩm không tồn tại';
        echo json_encode($response);
        exit;
    }
    
    // Check if already in wishlist
    $existingItem = $d->rawQueryOne("SELECT id FROM #_wishlist WHERE id_user = ? AND id_product = ?", array($userId, $productId));
    
    if ($existingItem) {
        $response['message'] = 'Sản phẩm đã có trong danh sách yêu thích';
        $response['success'] = true;
    } else {
        // Add to wishlist
        $data = array(
            'id_user' => $userId,
            'id_product' => $productId,
            'date_created' => time()
        );
        
        if ($d->insert('wishlist', $data)) {
            $response['success'] = true;
            $response['message'] = 'Đã thêm vào danh sách yêu thích';
        } else {
            $response['message'] = 'Không thể thêm vào danh sách yêu thích';
        }
    }
    
    // Get updated count and list
    $response['count'] = getWishlistCount($userId, false);
    $response['wishlist'] = getWishlist($userId, false);
    
    echo json_encode($response);
}

// Remove product from wishlist
function removeFromWishlist($userId, $productId) {
    global $d, $response;
    
    $result = $d->rawQuery("DELETE FROM #_wishlist WHERE id_user = ? AND id_product = ?", array($userId, $productId));

    $response['success'] = true;
    $response['message'] = 'Đã xóa khỏi danh sách yêu thích';
     
    // Get updated count and list
    $response['count'] = getWishlistCount($userId, false);
    $response['wishlist'] = getWishlist($userId, false);
    
    echo json_encode($response);
}

// Get user's wishlist
function getWishlist($userId, $returnJson = true) {
    global $d, $response, $lang;
    
    $sql = "SELECT w.*, p.name$lang as name, p.slugvi, p.slugen, p.photo, p.regular_price, p.sale_price, p.discount 
            FROM #_wishlist w 
            LEFT JOIN #_product p ON w.id_product = p.id 
            WHERE w.id_user = ? AND find_in_set('hienthi',p.status) 
            ORDER BY w.date_created DESC";
    
    $wishlist = $d->rawQuery($sql, array($userId));
    
    if ($returnJson) {
        $response['success'] = true;
        $response['count'] = count($wishlist);
        $response['wishlist'] = $wishlist;
        echo json_encode($response);
    } else {
        return $wishlist;
    }
}

// Get wishlist count
function getWishlistCount($userId, $returnJson = true) {
    global $d, $response;
    
    $count = $d->rawQueryOne("SELECT COUNT(*) as count FROM #_wishlist w LEFT JOIN #_product p ON w.id_product = p.id WHERE w.id_user = ? AND find_in_set('hienthi',p.status)", array($userId));
    $count = $count ? $count['count'] : 0;
    
    if ($returnJson) {
        $response['success'] = true;
        $response['count'] = $count;
        echo json_encode($response);
    } else {
        return $count;
    }
}

// Clear entire wishlist
function clearWishlist($userId) {
    global $d, $response;
    
    $result = $d->rawQuery("DELETE FROM #_wishlist WHERE id_user = ?", array($userId));
    
    if ($result) {
        $response['success'] = true;
        $response['message'] = 'Đã xóa toàn bộ danh sách yêu thích';
        $response['count'] = 0;
        $response['wishlist'] = array();
    } else {
        $response['message'] = 'Không thể xóa danh sách yêu thích';
    }
    
    echo json_encode($response);
}

// Check if product is in wishlist
function checkProductInWishlist($userId, $productId) {
    global $d, $response;
    
    $exists = $d->rawQueryOne("SELECT id FROM #_wishlist WHERE id_user = ? AND id_product = ?", array($userId, $productId));
    
    $response['success'] = true;
    $response['in_wishlist'] = $exists ? true : false;
    $response['count'] = getWishlistCount($userId, false);
    
    echo json_encode($response);
}
?>