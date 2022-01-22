<?php

    // lấy dữ liệu từ form 
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);

        // kiểm tra xem có tích vào remember không
        if (isset($_POST['remember'])) {
            $remember = true;
        }else{
            $remember = false;
        }

        // liên kết file đến database
        require '../admin/connect.php';

        // đếm xem đã xuất hiện username trong database hay chưa
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
            if($remember) {
                $token = uniqid('user_', true);
                $sql = "update customers
                set
                token = '$token'
                where
                id = '$id';
                ";
                mysqli_query($connect,$sql);
                setcookie('remember', $token, time() + 60*60*24*30);
                header('location: login_register');
                mysqli_close($connect);
            }
            header('location: login_register');
        } else {
            header('location: login_register?error');
            exit;
        }


