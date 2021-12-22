<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/media.css">
  <title>Sản phẩm</title> 
</head>
<body>
  <?php  
  require '../connect.php';
  if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "select * from san_pham where name like '%$search%'";
  }else{
    $query = "select * from san_pham ";
  }
  $resume=mysqli_query($connect,$query);
  ?>

  <div id="div-all">
    <?php 
    require_once 'menu.php'
    ?>
    <div class="right">
      <div class="top">  
        <a href="form_insert.php">
          <button style="  
          width: 10%;
          height: 50%;
          margin: 10px 10px;
          float: left;">Thêm</button>
        </a>
        <form style="float: left; margin: 5px 0 0 0;">
          Tìm kiếm tên<br>
          <input type="search" name="search">
        </form>
      </div>
      <div class="bot" style="align:center;">
        <form>
          <table width="95%" align="center" border="2px">
            <tr>
              <th colspan="10">NHÂN VIÊN</th>
            </tr>
            <tr>
              <th>Tên sản phẩm</th>
              <th>Tiêp đề</th>
              <th>Mô tả</th>
              <th>Ảnh</th>
              <th>Giá</th>
              <th>Đánh giá</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
<!--               <?php foreach ($resume as $get_san_pham){ ?>
                <tr>
                  <td style="text-align:center"><?php echo $get_san_pham['name']; ?></td>
                  <td style="text-align:center"><?php echo $get_san_pham['title']; ?></td>
                  <td style="text-align:center"><?php echo $get_san_pham['description']; ?></td>
                  <td style="text-align:center"><?php echo $get_san_pham['image']; ?></td>
                  <td style="text-align:center"><?php echo $get_san_pham['price']; ?></td>
                  <td style="text-align:center"><?php echo $get_san_pham['vote']; ?></td>
                  <td style="text-align:center">
                    <a href="form_update.php?id=<?php echo $get_san_pham['id']; ?>" style="color: blue;">X</a>
                  </td>
                  <td style="text-align:center">
                    <a href="delete.php?id=<?php echo $get_san_pham['id']; ?>" style="color: red;">X</a>
                  </td>
                </tr>
                <?php } ?> -->
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>