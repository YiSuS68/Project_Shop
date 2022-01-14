<!-- có lỗi sẽ hiển thị ra, lấy ra lỗi -->
<?php
    session_start();
    if(isset($_COOKIE['remember'])) {
        $token = $_COOKIE['remember'];
        require '../connect.php';
        $sql = "SELECT * from register where token = '$token' limit 1";
        $result = mysqli_query($connect,$sql);
        $number_rows = mysqli_num_rows($result);
        if ($number_rows == 1) {
            $each = mysqli_fetch_array($result);
            $_SESSION['id'] = $each['id'];
            $_SESSION['last_name'] = $each['last_name'];
        }
    }
    if (isset($_SESSION['id'])) {
        header('Location: signafter.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/media.css">
    <link rel="stylesheet" href="../assets/css/login_style.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Login Green Shop</title>
</head>
<body>


    <!-- navbar -->
    <?php include "../component_navbar_shortcut.php" ?>



    <!-- đăng nhập và đăng ký -->
    <div class="center-form">
        
        <!-- part one thanh tab của đăng nhập đăng ký -->
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
    

        <!-- part two nội dung form của thanh đăng nhập, đăng ký -->
        <div>

            <!-- 2.1 đăng nhập -->
            <div class="tab-pane active">
                <form class="login" method="post" action="../process_login.php" enctype="multipart/form-data">
                    
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


            <!-- 2.2 đăng ký -->
            <div class="tab-pane">
                <form class="login" action="../process_register.php" method="post" enctype="multipart/form-data">

                    <!-- 2.2.1 tên đăng nhập -->
                    <div class="input-form">
                        <input class="put-something" type="text" placeholder="Tên đăng nhập" name="user_name" required >
                        <i class="fas fa-user"></i>
                    </div>

                    <!-- 2.2.2 họ và tên -->
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

                    <!-- 2.2.3 số điện thoại -->
                    <div class="input-form">
                        <input class="put-something" type="text" placeholder="Số di động" name="phone_number" required >
                        <i class="fas fa-mobile-alt"></i>
                    </div>

                    <!-- 2.2.4 email -->
                    <div class="input-form">
                        <input class="put-something" type="email" placeholder="Nhập email" name="email">
                        <i class="fas fa-at"></i>
                    </div>

                    <!-- 2.2.5 mật khẩu -->
                    <div class="input-form">
                        <input class="put-something" type="password" placeholder="nhập mật khẩu" name="password" required >
                        <i class="fas fa-key"></i>
                    </div>

                    <!-- 2.2.6 nhập lại mật khẩu -->
                    <div class="input-form">  
                        <input class="put-something" type="password" placeholder="nhập lại mật khẩu" name="confirm_password" required >
                        <i class="fas fa-key"></i>
                    </div>

                    <!-- 2.2.7 ngày sinh và chọn giới tính -->
                    <div class="sign-up_name">
                        <div class="input-form">
                            <label class="input-label" for="birthday">Ngày Sinh:</label>
                            <input class="put-something" type="date" id="birthday" name="birthday" required >
                                <i class="fas fa-table">
                                </i>
                        </div>

                        <div class="input-form">
                            <label class="input-label">Giới Tính:</label>
                            <select class="put-something" name="gender">
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
                        <button class="btn-button">Đăng ký</button>
                    </div>
                </form>
            </div>

        </div>


    </div>

    
    


    <script src="../assets/js/login_js.js"></script>
    <script src="../assets/js/index.js"></script>
</body>
</html>