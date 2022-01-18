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


  $query_quantity_value="select count(*) from serve where name like '%$search%'";
  $array_quantity_value = mysqli_query($connect,$query_quantity_value);
  $resume_quantitu_value=mysqli_fetch_array($array_quantity_value);
  $quantity_value=$resume_quantitu_value['count(*)'];

  $quantity_value_one_page=3;

  $quantity_page=ceil($quantity_value/$quantity_value_one_page);
  $quantity_value_pass=$quantity_value_one_page*($page-1);

  $query = "select * from serve 
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
  </div>
</body>
</html>