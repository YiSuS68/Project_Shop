<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/media.css">
  <title>Nhà sản xuất</title> 
</head>
<body>
  <?php  
  require '../connect.php';
  if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "select * from nha_san_xuat where name like '%$search%'";
  }else{
    $query = "select * from nha_san_xuat ";
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
              <th>Họ và tên</th>
              <th>Số điện thoại</th>
              <th>Địa chỉ</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
              <?php foreach ($resume as $get_nha_san_xuat){ ?>
                <tr>
                  <td style="text-align:center"><?php echo $get_nha_san_xuat['name']; ?></td>
                  <td style="text-align:center"><?php echo $get_nha_san_xuat['phone']; ?></td>
                  <td style="text-align:center"><?php echo $get_nha_san_xuat['address']; ?></td>
                  <td style="text-align:center">
                    <a href="form_update.php?id=<?php echo $get_nha_san_xuat['id']; ?>" style="color: blue;">X</a>
                  </td>
                  <td style="text-align:center">
                    <a href="delete.php?id=<?php echo $get_nha_san_xuat['id']; ?>" style="color: red;">X</a>
                  </td>
                </tr>
                <?php } ?>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>