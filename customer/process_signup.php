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
    // chưa thêm trường address

        // liên kết file đến database
        require '../admin/connect.php';

        // đếm xem đã xuất hiện username email hay phone number chưa
        $sql = "select count(*) from customers 
        where username = '$username' and email = '$email' and phonenumber = '$phonenumber'";
        $result = mysqli_query($connect, $sql);
        $number_rows = mysqli_fetch_array($result)['count(*)'];

        if ($number_rows == 1) { 
            header("location:../login_register.php?error=");
            exit;
        }

    
        // lấy dữ liệu từ form hiển thị bảng trên DB
        $sql = "insert into customers(username, firstname, lastname, gender, email, password, phonenumber, date)
        values ('$username', '$firstname', '$lastname', '$gender', '$email', '$password', '$phonenumber', '$date')" ;
        mysqli_query($connect,$sql);


        // tạo session lưu lại tên người đăng Nhập
        $sql = "select id from customers 
        where username = '$username' and email = '$email' and phonenumber = '$phonenumber'" ;
        $result = mysqli_query($connect,$sql);
        $id = mysqli_fetch_array($result)['id']; // lỗi ở đây, khồng hiểu sao lỗi mặc dù làm giống y hệt Anh Long
        session_start();
        // lưu lại id gồm(username, email, phonmenumber) và tên sau
        $_SESSION['id'] = $id;
        $_SESSION['lastname'] = $lastname;

        header("location:../login_register.php");
        // đóng kết nối sau xử lý
        mysqli_close($connect);





