<?php

    // Kiểm tra xem nhập chưa, nếu chưa hiển thị, còn nếu rồi cũng hiển thị và quay lại trang chủ
    // if(empty($_POST['username']) || empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['gender'])
    // || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password']) || empty($_POST['phone_number']) || empty($_POST['birthday'])) {
    //     header('location:login_register.php?error= "Phải điền đầy đủ thông tin"');
    // }

    // lấy dữ liệu từ form 
    $username = addslashes($_POST['user_name']);
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $phonenumber = $_POST['phone_number'];
    $date = $_POST['birthday'];
    
    
    // kết nối đến dữ liệu (có thể tống ra file connect về sau chỉ việc requi... )
        // $connect = mysqli_connect('localhost', 'root', '', 'j2teamnnl_shop');
    // kiểm tra chắc chắn nó lưu lại tiếng Việt (có thể tống ra file connect về sau chỉ việc requi... )
        // mysqli_set_charset($connect, 'utf8');
    // liên kết
    require 'admin/connect.php';

    // kiểm tra xem có trùng email không
    $sql = "SELECT count(*) from register where email = '$email'";
    $result = mysqli_query($connect,$sql);
    $number_rows = mysqli_fetch_array($result)['count(*)'];

    if ($number_rows == 1) {
        session_start();
        $_SESSION['error'] = 'Trùng email rồi, vui lòng thử lại';
        header("Location:login_register.php?error=");
        exit;
    }

    // nhập vào mysql
    $sql = "insert into register(username, firstname, lastname, gender, email, password, confirm_password, phonenumber, date)
    value ('$username', '$firstname', '$lastname', '$gender', '$email', '$password', '$confirm_password', '$phonenumber', '$date')";

    // kiểm tra chỉ lấy id của 1 tài khoản, không bị trùng
    $sql = "select id from register where email ='$email'";

    // chạy xử lý
    $result = mysqli_query($connect,$sql);
    $id = mysqli_fetch_array($result)['id'];

    // sử dụng session để lưu thông tin
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['last_name'] = $lastname;

    // đóng kết nối sau xử lý
    mysqli_close($connect);


