<?php  

$name = $_POST['name'];
$image = $_FILES['image'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$folder='../history_image/';
$file_extension = explode('.', $image['name'])[1];
$file_image_name=time() . '.' . $file_extension;
$path_file = $folder . $file_image_name;

move_uploaded_file($image["tmp_name"], $path_file);

require '../connect.php';

$query = "insert into producer(name,image,phone,address)
values('$name','$file_image_name','$phone','$address')";

mysqli_query($connect,$query);
$loi= mysqli_error($connect);
echo $loi;
mysqli_close($connect);

