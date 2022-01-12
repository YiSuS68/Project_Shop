<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm sản phẩm</title>
</head>
<body>


	<?php 	
	require '../connect.php';
	// $query_product = "select * from product ";
	// $resume_product=mysqli_query($connect,$query_product);
	$query_producer = "select * from producer ";
	$resume_producer=mysqli_query($connect,$query_producer);
	mysqli_close($connect);	
	?>


	<form method="post" action="process_insert.php" enctype="multipart/form-data">
		<table width="50%" align="center" border="2px">
			<tr>
				<th colspan="2">THÊM SẢN PHẨM</th>
			</tr>
			<tr>
				<th>Tên sản phẩm</th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th>Mô tả</th>
				<td><textarea name="description"></textarea></td>
			</tr>
			<tr>
				<th>Nội dung</th>
				<td><textarea name="detail"></textarea></td>
			</tr>
			<tr>
				<th>Ảnh</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Giá</th>
				<td><input type="number" name="price"></td>
			</tr>
			<tr>
				<th>Đánh giá</th>
				<td><input type="number" name="vote"></td>
			</tr>
			<tr>
				<th>Nhà sản xuất</th>
				<td>
					<select name="id_producer">
						<?php foreach ($resume_producer as $each): ?>
							<option value="<?php echo $each['id'] ?>">
								<?php echo $each['name'] ?>
							</option>
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<th colspan="2"><button>Thêm</button></th>
			</tr>
		</table>
	</form>


</body>
</html>