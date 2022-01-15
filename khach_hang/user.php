<?php 
    session_start();

    // kiểm tra xem đã đăng nhập chưa, hiện tại là kiểm tra id
    if(empty($_SESSION['id'])) {
        // nếu mà chưa đăng nhập sẽ bị đẩy về phần đăng nhập
        header('location: login_register.php?error=Hãy đăng nhập đi bạn êi');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/media.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>user</title>
</head>
<body>

        <!-- có thể thêm 1 số lựa chọn như ảnh đại diện, ... ở trang này để người dùng đã đăng nhập cài đặt tài khoản bản thân -->

<div id="main">

    <!--navbar-->
    <?php include "../component_navbar_ontop.php" ?>
    <?php include "../component_navbar_shortcut.php" ?>

        Xin chào bạn
    <?php 
        echo $_SESSION['lastname'];
    ?>
    <a href="process_signout.php">
        Đăng xuất
    </a>

</div>
    


</body>
</html>