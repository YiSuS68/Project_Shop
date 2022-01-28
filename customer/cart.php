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

        <div>
            <?php 
            if (isset($_GET['error_update_quantity'])) {
                ?>
                <span style="color: red";><?php echo "Lỗi tăng giảm số lượng"; ?></span>
                <?php
            }
            ?>
            <!-- bảng giỏ hàng -->
            <table style=" border: 1px solid black; width: 100%; text-align:center;">
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                    <th>Xóa</th>
                </tr>

                <?php foreach ($cart as $id => $each): ?>
                    <tr>
                        <td><img src="../history_image/<?php echo $each['image'] ?>" height="100px"></td> <!-- lay anh de hien thi ra -->
                        <td><?php echo $each['name'] ?></td>    <!-- lấy ra tên để hiển thị -->
                        <td><?php echo $each['price'] ?></td>   <!-- lấy ra giá để hiển thị -->
                        <td>
                            <a href="update_quantity.php?id=<?php echo $id ?>&type=decre" style="text-decoration: none; color: red;">
                                -
                            </a>
                            <?php echo $each['quantity'] ?>
                            <a href="update_quantity.php?id=<?php echo $id ?>&type=incre" style="text-decoration: none; color: red;">
                                +
                            </a>
                        </td>    <!-- lấy ra số lượng để hiển thị -->
                        <td>
                            <b>
                                <?php 
                                $price = $each['price'] * $each['quantity'];
                                echo $price;
                                $sum_price = $sum_price + $price;
                            ?> VND</b>
                        </td>    <!-- lấy ra tổng tiền để hiển thị -->
                        <td>
                            <a href="delete_product_cart.php?id=<?php echo $id ?>" style="text-decoration: none; color: red;">X</a>
                        </td>   <!-- xóa -->
                    </tr>
                <?php endforeach ?>
                <tr>
                    <td colspan="3"></td>
                    <th>Tổng tiền hóa đơn</th>
                    <td>
                        <b>
                            <?php 
                            echo $sum_price;
                        ?> VND</b>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <?php   
            $id = $_SESSION['id'];
            require '../admin/connect.php';
            $query = "select * from customer where id = $id";
            $resume = mysqli_query($connect,$query);
            $each = mysqli_fetch_array($resume);
            ?>
            <form method="post" action="process_order.php">
                <table  style=" border: 1px solid black; width: 30%; text-align:center;">
                    <tr>
                        <th>Tên người nhận</th>
                        <td>
                            <input type="text" name="name_receiver" value='<?php echo $each['last_name']; ?> <?php echo $each['first_name']; ?>'>
                        </td>
                    </tr>
                    <tr>
                        <th>SĐT người nhận</th>
                        <td><input type="text" name="phone_receiver" value="<?php echo $each['phone']; ?>"></td>
                    </tr>
                    <tr>
                        <th> Địa chỉ người nhận</th>
                        <td><input type="text" name="address_receiver" value="<?php echo $each['address']; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button>Đặt hàng</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- footer -->
        <?php include "component_footer.php" ?>

    </div>

    <script src="../assets/js/index.js"></script>
</body>
</html>