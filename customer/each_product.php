<?php 
session_start();
    // kiểm tra xem đã đăng nhập chưa, hiện tại là kiểm tra id
if(empty($_SESSION['id'])) {
    // nếu mà chưa đăng nhập sẽ bị đẩy về phần đăng nhập
    header('location: ../login_register.php?not_exists_signin');
}
?>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Green Shop</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        require '../admin/connect.php';
        $sql = "
        select product.*,producer.name as name_producer 
        from product
        join producer on product.id_producer = producer.id
        where product.id = '$id'";
        $result = mysqli_query($connect,$sql);
        $each = mysqli_fetch_array ($result);
    ?>
    
    <div id="main">

        <!-- THÔNG BÁO -->
        <div class="open_notify">
            <div class="alert hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg">Thêm vào giỏ hàng thành công</span>
                <span class="close-btnn">
                    <span class="fas fa-times"></span>
                </span>
            </div>
        </div>
        <!-- HẾT THÔNG BÁO -->

        <!--navbar-->
        <?php include "component_navbar_ontop.php" ?>
        <?php include "component_navbar_shortcut.php" ?>

        <!-- single product -->
        <div id="single-product">
            <div class="containers p_b5">
                <div class="flex-wrap">

                    <!-- part one ảnh bên tay trái -->
                    <div class="single-imgall w-max p_l-r m_t5 media-w100">
                        <!-- 1.1 ảnh to bên trên -->
                        <div class="single-product_setup_img">
                            <img src="../history_image/<?php echo $each['image'] ?>" alt="Product" class="product-imgpro"> <!-- ảnh hiển thị của sản phẩm lấy từ db về -->
                        </div> <!-- ảnh trượt bên dưới được ấn sẽ hiển thị ở đây, làm bằng js cần tìm hiểu -->
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
                                    <span class="d-inline dark">
                                        Rating 4.8 | <?php echo $each['vote'] ?> Lượt đánh giá
                                    </span> <!-- có thể tự thêm hoặc làm bằng db (nó không quan trọng lắm) -->
                                </p>

                                <!-- 2.4 hãng, tên nhà sản xuất -->
                                <ul class="n-list_style m_b2">
                                    <li class="d-inline m-r"><h6 class="h6 m_b">Brand:</h6></li>
                                    <li class="d-inline m-r"><p class="green m_b2"><strong><?php echo $each['name_producer'] ?></strong></p></li> <!-- lấy tên nhà sản xuất từ db lắp vào -->
                                </ul>

                                <!-- 2.5 nội dung sản phẩm -->
                                <h6 class="h6 m_b">Mô tả:</h6>
                                <p class="m_b2">
                                    <?php echo $each['description'] ?>
                                </p> <!-- thêm phần nội dung nhiều chữ từ db vào đây -->

                                <!-- Chi tiết sản phẩm-->
                                <h6 class="h6 m_b">Chi tiết:</h6>
                                <p class="m_b2">
                                    <?php echo $each['detail'] ?>
                                </p>

                                <!-- 2.8 phần này là chọn size và số lượng sản phẩm, gửi đơn muốn mua -->

                                <!-- 2.8.1 chọn size và số lượng sản phẩm -->
                                <!-- 2.8.1.2 chọn số lượng -->
<!--                                     <div class="flex-wrap">
                                        <div class="text-size_single">
                                            <ul class="n-list_style p_b2 m_b2">
                                                <li class="d-inline m-r">
                                                    Số lượng
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
                                    </div> -->
                                    <!-- 2.8.1.2 nút gửi và nút thêm vào giỏ hàng -->
                                    <div class="flex-wrap p_b2">
                                        <!-- 2.8.1.2.1  nút gửi -->
                                        <div class="text-five_single">
                                            <button type="submit" class="settup-sotired" name="submit" value="buy">
                                                <a href="add_to_cart.php?id=<?php echo $each['id']?>&type=buy" style="text-decoration: none; color: white;">
                                                    Mua
                                                </a>
                                            </button>
                                        </div>

                                        <!-- 2.8.1.2.2  nút thêm vào giỏ hàng -->
                                        <div class="text-five_single">
                                            <button type="submit" class="settup-sotired" name="submit" value="addtocard">
                                                <a onclick="response_addCart();" href="add_to_cart.php?id=<?php echo $each['id']; ?>&type=add"$ style="text-decoration: none; color: white;">
                                                    Thêm vào giỏ hàng
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer -->
            <?php include "component_footer.php" ?>

        </div>
        <script src="../assets/js/index.js"></script>
    </script>
</body>
</html>