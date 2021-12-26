<?php 
$id =$_GET['id'];

require '../connect.php';

$query = "delete from serve where id='$id'";

mysqli_query($connect,$query);
$loi= mysqli_error($connect);
echo $loi;
mysqli_close($connect);