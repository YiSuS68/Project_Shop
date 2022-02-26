<?php 
session_start();
    // kiểm tra xem đã đăng nhập chưa, hiện tại là kiểm tra id
if(!isset($_SESSION['id'])) {
        // nếu mà chưa đăng nhập sẽ bị đẩy về phần đăng nhập
    header('location: ../login_register.php?not_exists_signin');
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

        <!--navbar-->
        <?php include "component_navbar_ontop.php" ?>
        <?php include "component_navbar_shortcut.php" ?>

        <!--body-->
        <div class="content-profile-page">
        <div class="profile-user-page card">
            <div class="img-user-profile">
                <img class="profile-bgHome" src="../assets/img/55325477_p0_master1200.jpg">
                <img class="avatar" src="../assets/img/facebook-user-icon-17.jpg">
            </div>
            <div class="user-profile-data">
                <h1>
                    <?php 
                    echo $_SESSION['user_name'];
                    ?></h1>
                <p>github.com/...</p>
            </div>
            <div class="description-profile"><a class="n-decoration hover" onclick="demo_in2 ()" href="#0">Thay đổi tiểu sử của bạn ...</a></div>
            <ul class="data-user">
                <li>
                    <a class="follower-user" onclick="demo_in2 ()" href="#0"><strong>...</strong><span>Posts</span>
                    </a>
                </li>
                <li>
                    <a class="follower-user" onclick="demo_in2 ()" href="#0"><strong>...</strong><span>Followers</span>
                    </a>
                </li>
                <li>
                    <a class="follower-user" onclick="demo_in2 ()" href="#0"><strong>...</strong><span>Following</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>

        <!-- hiển thị bảng đã mua hóa đơn -->
        <div>
            <?php require "table_bill.php" ?>
       </div>
       <!-- footer -->
       <?php include "component_footer.php" ?>


   </div>

   <script src="../assets/js/index.js"></script>
</body>
</html>