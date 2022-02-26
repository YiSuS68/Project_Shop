<!-- liên kết với database -->
<?php 
    session_start();
            // kiểm tra xem đã đăng nhập chưa, hiện tại là kiểm tra id
    if(empty($_SESSION['id'])) {
                // nếu mà chưa đăng nhập sẽ bị đẩy về phần đăng nhập
        header('location: ../login_register.php?not_exists_signin');
    }
    if (empty($_SESSION['cart'])) {
        header('location: index.php?empty_cart');
    }
    $cart = $_SESSION['cart'];
    $sum_price = 0;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Green Shop</title>
</head>
<body>

    <div id="main">

        <!--navbar-->
        <?php include "component_navbar_ontop.php" ?>
        <?php include "component_navbar_shortcut.php" ?>

        <div class="p m">
            <?php 
            if (isset($_GET['error_update_quantity'])) {
                ?>
                <span style="color: red";><?php echo "Lỗi tăng giảm số lượng"; ?></span>
                <?php
            }
            ?>

            <!-- bảng giỏ hàng -->
            <!-- tiêu đề -->
            <div class="table-title text-center">
                <h3>Danh Sách</h3>
            </div>

            <!-- bắt đầu vào bảng -->
            <table class="table-fill">

                <!-- phần 1 tiêu đề -->
                <thead>
                    <tr class="viet">
                        <th class="text-left bui">Ảnh</th>
                        <th class="text-left bui">Tên Sản Phẩm</th>
                        <th class="text-left bui">Giá</th>
                        <th class="text-left bui">Số Lượng</th>
                        <th class="text-left bui">Tổng tiền</th>
                        <th class="text-left bui">Xóa Sản Phẩm</th>
                    </tr>
                </thead>

                <!-- phần 2 nội dung sản phẩm được thêm vào -->
                <tbody class="table-hover">
                    <!-- Sản phẩm thứ nhất -->
                    <?php foreach ($cart as $id => $each): ?>
                    <tr class="viet">
                        <td class="text-left text-center"><img src="../history_image/<?php echo $each['image'] ?>" height="100px"></td>
                        <td class="text-left"><?php echo $each['name'] ?></td>
                        <td class="text-left text-center"><?php echo $each['price'] ?> ₫</td>
                        <td class="text-left text-center">
                            <a href="update_quantity.php?id=<?php echo $id ?>&type=decre" style="text-decoration: none; color: red;">
                                -
                            </a>
                            <?php echo $each['quantity'] ?>
                            <a href="update_quantity.php?id=<?php echo $id ?>&type=incre" style="text-decoration: none; color: red;">
                                +
                            </a>
                        </td>
                        <td class="text-left text-center"><?php 
                            $price = $each['price'] * $each['quantity'];
                            echo $price;
                            $sum_price = $sum_price + $price; ?> ₫</td>
                        <td class="text-left text-center"><a href="delete_product_cart.php?id=<?php echo $id ?>" style="text-decoration: none; color: red;">X</a></td>
                    </tr>
                    <?php endforeach ?>

                </tbody>

                <!-- phần 3 tổng số tiền của những sản phẩm đã chọn -->
                    <tr>
                        <td colspan="4"></td>
                        <th>Tổng tiền hóa đơn:</th>
                        <td>
                            <b>
                                <?php 
                                echo $sum_price;
                            ?> ₫</b>
                        </td>
                    </tr>
            </table>
        </div>

        <!-- bảng nhập thông tin -->
        <div class="form-address p m">
        <div class="login-triangle"></div>
        
        <h2 class="login-header">Thông Tin Của Đơn Hàng</h2>
        <?php   
                $id = $_SESSION['id'];
                require '../admin/connect.php';
                $query = "select * from customer where id = $id";
                $resume = mysqli_query($connect,$query);
                $each = mysqli_fetch_array($resume);
            ?>
      
        <form class="login-container" method="post" action="process_order.php">
          <p class="form-contact">
              <label>Họ và Tên:</label>
              <input class="form-send" type="text" placeholder="Nhập Tên của bạn..." name="name_receiver" value='<?php echo $each['last_name']; ?> <?php echo $each['first_name']; ?>'>
            </p>
          <p class="form-contact">
              <label>Số điện thoại:</label>
              <input class="form-send" type="text" placeholder="Nhập Số Điện Thoại Của Bạn..." name="phone_receiver" value="<?php echo $each['phone']; ?>">
            </p>
          <p class="form-contact">
              <label>Địa chỉ:</label>
              <input class="form-send" type="text" placeholder="Nhập Địa Chỉ Nhận Hàng..." name="address_receiver" value="<?php echo $each['address']; ?>">
            </p>
          <p class="form-contact"><input class="form-send" type="submit" value="Đặt Hàng"></p>
        </form>
        </div>

        <!-- footer -->
        <?php include "component_footer.php" ?>

    </div>

    <script src="../assets/js/index.js"></script>
</body>
</html>