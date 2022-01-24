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
        <?php include "component_navbar_ontop.php" ?>
        <?php include "component_navbar_shortcut.php" ?>
        <!-- About Us -->
        <div id="US">
            <div class="containers">
                <div class="p_t-b5 flex-wrap items-center">
                    <div class="US-flex white p_l-r">
                        <h1 class="m_b">About Us</h1>
                        <p class="m_b2">Chúng tôi quan tâm đến khách hàng <b>Green Shop</b> chúng tôi không đơn thuần là cái đẹp 
                            thời trang, chúng tôi khao khát kiến tạo những giá trị xã hội nhân văn, trở thành một lối sống để đồng hành 
                            cùng bạn trên hành trình thấu cảm vẻ đẹp của chính mình.
                            <br>
                            <b>Green Shop</b> là kênh mua sắm online uy tín hàng đầu, cùng với đội ngũ nhân viên chuyên nghiệp, chúng tôi cam kết
                             đem những sản phẩm tốt nhất, với giá cả phải chăng, uy tín và chất lượng với dịch vụ tốt nhất đến với mọi người</p>
                    </div>
                    <div class="US-flex-photo media-w100 p_l-r">
                        <img src="../assets/img/about-hero.svg" alt="thanh niên ngồi ghế cầm điện thoại" class="US-img">
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


<!-- đang trong thời gian chỉnh sửa -->
        <!-- Our brand -->
        <div class="slider">

            <div class="slide_viewer">
                <div class="slide_group">
                
                    <div class="slide">
                    </div>
    
                    <div class="slide">
                    </div>
    
                    <div class="slide">
                    </div>
    
                    <div class="slide">
                    </div>
                    
                </div>
            </div>
    
        </div>
        <!-- End // .slider -->
          
        <div class="slide_buttons"></div>
          
        <div class="directional_nav">
    
            <div class="previous_btn" title="Previous">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                    <g>
                        <g>
                            <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"/>
                            <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="next_btn" title="Next">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                    <g>
                        <g>
                            <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"/>
                            <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>
                        </g>
                    </g>
                </svg>
            </div>
    
        </div>
        <!-- End // .directional_nav -->
    


<!-- kết thúc chỉnh sửa -->


        
        <!-- footer -->
        <?php include "component_footer.php" ?>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>