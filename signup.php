
<!-- 2.2 đăng ký -->
<div class="tab-pane">
    <form class="login" action="customer/process_signup.php" method="post">

        <!-- 2.2.1 tên đăng nhập -->
        <div class="input-form">
            <span id="errorUsername">*</span>
            <input class="put-something" type="text" placeholder="Tên đăng nhập" name="username" id="username">
            <i class="fas fa-user"></i>
        </div>

        <!-- 2.2.2 họ và tên -->
        <div class="sign-up_name">
            <div class="input-form">
            <span id="errorFirstName">*</span>
                <input class="put-something" type="text" placeholder="họ" name="firstname" id="firstname">
                <i class="far fa-comment-dots"></i>
            </div>
            <div class="input-form">
            <span id="errorLastname">*</span>
                <input class="put-something" type="text" placeholder="Tên" name="lastname" id="lastname">
                <i class="far fa-comment-dots"></i>
            </div>
        </div>

        <!-- 2.2.3 số điện thoại -->
        <div class="input-form">
            <span id="errorPhonenumber">*</span>
            <input class="put-something" type="text" placeholder="Số di động" name="phonenumber" id="phonenumber">
            <i class="fas fa-mobile-alt"></i>
        </div>

        <!-- 2.2.4 email -->
        <div class="input-form">
            <span id="errorEmail">*</span>
            <input class="put-something" type="email" placeholder="Nhập email" name="email" id="email">
            <i class="fas fa-at"></i>
        </div>

        <!-- 2.2.5 mật khẩu -->
        <div class="input-form">
            <span id="errorPassword">*</span>
            <input class="put-something" type="password" placeholder="nhập mật khẩu" name="password" id="password">
            <i class="fas fa-key"></i>
        </div>

        <!-- 2.2.6 nhập lại mật khẩu -->
        <div class="input-form">  
        <span id="errorConfirm_password">*</span>
            <input class="put-something" type="password" placeholder="nhập lại mật khẩu" name="confirm_password" id="confirm_password">
            <i class="fas fa-key"></i>
        </div>

        <!-- 2.2.7 ngày sinh và chọn giới tính -->
        <div class="sign-up_name">
            <div class="input-form">
                <span id="errorBirthday">*</span>
                <label class="input-label" for="birthday">Ngày Sinh:</label>
                <input class="put-something" type="date" id="birthday" name="birthday">
                    <i class="fas fa-table">
                    </i>
            </div>

            <div class="input-form">
            <span id="errorGender">*</span>
                <label class="input-label">Giới Tính:</label>
                <select class="put-something" name="gender" id="gender">
                    <option> </option>
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                    <option value="2">Không xác định</option>
                </select>
                <i class="fas fa-venus-mars">
                </i>
            </div>
        </div>

        <!-- 2.2.8 nút đăng ký -->
        <div>
            <button type="button" class="btn-button" onclick="return formValidate()">Đăng ký</button>
        </div>
    </form>
    <script src="assets/js/regex.js"></script>
</div>
