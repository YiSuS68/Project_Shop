<?php  
$id = $_GET['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$detail = $_POST['detail'];
$new_image = $_FILES['new_image'];
if ($new_image['size'] > 0) {
	$folder='../../Admin/product/history_image/';
	$file_extension = explode('.', $new_image['name'])[1];
	$file_image_name=time() . '.' . $file_extension;
	$path_file = $folder . $file_image_name;

	move_uploaded_file($new_image["tmp_name"], $path_file);
}else{
	$file_image_name= $_POST['old_image'];
}
$price = $_POST['price'];
$vote = $_POST['vote'];
$id_producer = $_POST['id_producer'];

require '../connect.php';

$query = "update product
set
name= '$name',
description= '$description',
detail= '$detail',
image= '$file_image_name',
price = '$price',
vote = '$vote',
id_producer = '$id_producer'
where
id ='$id'
";
mysqli_query($connect,$query);
$loi= mysqli_error($connect);
echo $loi;
mysqli_close($connect);

