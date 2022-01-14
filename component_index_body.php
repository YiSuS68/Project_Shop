<!-- liên kết với database -->
<?php 
    require 'admin/connect.php';
    $sql = "SELECT * from product";
    $result = mysqli_query($connect,$sql);
?>

<!-- part ONE //slider -->
<div id="slider">
    <div class="slider-start">

        <!-- part one -->
        <div class="slider-item hi">
            <div class="containers">
                <div class="p5 flex-wrap">

                    <div class="slider-img">
                        <img class="img-fluid" src="../assets/img/banner_img_01.jpg" width="588px" height="588px"> 
                    </div> <!-- ảnh sản phẩm có thể lấy từ db về để hiển thị -->

                    <div class="items-center w-max d-flex flex-width p_l-r">
                        <div class="self-center">
                            <h1 class="h1 green m_b"><b>Green Shop</b> Thương Mại Điện Tử</h1>
                            <h3 class="slider-title2 h3 m_b">Mẫu sản phẩm thương mại điện tử nhỏ và hoàn hảo</h3>
                            <p class="m_b2">Trong điều kiện nền kinh tế đang phát triển hiện nay, yêu cầu con người hoạt động mạnh mẽ và vận động liên tục để 
                                            hòa cùng nhịp sống hiện đại. Thói quen tiêu dùng của người dân Việt chủ yếu là mua sắm hàng thời trang. Từ đó nhu cầu giải 
                                            trí, thể dục, thể thao, cũng được mọi người chú trọng để rèn luyện sức khỏe.
                            </p> <!-- cập nhập tiên đề nhiều chữ ở đây lấy từ db về -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- part two -->
        <div class="slider-item hi">
            <div class="containers">
                <div class="p5 flex-wrap">

                    <div class="slider-img">
                        <img class="img-fluid" src="../assets/img/banner_img_02.jpg" width="588px" height="588px"> 
                    </div> <!-- ảnh sản phẩm có thể lấy từ db về để hiển thị -->

                    <div class="items-center w-max d-flex flex-width p_l-r">
                        <div class="self-center">
                            <h1 class="h1 green m_b">Bình nước giữ nhiệt</h1>
                                <h3 class="slider-title2 h3 m_b">Mẫu sản phẩm thương mại điện tử nhỏ và hoàn hảo</h3>
                                <p class="m_b2">Bình giữ nhiệt là sản phẩm phích nước nhỏ di động rất tiện lợi trong việc di 
                                            chuyển. Nó được thiết kế các bộ phận tương tự như chiếc phích nhưng kích cỡ thu nhỏ và kiểu 
                                            dáng xinh xắn hơn rất nhiều. Bình giữ nhiệt có thể đựng dung dịch nóng và dung dịch lạnh nên 
                                            rất tiện ích, thường được mang theo khi đi làm, đi chơi, du lịch…
                                </p>  <!-- cập nhập tiên đề nhiều chữ ở đây lấy từ db về -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- part three -->
        <div class="slider-item hi">
            <div class="containers">
                <div class="p5 flex-wrap">

                    <div class="slider-img">
                        <img class="img-fluid" src="../assets/img/banner_img_03.jpg" width="588px" height="588px"> 
                    </div> <!-- ảnh sản phẩm có thể lấy từ db về để hiển thị -->

                    <div class="items-center w-max d-flex flex-width p_l-r">
                        <div class="self-center">
                            <h1 class="h1 green m_b">Đèn học</h1>
                            <h3 class="slider-title2 h3 m_b">Mẫu sản phẩm thương mại điện tử nhỏ và hoàn hảo</h3>
                            <p class="m_b2">Đèn bàn là một vật dụng vô cùng quen thuộc trong gia đình, phục vụ nhiều mục đích 
                                            như học bài, đọc sách báo... Qua nhiều năm, công nghệ chế tạo đèn bàn cũng được nâng cấp để an 
                                            toàn hơn sức khỏe người dùng, sử dụng dễ dàng hơn và tuổi thọ lâu hơn.
                            </p>  <!-- cập nhập tiên đề nhiều chữ ở đây lấy từ db về -->
                        </div>
                    </div>

                </div>
            </div> 
        </div>

        <!-- part four -->
        <div class="slider-choose">
            <label class="sliders" onclick="currentSlider(1)"></label>
            <label class="sliders" onclick="currentSlider(2)"></label>
            <label class="sliders" onclick="currentSlider(3)"></label>
        </div>

        <!-- part five -->
        <a class="slider-prev prev" onclick="plusSlides(-1)"><i class="size-prev green fas fa-chevron-left"></i></a>
        <a class="slider-next prev" onclick="plusSlides(1)"><i class="size-prev green fas fa-chevron-right"></i></a>

    </div>
