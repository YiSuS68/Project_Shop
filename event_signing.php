<?php 
    if (isset($_GET['error_signin'])) {
        ?>
        <span style="color: red";><?php echo "Lỗi đăng nhập"; ?></span>
        <?php
    }
?>

<?php
    if (isset($_GET['empty_signin'])) {
        ?>
        <span style="color: red;"><?php echo "Chưa điền tài khoản hoặc mật khẩu"; ?></span>
        <?php
    }
?>