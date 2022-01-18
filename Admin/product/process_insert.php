<?php  

$name = $_POST['name'];
$description = $_POST['description'];
$detail = $_POST['detail'];
$image = $_FILES['image'];
$price = $_POST['price'];
$vote = $_POST['vote'];
$id_producer = $_POST['id_producer'];

$folder='../../history_image/';
$file_extension = explode('.', $image['name'])[1];
$file_image_name=time() . '.' . $file_extension;
$path_file = $folder . $file_image_name;

move_uploaded_file($image["tmp_name"], $path_file);
require '../connect.php';

$query = "insert into product(name,description,detail,image,price,vote,id_producer)
values('$name','$description','$detail','$file_image_name','$price','$vote','$id_producer')";

mysqli_query($connect,$query);
$loi= mysqli_error($connect);
echo $loi;
mysqli_close($connect);