</div>



<!-- START -->

<!-- part TWO //product -->  
<div class="container" id="category">   

    <!-- part one -->
    <div class="text-center p_t2 flex-wrap">
        <div class="category-about">
            <h1 class="h1 text-center m_b">Sản phẩm của tháng</h1>
            <p class="m_b2 text-center"> chúng tôi mang đến cho bạn những sản phẩm của tháng mà bạn có thể quan 
                tâm, đảm bảo không làm mất thời gian của bạn</p>
        </div>
    </div>

    <!-- part two -->
    <div class="flex-wrap">

        <!-- 2.1 -->
        <div class="category-item media-w100 m_t2 text-center">
        <?php foreach ($result as $each): ?>
            <a href="../khach_hang/singleShop.php"><img src="./admin/product/photoproduct/<?php echo $each['image'] ?>" width="344px" height="344px" class="category-img"></a>
            <!-- ảnh sản phẩm có thể lấy từ db về để hiển thị -->
            <h5 class="m_t-b2 h5">
                <?php echo $each['name'] ?>  <!-- đây đầu tiên là đồng hồ -->          
            </h5>
            <p class="m_b2 text-center"><a class="category-submit" href="../khach_hang/singleShop.php?id=<?php echo $each['id'] ?>">Tìm hiểu</a>
            </p> <!-- có link id chỏ đến trang khác -->
        <?php endforeach ?>
        </div>

        <!-- 2.2 -->
        <div class="category-item media-w100 m_t2 text-center">
        <?php foreach ($result as $each): ?>
        <a href="../khach_hang/singleShop.php"><img src="./admin/product/photoproduct/<?php echo $each['image'] ?>" width="344px" height="344px" class="category-img"></a>
            <!-- ảnh sản phẩm có thể lấy từ db về để hiển thị -->
            <h5 class="m_t-b2 h5">
                <?php echo $each['name'] ?>  <!-- đây đầu tiên là đồng hồ -->          
            </h5>
            <p class="m_b2 text-center"><a class="category-submit" href="../khach_hang/singleShop.php?id=<?php echo $each['id'] ?>">Tìm hiểu</a>
            </p> <!-- có link id chỏ đến trang khác -->
        <?php endforeach ?>
        </div>

        <!-- 2.3 -->
        <div class="category-item media-w100 m_t2 text-center">
        <?php foreach ($result as $each): ?>
        <a href="../khach_hang/singleShop.php"><img src="./admin/product/photoproduct/<?php echo $each['image'] ?>" width="344px" height="344px" class="category-img"></a>
            <!-- ảnh sản phẩm có thể lấy từ db về để hiển thị -->
            <h5 class="m_t-b2 h5">
                <?php echo $each['name'] ?>  <!-- đây đầu tiên là đồng hồ -->          
            </h5>
            <p class="m_b2 text-center"><a class="category-submit" href="../khach_hang/singleShop.php?id=<?php echo $each['id'] ?>">Tìm hiểu</a>
            </p> <!-- có link id chỏ đến trang khác -->
            <?php endforeach ?>
        </div>
    </div>

</div>

<!-- END -->



