
<div class="tab-pane active">
    <form class="login" method="post" action="customer/process_login.php" enctype="multipart/form-data">
        
        <!-- 2.1.1 nhập tên và mật khẩu -->
        <input class="input-login" type="text" name="username" placeholder="Tên đăng nhập" required>
            <i class="fas fa-user"></i>
        <input class="input-login" type="password" name="password" placeholder="Mật khẩu" required>
            <i class="fas fa-key"></i>
            <!-- <a href="#0" class="hide-password">Show</a> -->

        <!-- 2.1.2 ghi nhớ đăng nhập, quên mật khẩu -->
        <div class="box-center">
            <div>
                <input type="checkbox" value="RememberMe" id="rememberMe" name="remember"> 
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