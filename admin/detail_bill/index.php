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
      <?php 
      require '../event_crud.php';
      ?>
    </div>
    <div style="width: 50%; height: 12%; float: left;">
      <form style="float: right;">
        Tìm kiếm tên nhân viên<br>
        <input type="search" name="search" value="<?php echo $search ?>">
      </form>
    </div>
    <?php 
    require_once 'table.php'
    ?>
  </div>
</body>
</html>