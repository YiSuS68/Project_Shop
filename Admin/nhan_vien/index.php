<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/media.css">
  <title>Nhân viên</title> 
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
              <th>Giới tính</th>
              <th>Số điện thoại</th>
              <th>CCCD</th>
              <th>Địa chỉ</th>
              <th>Cấp bậc</th>
              <th>Lương</th>
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
<!--                 <form>
          <table width="30%">
            <tr>
              <td rowspan="2">
                <a href="form_insert.php">
                  <button>Thêm</button>
                </a>
              </td>
              <td>Tìm kiếm tên</td><br>
            </tr>
            <tr>
              <td><input type="search" name="search"></td>
            </tr>
          </table>
        </form> -->