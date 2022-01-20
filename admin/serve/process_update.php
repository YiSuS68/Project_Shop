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
	header('location:index.php?empty_update');
	die();
}


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
$error= mysqli_error($connect);
if ($error){
	mysqli_close($connect);
	header('location:index.php?error_update');
	die();
}
else{ 
	mysqli_close($connect);
	header('location:index.php?update');
}
