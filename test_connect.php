<?php

    $connect = mysqli_connect('localhost', 'root', '', 'j2teamnnl_shop');
    mysqli_set_charset($connect, 'utf8');

    // để vào file khác bằng cú pháp :require './connect.php';