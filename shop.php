<?php 
require 'admin/connect.php';
require 'page_and_search.php';
?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Green Shop</title>
</head>
<body>

    <div id="main">

        <!--navbar-->
        <?php include "component_navbar_ontop.php" ?>
        <?php include "component_navbar_shortcut.php" ?>
        


        <!-- card category -->
        <div class="containers" id="buynow">
            <div class="flex-wrap">

                <!-- part one -->
                <div class="buynow-collapse media-w100 p_l-r">
                    <h1 class="h1 p_b4 m_b">Categories</h1>
                    <ul class="n-list_style m_b2">
                        <!-- 1.1 -->
                        <li class="p_b2">
                            <a class="space-flex m_b n-decoration black" href="#0" id="collapse-shop">Gender
                                <i class="w p_t0 fas fa-chevron-circle-down">
                                </i>
                            </a> <!-- chỉnh để nó trượt xuống 1 đoạn hiển thị ra thêm 2 lựa chọn -->
                            <div id="collapse-shop_wrapper">
                                <ul class="n-list_style" id="collapse-shop_list">
                                    <li><a class="n-decoration" href="#">Men</a></li>
                                    <li><a class="n-decoration" href="#">Women</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- 1.2 -->
                        <li class="p_b2">
                            <a class="space-flex m_b n-decoration black" href="#">Sale
                                <i class="w p_t0 fas fa-chevron-circle-down">
                                </i>
                            </a>  <!-- chỉnh để nó trượt xuống 1 đoạn hiển thị ra thêm 2 lựa chọn -->

                            <ul class="n-list_style d-none">
                                <li><a class="n-decoration" href="#">Sport</a></li>
                                <li><a class="n-decoration" href="#">Luxury</a></li>
                            </ul>
                        </li>
                        <!-- 1.3 -->
                        <li class="p_b2">
                            <a class="space-flex m_b n-decoration black" href="#">Product
                                <i class="w p_t0 fas fa-chevron-circle-down">
                                </i>
                            </a>  <!-- chỉnh để nó trượt xuống 1 đoạn hiển thị ra thêm 3 lựa chọn -->

                            <ul class="n-list_style d-none">
                                <li><a class="n-decoration" href="#">Bag</a></li>
                                <li><a class="n-decoration" href="#">Sweather</a></li>
                                <li><a class="n-decoration" href="#">Sunglass</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

                <!-- part two -->
                <div class="buynow-resp_img media-w100">

                    <!-- 2.1 phần này là về sắp xếp lại sản phẩm và lọc sản phẩm --> 
                    <div class="flex-wrap">
                        <!-- 2.1.1 lọc sản phẩm -->
                        <div class="p_l-r w-max flex-width768 media-w100">
                            <ul class="n-list_style p_t0 p_b2 m_b2">
                                <li class="d-inline m_r">
                                    <a class="hover black n-decoration m_b" href="#">All
                                    </a> <!-- hiển thị tất cả sản phẩm theo cách sắp xếp bình thường --> 
                                </li>
                                <li class="d-inline m_r">
                                    <a class="hover black n-decoration m_b" href="#">Men's
                                    </a> <!-- lọc sản phẩm chỉ con trai -->
                                </li>
                                <li class="d-inline m_r">
                                    <a class="hover black n-decoration m_b" href="#">Women's
                                    </a> <!-- lọc sản phẩm chỉ con gái -->
                                </li>
                            </ul>
                        </div>

                        <!-- 2.1.2  sắp xếp sản phẩm -->
                        <div class="p_l-r p_b4 w-max flex-width768 media-w100">
                            <div class="d-flex">
                                <select class="buynow-choose">
                                    <option>Featured</option> <!-- hiển thị mặc định -->
                                    <option>A to Z</option> <!-- sắp xếp theo thứ tự từ A đến Z bảng chữ cái -->
                                    <option>Item</option> <!-- sắp xếp theo số lượng đang còn -->
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- 2.2 phần này là về nội dung sản phẩm hiển thị -->
                    <div class="flex-wrap">

                        <!-- 2.2.1 sản phẩm ví dụ 1 -->
                        <?php foreach ($resume as $each): ?>
                            <div class="buynow-card_start media-w100">
                                <div class="buynow-setup_card_start">
                                    <!-- 2.2.1.1 ảnh của sản phẩm -->

                                    <div class="buynow-img">
                                        <img src="history_image/<?php echo $each['image'] ?>"> <!-- lấy ảnh từ db về hiển thị ở đây -->
                                        <div class="buynow-hovered"> <!-- di vào nó sẽ hiện ra: thêm vào giỏ hàng, xem mặt hàng -->
                                            <ul class="n-list_style m_b2">
                                                <li>
                                                    <a class="buynow-btn" href="#">
                                                        <i class="far fa-eye">     
                                                        </i>
                                                    </a> <!-- di chuyển đến singleShop và lấy toàn bộ thông tin của mặt hàng hiển thị bên singleShop -->
                                                </li>
                                                <li>
                                                    <a class="buynow-btn" href="#">
                                                        <i class="fas fa-cart-plus">
                                                        </i>
                                                    </a>  <!-- thêm sản phẩm vào giỏ hàng -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <!-- thông tin của sản phẩm -->
                                    <div class="buynow-text">
                                        <a class="black n-decoration m_b" href="each_product.php?id=<?php echo $each['id'] ?>">
                                            <?php echo $each['name'] ?>
                                        </a> <!-- trỏ đến trang each_product với đầy đủ thông tin của mặt hàng -->

                                        <ul class="space-flex n-list_style">
                                            <li>M/L/X/XL</li> <!-- có thể thêm số size của mặt hàng, hoặc mình tự đặt -->
                                            <li></li>
                                        </ul>

                                        <ul class="center-flex n-list_style m_b"> <!-- có thể thêm số lượng sao cho sản phẩm, hoặc mình tự đặt -->
                                            <li>
                                                <i class="yellow fas fa-star"></i>
                                                <i class="yellow fas fa-star"></i>
                                                <i class="yellow fas fa-star"></i>
                                                <i class="grey fas fa-star"></i>
                                                <i class="grey fas fa-star"></i>
                                            </li>
                                        </ul>
                                        <p class="text-center"><?php echo $each['price'] ?>VNĐ</p> <!-- hiển thị giá của sản phẩm lấy từ db về -->
                                    </div>

                                </div>

                            </div>
                        <?php endforeach ?>
                    </div>

                    <!-- 2.3 phần này là nút bấm sang trang, nếu sản phẩm nhiều quá 9 thì sẽ sang trang 2... -->
                    <div>
                        <ul class="end-flex n-list_style m_b2">
                         <li>
                            <?php for ($i=1; $i <=$quantity_page ; $i++) { ?>
                                <?php if ($page == $i){?>
                                    <li>
                                        <a class="buynow-design_number_disabled" href="?page=<?php echo $i ?>&search=<?php echo $search ?>" >
                                            <span><?php echo $i ?></span>
                                        </a>
                                    </li>
                                <?php }else{ ?>
                                    <li>
                                        <a class="buynow-design_number" href="?page=<?php echo $i ?>&search=<?php echo $search ?>" >
                                            <span><?php echo $i ?></span>
                                        </a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </li>
                    </div>

                </div>
            </div>
        </div>



        <!-- Our brand -->
        <div id="brand">
            <div class="containers m_t4 m_b4">
                <div class="flex-wrap p_t-b2 text-center">

                    <!-- part one tiêu đề -->
                    <div class="brand-about flex-width p_l-r media-w100">
                        <h1 class="h1 m_b">Các nhãn hiệu tiêu biểu</h1>
                        <p class="m_b2">Với sự góp mặt của các nhãn hiệu nổi tiếng thế giới như: H&M, adidas, levi's, ...</p>
                    </div>

                    <!-- part two icon -->
                    <div class="brand-slider p_l-r">
                        <div class="w100">
                            <div class="flex-wrap">
                                <div class="brand-logo_brand"><a href="https://levi.com.vn/" target="_blank"><img class="brand-img" src="assets/img/brand_01.png" width="110px" height="74px"></a></div>
                                <div class="brand-logo_brand"><a href="https://www.adidas.com.vn/vi" target="_blank"><img class="brand-img" src="assets/img/brand_02.png" width="110px" height="74px"></a></div>
                                <div class="brand-logo_brand"><a href="https://www.nike.com/vn/" target="_blank"><img class="brand-img" src="assets/img/brand_03.png" width="110px" height="74px"></a></div>
                                <div class="brand-logo_brand"><a href="https://www.hm.com/vn/" target="_blank"><img class="brand-img" src="assets/img/brand_04.png" width="110px" height="74px"></a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>




        <!-- footer -->
        <?php include "component_footer.php" ?>

    </div>

    <script src="assets/js/index.js"></script>
</body>
</html>