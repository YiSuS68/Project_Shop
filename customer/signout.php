<?php

// phải bắt buộc có
session_start();

// đăng xuất, xóa đi id và tên sau
unset($_SESSION['id']);
unset($_SESSION['user_name']);
setcookie('remember',null,-1);

header('location:../index.php');