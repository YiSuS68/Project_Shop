<?php 
session_start();
    // kiểm tra xem đã đăng nhập chưa, hiện tại là kiểm tra id
    // die($_SESSION['user_name']);
if(empty($_SESSION['id'])) {
        // nếu mà chưa đăng nhập sẽ bị đẩy về phần đăng nhập
    header('location: ../index.php');
}
if (isset($_GET['success_order'])) {
    echo '<script type="text/javascript">

            window.onload = function () { alert("Đặt hàng thành công"); }

        </script>';
    }
    if (isset($_GET['empty_cart'])) {
        echo '<script type="text/javascript">

            window.onload = function () { alert("Chưa có sản phẩm nào trong giỏ hàng"); }

        </script>';
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
    <title>Green Shop</title>
</head>
<body>

    <div id="main">

        <!-- THÔNG BÁO -->
        <!-- <div class="open_notify">
            <div class="alert hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg">Chào mừng bạn đã quay trở lại!</span>
                <span class="close-btnn">
                    <span class="fas fa-times"></span>
                </span>
            </div>
        </div> -->
        <!-- HẾT THÔNG BÁO -->

        <!--navbar-->
        <?php require 'component_navbar_ontop.php' ?>
        <?php require 'component_navbar_shortcut.php' ?>

        <!--body-->
        <?php require 'component_index_body.php' ?>

        <!-- footer -->
        <?php require 'component_footer.php' ?>

    </div>

    <script src="../assets/js/index.js"></script>
</body>
</html>