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

  $page=1;
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }

  $search='';
  if (isset($_GET['search'])) {
    $search = $_GET['search'];
  }
  $query_quantity_value="select count(*) from producer where name like '%$search%'";
  $array_quantity_value = mysqli_query($connect,$query_quantity_value);
  $resume_quantitu_value=mysqli_fetch_array($array_quantity_value);
  $quantity_value=$resume_quantitu_value['count(*)'];

  $quantity_value_one_page=3;

  $quantity_page=ceil($quantity_value/$quantity_value_one_page);
  $quantity_value_pass=$quantity_value_one_page*($page-1);

  $query = "select * from producer 
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
          <?php foreach ($resume as $each){ ?>
            <tr>
              <td style="text-align:center"><?php echo $each['name']; ?></td>
              <td style="text-align:center"><?php echo $each['phone']; ?></td>
              <td style="text-align:center"><?php echo $each['address']; ?></td>
              <td style="text-align:center">
                <a href="form_update.php?id=<?php echo $each['id']; ?>" style="color: blue;">X</a>
              </td>
              <td style="text-align:center">
                <a href="delete.php?id=<?php echo $each['id']; ?>" style="color: red;">X</a>
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