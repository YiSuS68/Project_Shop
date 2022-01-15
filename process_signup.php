<?php

    $username = addslashes($_POST['username']);
    $firstname = addslashes($_POST['firstname']);
    $lastname = addslashes($_POST['lastname']);
    $gender = $_POST['gender'];
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
    $confirm_password = addslashes($_POST['confirm_password']);
    $phonenumber = addslashes($_POST['phonenumber']);
    $date = $_POST['birthday'];
    // $address = addslashes($_POST['address']);

        // liên kết file đến database
        require 'admin/connect.php';

        // đếm xem đã xuất hiện username email hay phone number chưa
        $sql = "select count(*) from customers 
        where username = '$username' and email = '$email' and phonenumber = '$phonenumber'";
        $result = mysqli_query($connect, $sql);
        $number_rows = mysqli_fetch_array($result)['count(*)'];

        if ($number_rows == 1) {
            session_start();
            $_SESSION['error'] = 'Trùng rồi, vui lòng thử lại';
            header("Location:login_register.php?error=");
            exit;
        }

    
        // lấy dữ liệu từ form hiển thị bảng trên DB
        $sql = "insert into customers(username, firstname, lastname, gender, email, password, phonenumber, date)
        value ('$username', '$firstname', '$lastname', '$gender', '$email', '$password', '$phonenumber', '$date')" ;
        mysqli_query($connect,$sql);


        // tạo session lưu lại tên người đăng Nhập
        $sql = "select id from customers 
        where username = '$username' and email = '$email' and phonenumber = '$phonenumber'" ;
        $result = mysqli_query($connect,$sql);
        $id = mysqli_fetch_array($result)['id'];
        session_start();
        // lưu lại id gồm(username, email, phonmenumber) và tên sau
        $_SESSION['id'] = $id;
        $_SESSION['lastname'] = $lastname;


        // đóng kết nối sau xử lý
        mysqli_close($connect);


        

    // kiểm tra xem có trùng username, email, phonenumber hay không
    // $sql = "SELECT count(*) from customers where username = '$username' and email = '$email' and phonenumber = '$phonenumber'";
    // $result = mysqli_query($connect,$sql);
    // $number_rows = mysqli_fetch_array($result)['count(*)'];



    // nhập vào mysql

    // kiểm tra chỉ lấy id của 1 tài khoản, không bị trùng
    // $sql = "select id from customers where email ='$email'";

    // chạy xử lý

    // $id = mysqli_fetch_array($result)['id'];

    // // sử dụng session để lưu thông tin
    // session_start();
    // $_SESSION['id'] = $id;
    // $_SESSION['lastname'] = $lastname;




