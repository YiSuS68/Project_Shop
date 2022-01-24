<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../event.css">
	<title>SỬA HÓA ĐƠN</title>
</head>
<body>
	<?php 	
	if (empty($_GET['id']))
	{
		header('location:index.php?empty_update');
	}
	$id=addslashes($_GET['id']);
	require '../connect.php';
	$query = "	
	select customer.name as name_customer, serve.name as name_serve, bill.date_order, bill.status, bill.price_bill
	from bill 
	join customer on customer.id = bill.id_customer
	join serve on serve.id = bill.id_serve
	group by customer.name, serve.name, bill.date_order, bill.status, bill.price_bill
	where id=$id";
	$resume = mysqli_query($connect,$query);
	$each = mysqli_fetch_array($resume);
	?>
	<form method="post" action="process_update.php?id=<?php echo $each['id']; ?>">
		<table width="60%" align="center" border="2px">
			<tr>
				<th colspan="2">SỬA HÓA ĐƠN</th>
			</tr>
			<tr>
				<th>Tên khách hàng</th>
				<td>
					<select name="id_customer">
						<?php foreach ($resume as $each): ?>
							<option 
							value="<?php echo $each['id'] ?>" 
							<?php if ($each['id_producer'] == $each['id']){ ?>
								selected
							<?php } ?>
							>
							<?php echo $each['name'] ?>
						</option>
					<?php endforeach ?>>
				</td>
			</tr>
			<tr>
				<th>Tên nhân viên</th>
				<td>
					<select name="id_customer">
						<?php foreach ($resume as $each): ?>
							<option 
							value="<?php echo $each['id'] ?>" 
							<?php if ($each['id_producer'] == $each['id']){ ?>
								selected
							<?php } ?>
							>
							<?php echo $each['name'] ?>
						</option>
					<?php endforeach ?>>
				</td>
			</tr>
			<tr>
				<th>Ngày đặt</th>
				<td>
					<input id="name" type="text" name="name" value="<?php echo $each['name'] ?>">
					<span id="error_name" class="error_validate"></span>
				</td>
			</tr>

			<tr>
				<th colspan="2">
					<button	type="submit" onclick="return check()">Cập nhật</button>
				</th>
			</tr>
		</table>
	</form>
	<script src="validate.js"></script>
</body>
</html>