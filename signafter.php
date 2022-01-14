<?php session_start();
if(empty($_SESSION['id'])) {
    header('location: index.php?error=Hãy đăng nhập đi bạn êi');
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Xin chào bạn
    <?php 
        echo $_SESSION['last_name'];
    ?>
    <a href="sign_out.php">Đăng xuất</a>
</body>
</html>