<!-- part THREE //Featured Product --> 
<div id="featured"> 
    <div class="featured-product container">

        <!-- part one -->
        <div class="flex-wrap text-center p_t-b2">
            <div class="featured-container text-center">
                <h1 class="h1 m_b text-center">Sản phẩm nổi bật</h1>
                <p class="m_b2">Những sản phẩm nổi bật mà bạn có thể quan tâm</p>
            </div>
        </div>

        <!-- part two -->
        <div class="flex-wrap">

            <!-- 2.1 -->
            <div class="featured-card">
                <div class="featured-setup">
                    <a href="../khach_hang/singleShop.php">
                        <img src="./admin/product/photoproduct/<?php echo $each['image'] ?>"  alt="Featured" class="featured-img"> 
                    </a> <!-- ảnh sản phẩm có thể lấy từ db về để hiển thị -->

                    <div class="featured-body">
                        <ul class="featured-evalute">
                            <li>
                                <i class="yellow fas fa-star"></i>
                                <i class="yellow fas fa-star"></i>
                                <i class="yellow fas fa-star"></i>
                                <i class="w-grey fas fa-star"></i>
                                <i class="w-grey fas fa-star"></i>
                            </li>
                            <li class="w-grey"><?php echo $each['price'] ?>VNĐ</li> <!-- cập nhập giá từ db về -->
                        </ul>
                        <a href="../khach_hang/singleShop.php" class="black h2 n-decoration m_b">Đèn mini</a>
                        <p class="featured-about m_b2">
                            <?php echo $each['detail'] ?>
                        </p> <!-- đánh giá ngắn cập nhập từ db về -->
                        <p class="featured-reviews w-grey m_b2">lượt đánh giá (388)</p> <!--đánh giá số lượng ở đây-->
                    </div>
                </div>
            </div>

            <!-- 2.2 -->
            <div class="featured-card">
                <div class="featured-setup">
                    <a href="../khach_hang/singleShop.php">
                        <img src="./admin/product/photoproduct/<?php echo $each['image'] ?>" alt="Featured" class="featured-img"> 
                    </a> <!-- ảnh sản phẩm có thể lấy từ db về để hiển thị -->

                    <div class="featured-body">
                        <ul class="featured-evalute">
                            <li>
                                <i class="yellow fas fa-star"></i>
                                <i class="yellow fas fa-star"></i>
                                <i class="yellow fas fa-star"></i>
                                <i class="w-grey fas fa-star"></i>
                                <i class="w-grey fas fa-star"></i>
                            </li>
                            <li class="w-grey"><?php echo $each['price'] ?>VNĐ</li> <!-- cập nhập giá từ db về -->
                        </ul>
                        <a href="../khach_hang/singleShop.php" class="black h2 n-decoration m_b">Đồng hồ theo dõi sức khỏe</a>
                        <p class="featured-about m_b2">
                            <?php echo $each['detail'] ?>
                        </p> <!-- đánh giá ngắn cập nhập từ db về -->
                        <p class="featured-reviews w-grey m_b2">lượt đánh giá (388)</p> <!--đánh giá số lượng ở đây-->
                    </div>
                </div>
            </div>

            <!-- 2.3 -->
            <div class="featured-card">
                <div class="featured-setup">
                    <a href="../khach_hang/singleShop.php">
                        <img src="./admin/product/photoproduct/<?php echo $each['image'] ?>" alt="Featured" class="featured-img"> 
                    </a> <!-- ảnh sản phẩm có thể lấy từ db về để hiển thị -->

                    <div class="featured-body">
                        <ul class="featured-evalute">
                            <li>
                                <i class="yellow fas fa-star"></i>
                                <i class="yellow fas fa-star"></i>
                                <i class="yellow fas fa-star"></i>
                                <i class="yellow fas fa-star"></i>
                                <i class="yellow fas fa-star"></i>
                            </li>
                            <li class="w-grey"><?php echo $each['price'] ?>VNĐ</li> <!-- cập nhập giá từ db về -->
                        </ul>
                        <a href="../khach_hang/singleShop.php" class="black h2 n-decoration m_b">Máy chụp ảnh polaroid</a>
                        <p class="featured-about m_b2">
                            <?php echo $each['detail'] ?>
                        </p> <!-- đánh giá ngắn cập nhập từ db về -->
                        <p class="featured-reviews w-grey m_b2">lượt đánh giá (620)</p> <!--đánh giá số lượng ở đây-->
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>