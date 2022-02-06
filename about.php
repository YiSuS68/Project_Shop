
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Green Shop</title>
</head>
<body>
    
    <div id="main">

        <!--navbar-->
        <?php include "component_navbar_ontop.php" ?>
        <?php include "component_navbar_shortcut.php" ?>

        <!-- About Us -->
        <div id="US">
            <div class="containers">
                <div class="p_t-b5 flex-wrap items-center">
                    <div class="US-flex white p_l-r">
                        <h1 class="m_b">Một số điều về chúng tôi</h1>
                        <p class="m_b2">Chúng tôi quan tâm đến khách hàng <b>Green Shop</b> chúng tôi không đơn thuần là cái đẹp 
                            thời trang, chúng tôi khao khát kiến tạo những giá trị xã hội nhân văn, trở thành một lối sống để đồng hành 
                            cùng bạn trên hành trình thấu cảm vẻ đẹp của chính mình.
                            <br>
                            <b>Green Shop</b> là kênh mua sắm online uy tín hàng đầu, cùng với đội ngũ nhân viên chuyên nghiệp, chúng tôi cam kết
                             đem những sản phẩm tốt nhất, với giá cả phải chăng, uy tín và chất lượng với dịch vụ tốt nhất đến với mọi người</p>
                    </div>
                    <div class="US-flex-photo media-w100 p_l-r">
                        <img src="assets/img/about-hero.svg" alt="thanh niên ngồi ghế cầm điện thoại" class="US-img">
                    </div>
                </div>
            </div>
        </div>

        
        <!-- Our Services -->
        <div class="containers" id="services">

            <!-- part one -->
            <div class="p_t5 p_b2 flex-wrap text-center">
                <div class="services-about flex-width p_l-r">
                    <h1 class="h1 m_b">dịch vụ của chúng tôi</h1>
                    <p class="m_b2">Giá cả phù hợp, tư vấn nhiệt tình. Giao hàng nhanh chóng. Hậu mãi chu đáo. Nhiều chương trình khuyến mãi hấp dẫn.</p>
                </div>
            </div>

            <!-- part two -->
            <div class="flex-wrap">
                <!-- 2.1 -->
                <div class="services-card flex-width768 media-w100">
                    <div class="services-css">
                        <div class="m_b text-center green h1 hover-w">
                            <i class="services-emote fas fa-truck"></i>
                        </div>
                        <h2 class="h5 text-center m_b m_t4">Dịch vụ giao hàng</h2>
                    </div>
                </div>

                <!-- 2.2 -->
                <div class="services-card flex-width768 media-w100">
                    <div class="services-css">
                        <div class="m_b text-center green h1 hover-w">
                            <i class="services-emote fas fa-exchange-alt"></i>
                        </div>
                        <h2 class="h5 text-center m_b m_t4">vận chuyển và hoàn trả</h2>
                    </div>
                </div>

                <!-- 2.3 -->
                <div class="services-card flex-width768 media-w100">
                    <div class="services-css">
                        <div class="m_b text-center green h1 hover-w">
                            <i class="services-emote fas fa-percent"></i>
                        </div>
                        <h2 class="h5 text-center m_b m_t4">Khuyến mãi</h2>
                    </div>
                </div>

                <!-- 2.4 -->
                <div class="services-card flex-width768 media-w100">
                    <div class="services-css">
                        <div class="m_b text-center green h1 hover-w">
                            <i class="services-emote fas fa-user"></i>
                        </div>
                        <h2 class="h5 text-center m_b m_t4">Dịch vụ 24/24h</h2>
                    </div>
                </div>

            </div>

            
        </div>


        <!-- footer -->
        <?php include "component_footer.php" ?>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>