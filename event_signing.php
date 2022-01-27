<?php 
if (isset($_GET['not_exists_signin'])) {
    ?>
    <span style="color: red";><?php echo "Chưa đăng nhập"; ?></span>
    <?php
}
?>
<?php 
if (isset($_GET['error_signin'])) {
    ?>
    <span style="color: red";><?php echo "Lỗi đăng nhập"; ?></span>
    <?php
}
?>

<?php 
if (isset($_GET['error_signup'])) {
    ?>
    <span style="color: red";><?php echo "Lỗi đăng ký"; ?></span>
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
<?php
if (isset($_GET['empty_signup'])) {
    ?>
    <span style="color: red;"><?php echo "Chưa điền đủ thông tin đăng ký"; ?></span>
    <?php
}
?>