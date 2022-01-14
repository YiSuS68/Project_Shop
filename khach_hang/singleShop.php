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

    <?php
        $id =$_GET['id'];
        require '../admin/connect.php';
        $sql = "SELECT * from product
        where id = $id";
        $result =mysqli_query($connect,$sql);
        $each = mysql_fetch_array($result);
    ?>
    
    <div id="main">

        <!--navbar-->
        <?php include "../component_navbar_ontop.php" ?>
        <?php include "../component_navbar_shortcut.php" ?>
                

        <!-- single product -->
        <div id="single-product">
            <div class="containers p_b5">
                <div class="flex-wrap">

                    <!-- part one ảnh bên tay trái -->
                    <div class="single-imgall w-max p_l-r m_t5 media-w100">

                        <!-- 1.1 ảnh to bên trên -->
                        <div class="single-product_setup_img">
                            <img src="../assets/img/product_single_10.jpg" alt="Product" class="product-imgpro"> <!-- ảnh hiển thị của sản phẩm lấy từ db về -->
                        </div> <!-- ảnh trượt bên dưới được ấn sẽ hiển thị ở đây, làm bằng js cần tìm hiểu -->

                        <!-- 1.2 thanh trượt ảnh sản phẩm -->
                        <div class="flex-wrap">

                            <!-- 1.2.1 nút ấn sang bên trái -->
                            <div class="single-product_next">
                                <a><i class=" fas fa-chevron-left"></i></a>
                                <span></span>
                            </div>

                            <!-- 1.2.2 ảnh trượt x3 -->
                            <div class="single-product_carousel">
                                <div class="single-product_setup_carousel">

                                    <!-- 1.2.2.1 page 1 -->
                                    <div class="single-product_cards">
                                        <div class="flex-wrap">
                                            <div class="single-product_idk">
                                                <a href="#"> <!-- ấn vào nó sẽ hiển thị lên ảnh to, cái này làm bằng js không liên quan db -->
                                                    <img src="../assets/img/product_single_01.jpg" class="product-imgpro">
                                                </a>  <!-- ảnh của sản phẩm vd 1 được lấy từ db về -->
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#"> <!-- ấn vào nó sẽ hiển thị lên ảnh to, cái này làm bằng js không liên quan db -->
                                                    <img src="../assets/img/product_single_02.jpg" class="product-imgpro">
                                                </a>  <!-- ảnh của sản phẩm vd 2 được lấy từ db về -->
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#"> <!-- ấn vào nó sẽ hiển thị lên ảnh to, cái này làm bằng js không liên quan db -->
                                                    <img src="../assets/img/product_single_03.jpg" class="product-imgpro">
                                                </a>  <!-- ảnh của sản phẩm vd 3 được lấy từ db về -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 1.2.2.2 page 2 -->
                                    <div class="single-product_cards">
                                        <div class="flex-wrap">
                                            <div class="single-product_idk">
                                                <a href="#"> <!-- ấn vào nó sẽ hiển thị lên ảnh to, cái này làm bằng js không liên quan db -->
                                                    <img src="../assets/img/product_single_01.jpg" class="product-imgpro">
                                                </a>  <!-- ảnh của sản phẩm vd 1 được lấy từ db về -->
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#"> <!-- ấn vào nó sẽ hiển thị lên ảnh to, cái này làm bằng js không liên quan db -->
                                                    <img src="../assets/img/product_single_02.jpg" class="product-imgpro">
                                                </a>  <!-- ảnh của sản phẩm vd 2 được lấy từ db về -->
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#"> <!-- ấn vào nó sẽ hiển thị lên ảnh to, cái này làm bằng js không liên quan db -->
                                                    <img src="../assets/img/product_single_03.jpg" class="product-imgpro">
                                                </a>  <!-- ảnh của sản phẩm vd 3 được lấy từ db về -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 1.2.2.3 page 3 -->
                                    <div class="single-product_cards">
                                        <div class="flex-wrap">
                                            <div class="single-product_idk">
                                                <a href="#"> <!-- ấn vào nó sẽ hiển thị lên ảnh to, cái này làm bằng js không liên quan db -->
                                                    <img src="../assets/img/product_single_01.jpg" class="product-imgpro">
                                                </a>  <!-- ảnh của sản phẩm vd 1 được lấy từ db về -->
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#"> <!-- ấn vào nó sẽ hiển thị lên ảnh to, cái này làm bằng js không liên quan db -->
                                                    <img src="../assets/img/product_single_02.jpg" class="product-imgpro">
                                                </a>  <!-- ảnh của sản phẩm vd 2 được lấy từ db về -->
                                            </div>
                                            <div class="single-product_idk">
                                                <a href="#"> <!-- ấn vào nó sẽ hiển thị lên ảnh to, cái này làm bằng js không liên quan db -->
                                                    <img src="../assets/img/product_single_03.jpg" class="product-imgpro">
                                                </a>  <!-- ảnh của sản phẩm vd 3 được lấy từ db về -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 1.2.3 nút ấn sang bên phải -->
                            <div class="single-product_next">
                                <a><i class=" fas fa-chevron-right"></i></a>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    <!-- part two nội dung bên tay phải -->
                    <div class="single-textall w-max p_l-r m_t5 media-w100">
                        <div class="single-product_container_textall">
                            <div class="single-product_setup_textall">

                                <!-- 2.1 tên sản phẩm -->
                                <h1 class="h2 m_b"><?php echo $each['name'] ?></h1> <!-- lấy từ db về -->

                                <!-- 2.2 giá sản phẩm -->
                                <p class="h5 p_t-b m_b"><?php echo $each['price'] ?>VNĐ</p> <!-- lấy từ db về -->

                                <!-- 2.3 đánh giá chất lượng sản phẩm bằng sao -->
                                <p class="p_t-b m_b2"> <!-- có thể tự thêm hoặc làm bằng db (nó không quan trọng lắm) -->
                                    <i class="yellow fas fa-star"></i>
                                    <i class="yellow fas fa-star"></i>
                                    <i class="yellow fas fa-star"></i>
                                    <i class="yellow fas fa-star"></i>
                                    <i class="grey fas fa-star"></i>
                                    <span class="d-inline dark">Rating 4.8 | 36 Comments</span> <!-- có thể tự thêm hoặc làm bằng db (nó không quan trọng lắm) -->
                                </p>

                                <!-- 2.4 hãng, tên nhà sản xuất -->
                                <ul class="n-list_style m_b2">
                                    <li class="d-inline m-r"><h6 class="h6 m_b">Brand:</h6></li>
                                    <li class="d-inline m-r"><p class="grey m_b2"><strong><?php echo $each['producer'] ?></strong></p></li> <!-- lấy tên nhà sản xuất từ db lắp vào -->
                                </ul>

                                <!-- 2.5 nội dung sản phẩm -->
                                <h6 class="h6 m_b">Description:</h6>
                                <p class="h6 m_b2">
                                    <?php echo $each['description'] ?>
                                </p> <!-- thêm phần nội dung nhiều chữ từ db vào đây -->

                                <!-- 2.6 màu sắc sản phẩm -->
                                <ul class="n-list_style m_b2">
                                    <li class="d-inline m-r"><h6 class="h6 m_b">Avaliable Color :</h6></li>
                                    <li class="d-inline m-r">
                                        <p class="grey m_b2">
                                            <strong>White / Black</strong>
                                        </p>
                                    </li> <!-- có thể thêm màu sắc sản phẩm vào db, rồi hiển thị ra hoặc tự thêm (không quan trọng lắm) -->
                                </ul>

                                <!-- 2.7 đặc điểm nổi bật của sản phẩm thêm vào db, rồi hiển thị ra hoặc tự thêm (không quan trọng lắm)-->
                                <h6 class="h6 m_b">Specification:</h6>
                                <ul class="n-list_style p_b2 m_b2">
                                    <li>Lorem ipsum dolor sit</li>
                                    <li>Amet, consectetur</li>
                                    <li>Adipiscing elit,set</li>
                                    <li>Duis aute irure</li>
                                    <li>Ut enim ad minim</li>
                                    <li>Dolore magna aliqua</li>
                                    <li>Excepteur sint</li>
                                </ul>

                                <!-- 2.8 phần này là chọn size và số lượng sản phẩm, gửi đơn muốn mua -->
                                <form> <!-- thêm phần địa chỉ gửi và post -->
                                    <input type="hidden" name="product-title" value="Activewear">

                                    <!-- 2.8.1 chọn size và số lượng sản phẩm -->
                                    <div class="flex-wrap">

                                        <!-- 2.8.1.1 chọn size -->
                                        <div class="flex-0-auto w-auto w-max p_l-r">
                                            <ul class="n-list_style p_b2 m_b2">
                                                <li class="d-inline m-r">
                                                    Size :
                                                    <input type="hidden" name="product-size" value="S">
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup_size">S</span>
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup_size">M</span>
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup_size">L</span>
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup_size">XL</span>
                                                </li>   
                                            </ul>
                                        </div>

                                        <!-- 2.8.1.2 chọn số lượng -->
                                        <div class="text-size_single">
                                            <ul class="n-list_style p_b2 m_b2">
                                                <li class="d-inline m-r">
                                                    Quantity
                                                    <input type="hidden" name="product-quantity" value="1">
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup-two_size">-</span>
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup-three_size">1</span>
                                                </li>
                                                <li class="d-inline m-r">
                                                    <span class="text-setup-two_size">+</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- 2.8.1.2 nút gửi và nút thêm vào giỏ hàng -->
                                    <div class="flex-wrap p_b2">

                                        <!-- 2.8.1.2.1  nút gửi -->
                                        <div class="text-five_single">
                                            <button type="submit" class="settup-sotired" name="submit" value="buy">Buy</button>
                                        </div>

                                        <!-- 2.8.1.2.2  nút thêm vào giỏ hàng -->
                                        <div class="text-five_single">
                                            <button type="submit" class="settup-sotired" name="submit" value="addtocard">Add To Card</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
        <!-- footer -->
        <?php include "../component_footer.php" ?>

    </div>

    <script src="../assets/js/index.js"></script>
</body>
</html>