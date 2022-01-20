<?php  
if (empty($_POST['name']
	|| $_POST['gender']
	|| $_POST['phone']
	|| $_POST['identity']
	|| $_POST['address']
	|| $_POST['level']
	|| $_POST['wage']
	|| $_POST['account']
	|| $_POST['password'])) 
{
	header('location:index.php?empty_insert');
	die();
}

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
$query = "insert into serve(name,gender,phone,identity,address,level,wage,account,password)
values('$name','$gender','$phone','$identity','$address','$level','$wage','$account','$password')";

mysqli_query($connect,$query);
$error= mysqli_error($connect);
echo $error;
mysqli_close($connect);

header('location:index.php?insert');

