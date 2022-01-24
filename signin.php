<?php
if(isset($_COOKIE['remember'])) {
    $token = $_COOKIE['remember'];
    require 'admin/connect.php';
    $sql = "select * from customer where token = '$token' limit 1";
    $result = mysqli_query($connect,$sql);
    $number_rows = mysqli_num_rows($result);
    if ($number_rows == 1) {
        $each = mysqli_fetch_array($result);
        $_SESSION['id'] = $each['id'];
        $_SESSION['user_name'] = $each['user_name'];
        if (isset($_SESSION['id'])){
            header('location:customer/index.php');
            exit;
        }
    }
}        
?>
<div class="tab-pane active">
    <form class="login" method="post" action="process_signin.php">
        
        <!-- 2.1.1 nhập tên và mật khẩu -->
        <input class="input-login" type="text" name="user_name" id="user_name" placeholder="Tên đăng nhập" required>
        <i class="fas fa-user"></i>
        <input class="input-login" type="password" name="password" id="password" placeholder="Mật khẩu" required>
        <i class="fas fa-key"></i>
        <!-- <a href="#0" class="hide-password">Show</a> -->

        <!-- 2.1.2 ghi nhớ đăng nhập, quên mật khẩu -->
        <div class="box-center">
            <div>
                <input type="checkbox" name="remember"> 
                <label class="rememberme-text" for="rememberMe">Ghi nhớ Đăng Nhập?</label>
            </div> <!-- tạo dữ liệu lưu lại lượt đăng nhập -->
            <div>
                <a class="forgot-pass" href="#">Quên mật khẩu?</a>
            </div> <!-- trỏ đến phần lấy lại mật khẩu -->
        </div>

        <!-- 2.1.3 nút đăng ký -->
        <button class="btn-button">
            <span class="state">Đăng Nhập</span>
        </button>

    </form>
</div>