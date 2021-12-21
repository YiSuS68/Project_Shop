<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/media.css">
  <title>ADMIN</title> 
</head>
<body>
  <?php  
  require '../connect.php';
  if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "select * from nhan_vien where name like '%$search%'";
  }else{
    $query = "select * from nhan_vien";
  }
  $resume=mysqli_query($connect,$query);
  ?>

  <div id="div-all">
    <div id="div-top">
      <div class="left">
        <a href="../root" style="text-decoration: none;">
          <h1>ADMIN</h1>
        </a>
      </div>
      <div class="right" >
        <a href="">
          <img src="">LOGO + Tên Shop
        </a>
      </div>
    </div>
    <div id="div-space-top"></div>
    <div id="div-bot">
      <div id="div-space-bot-left"></div>
      <div class="left">
        <div class="top">
          <?php 
          require_once 'menu.php'
          ?>
        </div>
        <div class="bot">
          <ul type="none">
            <li class="button">SETTING</li>
            <li class="button">ACCOUNT</li>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="top">  
          <a href="form_insert.php">
            <button class="button_function">Thêm</button>
          </a>
          <form style="float: left; margin: 5px 0 0 0;">
            <th>Tìm kiếm tên</th><br>
            <td><input type="search" name="search"></td>
          </form>
        </div>
        <div class="bot" style="align:center;">
          <form>
            <table width="95%" align="center" border="2px">
              <tr>
                <th colspan="10">NHÂN VIÊN</th>
              </tr>
              <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Identity</th>
                <th>Address</th>
                <th>Level</th>
                <th>Wage</th>
                <th>Sửa</th>
                <th>Xóa</th>
              </tr>
              <?php foreach ($resume as $get_nhan_vien){ ?>
                <tr>
                  <td style="text-align:center"><?php echo $get_nhan_vien['name']; ?></td>
                  <td style="text-align:center"><?php echo $get_nhan_vien['gender']; ?></td>
                  <td style="text-align:center"><?php echo $get_nhan_vien['phone']; ?></td>
                  <td style="text-align:center"><?php echo $get_nhan_vien['identity']; ?></td>
                  <td style="text-align:center"><?php echo $get_nhan_vien['address']; ?></td>
                  <td style="text-align:center"><?php echo $get_nhan_vien['level']; ?></td>
                  <td style="text-align:center"><?php echo $get_nhan_vien['wage']; ?></td>
                  <td style="text-align:center">
                    <a href="form_update.php?id=<?php echo $get_nhan_vien['id']; ?>" style="color: blue;">X</a>
                  </td>
                  <td style="text-align:center">
                    <a href="delete.php?id=<?php echo $get_nhan_vien['id']; ?>" style="color: red;">X</a>
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