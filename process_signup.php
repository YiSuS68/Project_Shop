<?php
if (empty($_POST['name']
        || $_POST['gender']
        || $_POST['phone']
        || $_POST['identity']
        || $_POST['address']
        || $_POST['level']
        || $_POST['wage']
        || $_POST['account']
        || $_POST['password'])) 
{
        header('location:login_register.php?empty_signup');
        die();
}

$user_name = addslashes($_POST['user_name']);
$first_name = addslashes($_POST['first_name']);
$last_name = addslashes($_POST['last_name']);
$gender = addslashes($_POST['gender']);
$address = addslashes($_POST['address']);
$birth = date('Y-m-d', strtotime($_POST['birth']));
$phone = addslashes($_POST['phone']);
$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);
    // chưa thêm trường address

        // liên kết file đến database
require './admin/connect.php';

        // đếm xem đã xuất hiện user_name email hay phone number chưa
$sql = "select count(*) from customer
where user_name = '$user_name' and password = '$password' and email = '$email' and phone = '$phone'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if ($number_rows == 1) { 
    header("location:login_register.php?error_signup");
    exit;
}


        // lấy dữ liệu từ form hiển thị bảng trên DB
$sql = "insert into customer(user_name,first_name,last_name,gender,birth,phone,address,email,password)
values ('$user_name','$last_name','$first_name','$gender','$birth','$phone','$address','$email','$password')" ;
mysqli_query($connect,$sql);


        // tạo session lưu lại tên người đăng Nhập
$sql = "select id from customer
where user_name = '$user_name' and email = '$email' and phone = '$phone'" ;
$result = mysqli_query($connect,$sql);
        $id = mysqli_fetch_array($result)['id']; // lỗi ở đây, khồng hiểu sao lỗi mặc dù làm giống y hệt Anh Long
        session_start();
        // lưu lại id gồm(user_name, email, phone) và tên sau
        $_SESSION['id'] = $id;
        $_SESSION['user_name'] = $user_name;
        header("location:customer/index.php");
        // đóng kết nối sau xử lý
        mysqli_close($connect);




