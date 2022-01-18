<link rel="stylesheet" href="../error_validate.css">
<form method="post" action="process_insert.php">
	<table width="50%" align="center" border="2px">
		<tr>
			<th colspan="2">THÊM NHÂN VIÊN</th>
		</tr>
		<tr>
			<th>Họ và tên</th>
			<td>
				<input id="name" type="text" name="name">
				<span id="error_name" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Giới tính</th>
			<td>
				<input type="radio" name="gender" value="Nam">Nam
				<input type="radio" name="gender" value="Nữ">Nữ
				<input type="radio" name="gender" value="Khác">Khác
				<span id="error_gender" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Số điện thoại</th>
			<td>
				<input id="phone" type="text" name="phone">
				<span id="error_phone" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>CCCD</th>
			<td>
				<input id="identity" type="number" name="identity">
				<span id="error_identity" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Địa chỉ</th>
			<td>
				<textarea id="address" name="address"></textarea>
				<span id="error_address" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Cấp bậc</th>
			<td>
				<input id="level" type="number" name="level">
				<span id="error_level" class="error_validate">1.NV | 2.QL | 3.AD</span>
			</td>
		</tr>
		<tr>
			<th>Lương</th>
			<td>
				<input id="wage" type="number" name="wage">
				<span id="error_wage" class="error_validate"></span>
			</td>
		</tr>
		<tr>
			<th>Tài khoản</th>
			<td>
				<input id="account" type="text" name="account">
			</td>
		</tr>
		<tr>
			<th>Mật khẩu</th>
			<td>
				<input id="password" type="password" name="password">
			</td>
		</tr>
		<tr>
			<th colspan="2">
				<button	type="submit" onclick="return check()">Thêm</button>
			</th>
		</tr>
	</table>
</form>
<script src="validate.js"></script>