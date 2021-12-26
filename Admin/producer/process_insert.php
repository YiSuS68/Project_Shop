<?php  

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

require '../connect.php';
// if ($gender === 'Male') {
// 	$gender ='Nam';	
// }elseif ($gender === 'female') {
// 	$gender ='Nữ';	
// }elseif ($gender === 'orther') {
// 	$gender ='Khác';	
// }
$query = "insert into producer(name,phone,address)
values('$name','$phone','$address')";

mysqli_query($connect,$query);
$loi= mysqli_error($connect);
echo $loi;
mysqli_close($connect);

