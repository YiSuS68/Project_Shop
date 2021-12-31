<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login_style.css">
    <link rel="stylesheet" href="../assets/css/media.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Login Green Shop</title>
</head>
<body>

    <?php include "../navbar.php" ?>
    
    <!--co the them phan navbar + logo o tren doan na`y-->
    <div id="login_form" class="container_login">
        <form class="login" method="post" action="process_insert.php">

            <p class="title">Đăng Nhập</p>

            <input class="input-login" type="text" placeholder="Tên đăng nhập" required>
                <i class="fas fa-user"></i>
            <input class="input-login" type="password" placeholder="Mật khẩu" required>
                <i class="fas fa-key"></i>

            <div class="box-center">
                <div>
                    <input type="checkbox" value="RememberMe" id="rememberMe"> 
                    <label class="rememberme-text" for="rememberMe">Ghi nhớ Đăng Nhập?</label>
                </div>
                <div>
                    <a class="forgot-pass" href="#">Lấy lại mật khẩu?</a>
                </div>
            </div>
            <button class="btn-button">
                <span class="state">Đăng Nhập</span>
            </button>
        </form>
    </div>

    <!--sign up-->
    <div id="sign-up_form" class="container-signUp">
        <form class="sign-up" action="#">
            <div class="popup-close" onclick="openPopupLogin()">&times;</div>
            <p class="title">Đăng Ký</p>
            <div class="input-form">
                <input class="put-something" type="text" placeholder="Tên đăng nhập" name="user_name" required >
                <i class="fas fa-user"></i>
            </div>
            <div class="sign-up_name">
                <div class="input-form">
                    <input class="put-something" type="text" placeholder="họ" name="first_name" required >
                    <i class="far fa-comment-dots"></i>
                </div>
                <div class="input-form">
                    <input class="put-something" type="text" placeholder="Tên" name="last_name" required >
                    <i class="far fa-comment-dots"></i>
                </div>
            </div>
            <div class="input-form">
                <input class="put-something" type="number" placeholder="Số di động" name="phone_number" required >
                <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="input-form">
                <input class="put-something" type="email" placeholder="Nhập email" name="">
                <i class="fas fa-at"></i>
            </div>
            <div class="input-form">
                <input class="put-something" type="password" placeholder="nhập mật khẩu" name="password" required >
                <i class="fas fa-key"></i>
            </div>
            <div class="input-form">  
                <input class="put-something" type="password" placeholder="nhập lại mật khẩu" name="password" required >
                <i class="fas fa-key"></i>
            </div>

            <div class="sign-up_name">
                <div class="input-form">
                    <label class="input-label" for="birthday">Ngày Sinh:</label>
                    <input class="put-something" type="date" id="birthday" name="birthday" required >
                        <i class="fas fa-table"></i>
                </div>
                <div class="input-form">
                    <label class="input-label">Giới Tính:</label>
                    <select class="gender-fix">
                        <option> </option>
                        <option>Nam</option>
                        <option>Nữ</option>
                        <option>Không xác định</option>
                    </select>
                </div>
            </div>
            <div>
                <button class="btn-button">Đăng ký</button>
            </div>
        </form>
    </div>

    <div class="open-popup">
        <button id="btn-sign-up" class="bubbly-button" onclick="openPopupRegister()">Đăng ký!</button>
    </div>

    <script src="login_js.js"></script>
    <script src="../assets/js/index.js"></script>
</body>
</html>