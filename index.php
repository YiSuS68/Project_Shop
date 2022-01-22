<?php
    session_start();
    if(isset($_COOKIE['remember'])) {
        $token = $_COOKIE['remember'];
        require 'admin/connect.php';
        $sql = "select * from customers where token = '$token' limit 1";
        $result = mysqli_query($connect,$sql);
        $number_rows = mysqli_num_rows($result);
        if ($number_rows == 1) {
            $each = mysqli_fetch_array($result);
            $_SESSION['id'] = $each['id'];
            $_SESSION['lastname'] = $each['lastname'];
        }
    }
    if (isset($_SESSION['id'])) {
        header('Location: user.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Green Shop</title>
</head>
<body>
    
    <div id="main">

        <!--navbar-->
        <?php include "customer/component_navbar_ontop.php" ?>
        <?php include "customer/component_navbar_shortcut.php" ?>

        <!--body-->
        <?php include "customer/component_index_body.php" ?>

        <!-- footer -->
        <?php include "customer/component_footer.php" ?>

    </div>

    <script src="assets/js/index.js"></script>
</body>
</html>