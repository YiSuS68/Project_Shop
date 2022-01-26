<!-- liên kết với database -->
<?php 
    session_start();
        // kiểm tra xem đã đăng nhập chưa, hiện tại là kiểm tra id
    if(empty($_SESSION['id'])) {
            // nếu mà chưa đăng nhập sẽ bị đẩy về phần đăng nhập
        header('location: ../index.php?error=Hãy đăng nhập đi bạn êi');
    }
    $cart = $_SESSION['cart'];
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
            <!-- bảng giỏ hàng -->
            <table style=" border: 1px solid black; width: 100%">
                <tr>
                    <th>ảnh</th>
                    <th>tên sản phẩm</th>
                    <th>giá</th>
                    <th>số lượng</th>
                    <th>tổng tiền</th>
                    <th>xóa</th>
                </tr>

                <?php foreach ($cart as $id => $each): ?>
                    <tr>
                        <td><img src="../history_image/<?php echo $each['image'] ?>"></td> <!-- lay anh de hien thi ra -->
                        <td><?php echo $each['name'] ?></td>    <!-- lấy ra tên để hiển thị -->
                        <td><?php echo $each['price'] ?></td>   <!-- lấy ra giá để hiển thị -->
                        <td>
                            <a href="update_quantity.php?id=<?php echo $id ?>&type=decre">
                                -
                            </a>
                            <?php echo $each['quantity'] ?>
                            <a href="update_quantity.php?id=<?php echo $id ?>&type=incre">
                                +
                            </a>
                        </td>    <!-- lấy ra số lượng để hiển thị -->
                        <td><?php echo $each['price'] * $each['quantity'] ?></td>    <!-- lấy ra tổng tiền để hiển thị -->
                        <td><a href="delete_product_cart.php?id=<?php echo $id ?>">X</a></td>   <!-- xóa -->
                    </tr>
                <?php endforeach ?>
            </table>

        </div>

    
        <!-- footer -->
        <?php include "component_footer.php" ?>

    </div>

    <script src="../assets/js/index.js"></script>
</body>
</html>