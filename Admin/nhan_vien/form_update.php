<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm nhân viên</title>
</head>
<body>
	<?php 	
	$id=$_GET['id'];
	require '../connect.php';
	$query = "select * from nhan_vien where id=$id";
	$resume = mysqli_query($connect,$query);
	$get_nhan_vien = mysqli_fetch_array($resume);
	?>
	<form method="post" action="process_update.php?id=<?php echo $get_nhan_vien['id']; ?>">
		<table width=""50% align="center" border="2px">
			<tr>
				<th colspan="2">NHÂN VIÊN</th>
			</tr>
<!-- 			<tr>
				<th colspan="2"><input type="hidden" name="id" value="<?php echo $get_nhan_vien['id'] ?>"></th>
			</tr> -->
			<tr>
				<th>Họ và tên</th>
				<td><input type="text" name="name" value="<?php echo $get_nhan_vien['name'] ?>"></td>
			</tr>
			<tr>
				<th>Giới tính</th>
				<td>
					<input type="radio" name="gender" value="Nam" 
					<?php 
					if ($get_nhan_vien['gender'] == "Nam") {
						echo "checked";
					}
					?>
					>Nam
					<input type="radio" name="gender" value="Nữ"
					<?php 
					if ($get_nhan_vien['gender'] == "Nữ") {
						echo "checked";
					}
					?>
					>Nữ
					<input type="radio" name="gender" value="Khác"
					<?php 
					if ($get_nhan_vien['gender'] == "Khác") {
						echo "checked";
					}
					?>
					>Khác
				</td>
			</tr>
			<tr>
				<th>Số điện thoại</th>
				<td><input type="text" name="phone" value="<?php echo $get_nhan_vien['phone'] ?>"></td>
			</tr>
			<tr>
				<th>CCCD</th>
				<td><input type="text" name="identity" value="<?php echo $get_nhan_vien['identity'] ?>"></td>
			</tr>
			<tr>
				<th>Địa chỉ</th>
				<td><textarea name="address"><?php echo $get_nhan_vien['name'] ?></textarea></td>
			</tr>
			<tr>
				<th>Cấp bậc</th>
				<td><input type="text" name="level" value="<?php echo $get_nhan_vien['level'] ?>"></td>
			</tr>
			<tr>
				<th>Lương</th>
				<td><input type="text" name="wage" value="<?php echo $get_nhan_vien['wage'] ?>"></td>
			</tr>
			<tr>
				<th colspan="2"><button>Cập nhật</button></th>
			</tr>
		</table>
	</form>
</body>
</html>