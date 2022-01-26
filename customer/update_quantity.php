<?php
    session_start();
    $id = $_GET['id'];
    // lấy type về để kiểm tra
    $type = $_GET['type'];

    // nếu type = decre tức trừ thì:
    if($type === 'decre') {
        if($_SESSION['cart'][$id]['quantity'] > 1) {
            $_SESSION['cart'][$id]['quantity']--;
        } else {
            // nếu hết sản phẩm để trừ thì biến mất luôn khỏi giỏ hàng
            unset($_SESSION['cart'][$id]);
        }
    } else {
        // còn ngược lại là cộng
        $_SESSION['cart'][$id]['quantity']++;
    }

    // sau khi ấn trừ sản phẩm quay lại trang giỏ hàng
    header('location: cart.php');