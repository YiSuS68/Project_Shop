<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../login-site/login_style.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/media.css">
    <link rel="stylesheet" href="../assets/css/login_style.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Login Green Shop</title>
</head>
<body>


    <div id="background-sign">
    <?php include "../component_navbar_shortcut.php" ?>

    <!-- new -->
    <div class="center-form">
        
        <!-- Tab items -->
        <div class="tabs">

            <div class="tab-item active">
                <i class="fas fa-sign-in-alt"></i>
                Đăng Nhập
            </div>
            <div class="tab-item">
                <i class="fas fa-sign-out-alt"></i>
                Đăng Ký
            </div>

            <div class="line"></div>
        </div>
    
        <!-- Tab content -->
        <div>

            <div class="tab-pane active">
                <form class="login" method="post" action="process_insert.php">
                    
                    <input class="input-login" type="text" placeholder="Tên đăng nhập" required>
                        <i class="fas fa-user"></i>
                    <input class="input-login" type="password" placeholder="Mật khẩu" required>
                        <i class="fas fa-key"></i>
                        <!-- <a href="#0" class="hide-password">Show</a> -->
        
                    <div class="box-center">
                        <div>
                            <input type="checkbox" value="RememberMe" id="rememberMe"> 
                            <label class="rememberme-text" for="rememberMe">Ghi nhớ Đăng Nhập?</label>
                        </div>
                        <div>
                            <a class="forgot-pass" href="#">Quên mật khẩu?</a>
                        </div>
                    </div>
                    <button class="btn-button">
                        <span class="state">Đăng Nhập</span>
                    </button>
                </form>
            </div>

            <div class="tab-pane">
                <form class="login" action="#">

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
                            <select class="put-something">
                                <option> </option>
                                <option>Nam</option>
                                <option>Nữ</option>
                                <option>Không xác định</option>
                            </select>
                            <i class="fas fa-venus-mars"></i>
                        </div>
                    </div>
                    <div>
                        <button class="btn-button">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>

    <!-- end new -->


    <script src="../assets/js/login_js.js"></script>
    <script src="../assets/js/index.js"></script>
</body>
</html>