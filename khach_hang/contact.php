<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/media.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Green Shop</title>
</head>
<body>
    
    <div id="main">

        <!--navbar-->
        <?php include "../component_navbar_ontop.php" ?>
        <?php include "../component_navbar_shortcut.php" ?>
        


        <!-- contact US -->
        <div id="map-title">
            <div class="m-auto text-center flex-width768">
                <h1 class="h1 m_b">Liên hệ, Góp ý với chúng tôi qua form bên dưới</h1>
                <p class="text-center m_b2"> Chúng tôi Mang đến cho khách hàng sự yên tâm và hài lòng khi mua sắm tại nhà. Không ngừng 
                    tìm kiếm và cập nhật các mẫu quần áo, các hot trend trên thị trường để đáp ứng nhu cầu của khách hàng.</p>
            </div>
        </div>


<!-- nếu có thời gian tìm hiểu và thêm một cái bản đồ vào đây -->
        <!-- maps -->
        <div id="maps">

        </div>
<!-- kết thúc phần bản đồ thêm -->




        <!-- gửi hỗ trợ cho nhân viên hoặc quản lý, không cần đăng nhập -->
        <div class="containers" id="login">
            <div class="flex-wrap p_t-b5">
                <form class="login-form" role="form" method="post">

                    <!-- part one tên và email -->
                    <div class="flex-wrap">
                        <!-- 1.1 tên -->
                        <div class="p_l-r m_b2 w-max flex-width768 media-w100">
                            <label class="d-inline" for="inputname">tên của bạn:</label>
                            <input type="text" class="login-form_control" id="login-name" name="name" placeholder="Name">
                        </div>

                        <!-- 1.2 email -->
                        <div class="p_l-r m_b2 w-max flex-width768 media-w100">
                            <label class="d-inline" for="inputemail">Email:</label>
                            <input type="email" class="login-form_control" id="login-email" name="email" placeholder="email">
                        </div>
                    </div>

                    <!-- part two đề cập đến gì? -->
                    <div class="m_b2">
                        <label for="inputsubject">Đề cập đến? :</label>
                        <input type="text" class="login-form_control" id="login-subject" name="subject" placeholder="subject">
                    </div>

                    <!-- part three nội dung đề cập đến? -->
                    <div class="m_b2">
                        <label for="inputmessage">Nội dung đề cập:</label>
                        <textarea type="text" class="login-form_control" id="login-message" name="message" placeholder="message" rows="8"></textarea>
                    </div>

                    <!-- part four nút gửi -->
                    <div class="flex-wrap">
                        <div class="login-formsetup_container">
                            <button type="submit" class="submit-btn">Hãy nói chuyện</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>




        <!-- footer -->
        <?php include "../component_footer.php" ?>

    </div>

    <script src="../assets/js/index.js"></script>
</body>
</html>