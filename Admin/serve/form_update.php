<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa nhân viên</title>
</head>
<body>
	<?php 	
	$id=$_GET['id'];
	require '../connect.php';
	$query = "select * from serve where id=$id";
	$resume = mysqli_query($connect,$query);
	$each = mysqli_fetch_array($resume);
	?>
	<form method="post" action="process_update.php?id=<?php echo $each['id']; ?>">
		<table width="60%" align="center" border="2px">
			<tr>
				<th colspan="2">SỬA NHÂN VIÊN</th>
			</tr>
<!-- 			<tr>
				<th colspan="2"><input type="hidden" name="id" value="<?php echo $each['id'] ?>"></th>
			</tr> -->
			<tr>
				<th>Họ và tên</th>
				<td><input type="text" name="name" value="<?php echo $each['name'] ?>"></td>
			</tr>
			<tr>
				<th>Giới tính</th>
				<td>
					<input type="radio" name="gender" value="Nam" 
					<?php 
					if ($each['gender'] == "Nam") {
						echo "checked";
					}
					?>
					>Nam
					<input type="radio" name="gender" value="Nữ"
					<?php 
					if ($each['gender'] == "Nữ") {
						echo "checked";
					}
					?>
					>Nữ
					<input type="radio" name="gender" value="Khác"
					<?php 
					if ($each['gender'] == "Khác") {
						echo "checked";
					}
					?>
					>Khác
				</td>
			</tr>
			<tr>
				<th>Số điện thoại</th>
				<td><input type="text" name="phone" value="<?php echo $each['phone'] ?>"></td>
			</tr>
			<tr>
				<th>CCCD</th>
				<td><input type="text" name="identity" value="<?php echo $each['identity'] ?>"></td>
			</tr>
			<tr>
				<th>Địa chỉ</th>
				<td><textarea name="address"><?php echo $each['name'] ?></textarea></td>
			</tr>
			<tr>
				<th>Cấp bậc</th>
				<td><input type="text" name="level" value="<?php echo $each['level'] ?>"></td>
			</tr>
			<tr>
				<th>Lương</th>
				<td><input type="text" name="wage" value="<?php echo $each['wage'] ?>"></td>
			</tr>
			<tr>
				<th colspan="2"><button>Cập nhật</button></th>
			</tr>
		</table>
	</form>
</body>
</html>