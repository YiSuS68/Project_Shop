<?php

    // lấy dữ liệu từ form 
    $username = $_POST['username'];
    $password = $_POST['password'];

        // liên kết file đến database
        require '../admin/connect.php';

        // đếm xem đã xuất hiện username chưa
        $sql = "select * from customers 
        where username = '$username'";
        $result = mysqli_query($connect, $sql);
        // đếm xem có bao nhiêu bản ghi
        $number_rows = mysqli_num_rows($result);

        // nếu có = 1 như dưới, tức có bản ghi rồi thì chạy điều kiện
        if ($number_rows == 1) {
            session_start();
            $each = mysqli_fetch_array($result);
            $_SESSION['id'] = $each['id'];
            $_SESSION['lastname'] = $each['lastname'];

            header('location:user.php');
            exit;
        }
        // đăng nhập sai hiển thị ra dùng dưới
            header('location:login_register.php?error = kiểm tra lại tài khoản hoặc mật khẩu của bạn đã đúng chưa');










    if(isset($_POST['$remember'])) {
        $remember = true;
    } else {
        $remember = false;
    }

    // kết nối đến dữ liệu
        // $connect = mysqli_connect('localhost','root','','j2teamnnl_shop');

    // kiểm tra chắc chắn nó lưu lại tiếng Việt (có thể tống ra file connect về sau chỉ việc requi... )
        // mysqli_set_charset($connect,'utf8');
    require 'admin/connect.php';

    // kiểm tra xem có trùng username va password không
    $sql = "SELECT * from register where username = '$username' and password = '$password'";
    $result = mysqli_query($connect,$sql);
    $number_rows = mysqli_num_rows($result);

    // Đăng nhập thành công và không thành công
    if($number_rows == 1) {
        echo "Đăng nhập thành công";
        session_start();
        $each = mysql_fetch_array($result);
        $id = $each['id'];
        $_SESSION['id'] = $id;
        $_SESSION['last_name'] = $each['last_name'];
        if($remember) {
            $token = uniqid('user_', true);
            $sql = "update register
            set
            token = '$token'
            where
            id = '$id';
            ";
            mysqli_query($connect,$sql);
            setcookie('remember', $token, time() + 60*60*24*30);
        }
    } else {
        echo "có gì đó sai sai";
    }

    // if($number_rows == 1) {
    //     session_start();
    //     $each = mysqli_fetch_array($result);
    //     $_SESSION['id'] = $each['id'];
    //     $_SESSION['last_name'] = $each['last_name'];

    //     header('Location:signafter.php');
    //     exit;
    // }
    // header('Location: login_register.php?error= Có gì đó sai sai')

    // // kiểm tra xem username và password đã có trong db chưa?
    // $sql = "SELECT * from register where username='$username' and password='$password'";
    
    // // chạy xử lý
    // mysqli_query($connect,$sql);

    // // đóng kết nối sau xử lý
    // mysqli_close($connect);

