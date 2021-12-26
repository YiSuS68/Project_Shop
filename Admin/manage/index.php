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
  
  $page=1;
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }

  $search='';
  if (isset($_GET['search'])) {
    $search = $_GET['search'];
  }


  $query_quantity_value="select count(*) from manage where name like '%$search%'";
  $array_quantity_value = mysqli_query($connect,$query_quantity_value);
  $resume_quantitu_value=mysqli_fetch_array($array_quantity_value);
  $quantity_value=$resume_quantitu_value['count(*)'];

  $quantity_value_one_page=3;

  $quantity_page=ceil($quantity_value/$quantity_value_one_page);
  $quantity_value_pass=$quantity_value_one_page*($page-1);

  $query = "select * from manage 
  where 
  name like '%$search%' 
  limit $quantity_value_one_page
  offset $quantity_value_pass";
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
          <input type="search" name="search" value="<?php echo $search ?>">
        </form>
      </div>
      <div class="bot" style="align:center;">
        <table width="100%" align="center" border="2px">
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
          <?php foreach ($resume as $get_manage){ ?>
            <tr>
              <td style="text-align:center"><?php echo $get_manage['name']; ?></td>
              <td style="text-align:center"><?php echo $get_manage['gender']; ?></td>
              <td style="text-align:center"><?php echo $get_manage['phone']; ?></td>
              <td style="text-align:center"><?php echo $get_manage['identity']; ?></td>
              <td style="text-align:center"><?php echo $get_manage['address']; ?></td>
              <td style="text-align:center"><?php echo $get_manage['level']; ?></td>
              <td style="text-align:center"><?php echo $get_manage['wage']; ?></td>
              <td style="text-align:center">
                <a href="form_update.php?id=<?php echo $get_manage['id']; ?>" style="color: blue;">X</a>
              </td>
              <td style="text-align:center">
                <a href="delete.php?id=<?php echo $get_manage['id']; ?>" style="color: red;">X</a>
              </td>
            </tr>
          <?php } ?>
        </table>
        <?php for ($i=1; $i <=$quantity_page ; $i++) { ?>
          <a href="?page=<?php echo $i ?>&search=<?php echo $search ?>" >
            <span style="margin: 10px 10px; float: left; border: 2px solid black;"><?php echo $i ?> </span>
          </a>
        <?php } ?>
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