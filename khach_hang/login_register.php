<!-- có lỗi sẽ hiển thị ra, lấy ra lỗi -->
<?php
    session_start();
    if(isset($_COOKIE['remember'])) {
        $token = $_COOKIE['remember'];
        require '../connect.php';
        $sql = "SELECT * from register where token = '$token' limit 1";
        $result = mysqli_query($connect,$sql);
        $number_rows = mysqli_num_rows($result);
        if ($number_rows == 1) {
            $each = mysqli_fetch_array($result);
            $_SESSION['id'] = $each['id'];
            $_SESSION['last_name'] = $each['last_name'];
        }
    }
    if (isset($_SESSION['id'])) {
        header('Location: signafter.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/media.css">
    <link rel="stylesheet" href="../assets/css/login_style.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Login Green Shop</title>
</head>
<body>

    <!-- navbar -->
    <div>
        <?php include "../component_navbar_shortcut.php" ?>
    </div>



    <!-- đăng nhập và đăng ký -->
    <div class="center-form">
        
        <!-- part one thanh tab của đăng nhập đăng ký -->
        <div class="tabs">

            <div class="tab-item active">
                <i class="fas fa-sign-in-alt"></i>
                Đăng Nhập
            </div>

            <div class="tab-item">
                <i class="fas fa-sign-out-alt"></i>
                Đăng Ký
            </div>

            <div class="line"></div>
        </div>
    

        <!-- part two nội dung form của thanh đăng nhập, đăng ký -->
        <div>

            <!-- 2.1 đăng nhập -->
            <?php include "login.php" ?>

            <!-- 2.2 đăng ký -->
            <?php include "signup.php" ?>

        </div>


    </div>

    
    


    <script src="../assets/js/login_js.js"></script>
    <script src="../assets/js/index.js"></script>
</body>
</html>