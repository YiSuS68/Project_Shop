<?php  

$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$identity = $_POST['identity'];
$address = $_POST['address'];
$level = $_POST['level'];
$wage = $_POST['wage'];

require '../connect.php';
// if ($gender === 'Male') {
// 	$gender ='Nam';	
// }elseif ($gender === 'female') {
// 	$gender ='Nữ';	
// }elseif ($gender === 'orther') {
// 	$gender ='Khác';	
// }
$query = "insert into nhan_vien(name,gender,phone,identity,address,level,wage)
values('$name','$gender','$phone','$identity','$address','$level','$wage')";

mysqli_query($connect,$query);
$loi= mysqli_error($connect);
echo $loi;
mysqli_close($connect);

