<?php 
    if (isset($_GET['error'])) {
        ?>
        <span style="color: red";><?php echo "Lỗi đăng nhập"; ?></span>
        <?php
    }
?>

<?php
    if (isset($_GET['empty'])) {
        ?>
        <span style="color: red;"><?php echo "Chưa điền tài khoản hoặc mật khẩu"; ?></span>
        <?php
    }
?>