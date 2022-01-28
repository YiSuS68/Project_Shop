<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CHI TIẾT HÓA ĐƠN</title> 
</head>
<body>
  <?php  
  require '../connect.php';
  require 'page_and_search.php';
  ?>
  <div style="width: 100%; height: 100%;">
    <div style="width: 50%; height: 12%; float: left;">
      <form>
        Tìm kiếm tên sản phẩm<br>
        <input type="search" name="search" value="<?php echo $search ?>">
      </form>
    </div>
    <div style="width: 50%; height: 12%; float: left;">
      <?php 
      require '../event_crud.php';
      ?>
    </div>
    <?php 
    require 'table.php'
    ?>
    <br>
    <br>
    <div style="float: right;">
      <button style="background-color:red;">
        <a href="delete_order.php?id=<?php echo $_GET['id']; ?>" style="text-decoration: none; color: white;">Hủy đơn</a>
      </button>
      <button style="background-color:green;">
        <a href="accept_order.php?id=<?php echo $_GET['id']; ?> " style="text-decoration: none; color: white;">Duyệt đơn</a>
      </button>
    </div>
  </div>
</body>
</html>