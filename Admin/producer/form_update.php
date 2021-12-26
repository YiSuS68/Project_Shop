<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa nhà sản xuất</title>
</head>
<body>
	<?php 	
	$id=$_GET['id'];
	require '../connect.php';
	$query = "select * from producer where id=$id";
	$resume = mysqli_query($connect,$query);
	$each = mysqli_fetch_array($resume);
	?>
	<form method="post" action="process_update.php?id=<?php echo $each['id']; ?>">
		<table width="60%" align="center" border="2px">
			<tr>
				<th colspan="2">NHÂN VIÊN</th>
			</tr>
<!-- 			<tr>
				<th colspan="2"><input type="hidden" name="id" value="<?php echo $each['id'] ?>"></th>
			</tr> -->
			<tr>
				<th>Tên nhà sản xuất</th>
				<td><input type="text" name="name" value="<?php echo $each['name'] ?>"></td>
			</tr>
			<tr>
				<th>Số điện thoại</th>
				<td><input type="text" name="phone" value="<?php echo $each['phone'] ?>"></td>
			</tr>
			<tr>
				<th>Địa chỉ</th>
				<td><textarea name="address"><?php echo $each['name'] ?></textarea></td>
			</tr>
			<tr>
				<th colspan="2"><button>Cập nhật</button></th>
			</tr>
		</table>
	</form>
</body>
</html>