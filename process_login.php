<?php

    // lấy dữ liệu từ form 
    $username_login = $_POST['username-login'];
    $password_login = $_POST['password-login'];

    // kết nối đến dữ liệu
    $connect = mysqli_connect('localhost','root','','j2teamnnl_shop');

    // kiểm tra chắc chắn nó lưu lại tiếng Việt (có thể tống ra file connect về sau chỉ việc requi... )
    mysqli_set_charset($connect,'utf8');

    // kiểm tra xem username và password đã có trong db chưa?
    $sql = "select * from users where username='$username_login' and password='$password_login'";

    // thực thi truy vấn
    $result = mysqli_query($connect, $sql);
    // đếm số dòng
    if (number_rows($result) > 0) {
        echo "<h1> Đăng nhập thành công </h1>";
    } else {
        echo "<h1> Đăng nhập thất bại, vui lòng kiểm tra lại </h1>"
    };

