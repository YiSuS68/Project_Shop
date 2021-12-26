<?php  
$id = $_GET['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

require '../connect.php';

$query = "update producer 
set
name='$name',
phone='$phone',
address='$address'
where
id='$id'";

mysqli_query($connect,$query);
$loi= mysqli_error($connect);
echo $loi;
mysqli_close($connect);

