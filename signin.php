<div class="tab-pane active">
    <form class="login" method="post" action="process_signin.php">

        <!-- 2.1.1 nhập tên và mật khẩu -->
        <input class="input-login" type="text" name="user_name" id="user_name" placeholder="Tên đăng nhập">
        <i class="fas fa-user"></i>
        <input class="input-login" type="password" name="password" id="password" placeholder="Mật khẩu">
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