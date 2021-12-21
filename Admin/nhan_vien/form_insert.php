<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm nhân viên</title>
</head>
<body>
	<form method="post" action="process_insert.php">
		<table width="50%" align="center" border="2px">
			<tr>
				<th colspan="2">NHÂN VIÊN</th>
			</tr>
			<tr>
				<th>Họ và tên</th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th>Giới tính</th>
				<td>
					<input type="radio" name="gender" value="Nam">Nam
					<input type="radio" name="gender" value="Nữ">Nữ
					<input type="radio" name="gender" value="Khác">Khác
				</td>
			</tr>
			<tr>
				<th>Số điện thoại</th>
				<td><input type="number" name="phone"></td>
			</tr>
			<tr>
				<th>CCCD</th>
				<td><input type="number" name="identity"></td>
			</tr>
			<tr>
				<th>Địa chỉ</th>
				<td><textarea name="address"></textarea></td>
			</tr>
			<tr>
				<th>Cấp bậc</th>
				<td><input type="number" name="level"></td>
			</tr>
			<tr>
				<th>Lương</th>
				<td><input type="number" name="wage"></td>
			</tr>
			<tr>
				<th colspan="2"><button>Thêm</button></th>
			</tr>
		</table>
	</form>
</body>
</html>