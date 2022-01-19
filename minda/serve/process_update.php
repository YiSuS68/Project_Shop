<?php  
$id = $_GET['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$identity = $_POST['identity'];
$address = $_POST['address'];
$level = $_POST['level'];
$wage = $_POST['wage'];
$account = $_POST['account'];
$password = $_POST['password'];

require '../connect.php';

$query = "update serve 
set
name='$name',
gender='$gender',
phone='$phone',
identity='$identity',
address='$address',
level='$level',
wage='$wage',
account='$account',
password='$password'
where
id='$id'
";

mysqli_query($connect,$query);
$loi= mysqli_error($connect);
echo $loi;
mysqli_close($connect);

