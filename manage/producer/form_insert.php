<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm nhà sản xuất</title>
</head>
<body>
	<form method="post" action="process_insert.php" enctype="multipart/form-data">
		<table width="50%" align="center" border="2px">
			<tr>
				<th colspan="2">Nhà sản xuất</th>
			</tr>
			<tr>
				<th>Tên nhà sản xuất</th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th>Ảnh</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Số điện thoại</th>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<th>Địa chỉ</th>
				<td><textarea name="address"></textarea></td>
			</tr>
			<tr>
				<th colspan="2"><button>Thêm</button></th>
			</tr>
		</table>
	</form>
</body>
</html>