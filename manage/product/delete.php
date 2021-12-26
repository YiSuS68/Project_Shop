<?php 
$id =$_GET['id'];

require '../connect.php';

$query = "delete from product where id='$id'";

mysqli_query($connect,$query);
$error= mysqli_error($connect);
echo $error;
// if (empty($error)) {
// 	header('location:index.php')
// }
mysqli_close($connect);