<?php  
$id = $_GET['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$identity = $_POST['identity'];
$address = $_POST['address'];
$level = $_POST['level'];
$wage = $_POST['wage'];

require '../connect.php';

$query = "update manage 
set
name='$name',
gender='$gender',
phone='$phone',
identity='$identity',
address='$address',
level='$level',
wage='$wage'
where
id='$id'
";

mysqli_query($connect,$query);
$loi= mysqli_error($connect);
echo $loi;
mysqli_close($connect);

