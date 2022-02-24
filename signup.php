
<!-- 2.2 đăng ký -->
<div class="tab-pane">
    <form name="signUp" class="login" action="process_signup.php" onsubmit="return check_validation()" method="post" id="form2">

        <!-- 2.2.1 tên đăng nhập -->
        <div class="input-form">
            <div style="display:flex">
                <label class="input-label">Tên đăng nhập: </label>
                <span id="user_something_empty" style="display:none;">Tên đăng nhập không được để trống</span>
                <span id="user_something_err" style="display:none;">Tên đăng nhập không đúng</span>
            </div>
            <input class="put-something" type="text" placeholder="Nhập tên đăng nhập" name="user_name" id="user_something">
            <i class="fas fa-user"></i>
        </div>

        <!-- 2.2.2 họ và tên -->
        <div class="sign-up_name">
            <div class="input-form">
                <label class="input-label">Họ:</label>
                <span id="lastName_something_empty" style="display:none;">Tên họ không được để trống</span>
                <span id="lastName_something_err" style="display:none;">Tên họ nhập không đúng</span>
                <input class="put-something" type="text" placeholder="Nhập họ" name="last_name" id="lastName_something">
                <i class="far fa-comment-dots"></i> 
            </div>
            <div class="input-form">
                <label class="input-label">Tên:</label>
                <span id="firstName_something_empty" style="display:none;">Tên không được để trống</span>
                <span id="firstName_something_err" style="display:none;">Tên không đúng</span>
                <input class="put-something" type="text" placeholder="Nhập tên" name="first_name" id="firstName_something">
                <i class="far fa-comment-dots"></i>
            </div>
        </div>

        <!-- 2.2.7 ngày sinh và chọn giới tính -->
        <div class="sign-up_name">
            <div class="input-form">
                <label class="input-label">Giới Tính: </label>
                <span id="gender_something_empty" style="display:none;">Giới tính không được để trống</span>
                <select class="put-something" name="gender" id="gender_something" placeholder="Chọn giới tính...">
                    <option></option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
                <i class="fas fa-venus-mars">
                </i>
            </div>
            <div class="input-form">
                <label class="input-label" for="birth">Ngày Sinh: </label>
                <span id="birth_something_empty" style="display:none;">Ngày sinh không được để trống</span>
                <input class="put-something " type="date" name="birth" id="birth_something">
                <i class="fas fa-table">
                </i>
            </div>
        </div>
        <!-- 2.2.3 số điện thoại -->
        <div class="input-form">
            <label class="input-label" for="phone">Số điện thoại: </label>
            <span id="phone_something_empty" style="display:none;">Số điện thoại không được để trống</span>
            <span id="phone_something_err" style="display:none;">Số điện thoại không đúng</span>
            <input class="put-something " type="text" placeholder="Nhập số điện thoại..." name="phone" id="phone_something">
            <i class="fas fa-mobile-alt"></i>
        </div>
        <!-- địa chỉ -->
        <div class="input-form">
            <label class="input-label" for="address">Địa chỉ: </label>
            <span id="address_something_empty" style="display:none;">Địa chỉ không được để trống</span>
            <input class="put-something" type="text" placeholder="Nhập địa chỉ..." name="address" id="address_something">
            <i class="fas fa-mobile-alt"></i>
        </div>

        <!-- 2.2.4 email -->
        <div class="input-form">
            <label class="input-label" for="email">Email: </label>
            <span id="email_something_empty" style="display:none;">Email không được để trống</span>
            <span id="email_something_err" style="display:none;">Email không đúng</span>
            <input class="put-something " type="email" placeholder="Nhập email..." name="email" id="email_something">
            <i class="fas fa-at"></i>
        </div>

        <!-- 2.2.5 mật khẩu -->
        <div class="input-form">
            <label class="input-label" for="password">Mật khẩu: </label>
            <span id="password_something_empty" style="display:none;">Mật khẩu không được để trống</span>
            <span id="password_something_err" style="display:none;">Mật khẩu không đúng</span>
            <input class="put-something " type="password" placeholder="Nhập mật khẩu..." name="password" id="password_something">
            <i class="fas fa-key"></i>
        </div>

        <!-- 2.2.6 nhập lại mật khẩu -->
        <div class="input-form">
            <label class="input-label" for="confirm_password">Nhập lại mật khẩu: </label>
            <span id="confirmPassword_something_empty" style="display:none;">Nhập lại mật khẩu không được để trống</span>
            <span id="confirmPassword_something_err" style="display:none;">Nhập lại mật khẩu không trùng</span>
            <input class="put-something" type="password" placeholder="Nhập lại mật khẩu đã nhập..." name="confirm_password" id="confirmPassword_something">
            <i class="fas fa-key"></i>
        </div>

        <!-- 2.2.8 nút đăng ký -->
        <div>
            <!-- <input type="submit" value="Submit"> -->
            <button class="btn-button" type="submit" onclick="return check_validation()">Đăng ký</button>

        </div>
    </form>
</div>
