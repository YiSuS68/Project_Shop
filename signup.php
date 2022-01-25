
<!-- 2.2 đăng ký -->
<div class="tab-pane">
    <form class="login" action="process_signup.php" method="post">

        <!-- 2.2.1 tên đăng nhập -->
        <div class="input-form">
            <span id="error_user_name"></span>
            <input class="put-something" type="text" placeholder="Tên đăng nhập" name="user_name" id="user_name">
            <i class="fas fa-user"></i>
        </div>

        <!-- 2.2.2 họ và tên -->
        <div class="sign-up_name">
            <div class="input-form">
                <span id="error_last_name"></span>
                <input class="put-something" type="text" placeholder="Họ" name="last_name" id="last_name">
                <i class="far fa-comment-dots"></i> 
            </div>
            <div class="input-form">
                <span id="error_first_name"></span>
                <input class="put-something" type="text" placeholder="Tên" name="first_name" id="first_name">
                <i class="far fa-comment-dots"></i>
            </div>
        </div>

        <!-- 2.2.7 ngày sinh và chọn giới tính -->
        <div class="sign-up_name">
            <div class="input-form">
                <span id="error_gender"></span>
                <label class="input-label">Giới Tính:</label>
                <select class="put-something" name="gender" id="gender">
                    <option></option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
                <i class="fas fa-venus-mars">
                </i>
            </div>
            <div class="input-form">
                <span id="error_birth"></span>
                <label class="input-label" for="birth">Ngày Sinh</label>
                <input class="put-something" type="date" id="birth" name="birth">
                <i class="fas fa-table">
                </i>
            </div>
        </div>
        <!-- 2.2.3 số điện thoại -->
        <div class="input-form">
            <span id="error_phone"></span>
            <input class="put-something" type="text" placeholder="Số di động" name="phone" id="phone">
            <i class="fas fa-mobile-alt"></i>
        </div>
        <div class="input-form">
            <span id="error_address"></span>
            <input class="put-something" type="text" placeholder="Địa chỉ" name="address" id="address">
            <i class="fas fa-mobile-alt"></i>
        </div>

        <!-- 2.2.4 email -->
        <div class="input-form">
            <span id="error_email"></span>
            <input class="put-something" type="email" placeholder="Nhập email" name="email" id="email">
            <i class="fas fa-at"></i>
        </div>

        <!-- 2.2.5 mật khẩu -->
        <div class="input-form">
            <span id="error_password"></span>
            <input class="put-something" type="password" placeholder="Nhập mật khẩu" name="password" id="password">
            <i class="fas fa-key"></i>
        </div>

        <!-- 2.2.6 nhập lại mật khẩu -->
        <div class="input-form">  
            <span id="error_confirm_password"></span>
            <input class="put-something" type="password" placeholder="Nhập lại mật khẩu" name="confirm_password" id="confirm_password">
            <i class="fas fa-key"></i>
        </div>

        <!-- 2.2.8 nút đăng ký -->
        <div>
            <button type="button" class="btn-button" onclick="return check_signup()">Đăng ký</button>
        </div>
    </form>
    <script src="assets/js/validate_signup.js"></script>
</div>
