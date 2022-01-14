<?php

session_start();
// đăng xuất, xóa đi id và tên
unset($_SESSION['id']);
uset($_SESSION['last_name']);
setcookie('remember', null, -1);

header('location:index.php');