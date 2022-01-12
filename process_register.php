<?php

    // Kiểm tra xem nhập chưa, nếu chưa hiển thị, còn nếu rồi cũng hiển thị và quay lại trang chủ
    if(empty($_POST['username']) || empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['gender'])
    || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password']) || empty($_POST['phone_number']) || empty($_POST['birthday'])) {
        header('location:login_register.php?error= "Phải điền đầy đủ thông tin"');
    }

    // lấy dữ liệu từ form 
    $username = $_POST['user_name'];
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
    require '../connect.php';

    // nhập vào mysql
    $sql = "insert into register(username, firstname, lastname, gender, email, password, confirm_password, phonenumber, date)
    values('$username', '$firstname', '$lastname', '$gender', '$email', '$password', '$confirm_password', '$phonenumber', '$date')";

    // chạy xử lý
    mysqli_query($connect,$sql);

    // đóng kết nối sau xử lý
    mysqli_close($connect);


