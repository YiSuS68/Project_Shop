<?php 
$each = mysqli_fetch_array($resume);
?>
<table width="100%" align="center" border="2px">
	<tr>
		<th colspan="6">CHI TIẾT HÓA ĐƠN</th>
	</tr>
	<tr>
		<th colspan="3">Tên khách hàng</th>
		<th colspan="3" style="text-align:center">
			<?php echo $each['name_customer']; ?>
		</th>
	</tr>
	<tr>
		<th>Tên sản phẩm</th>
		<th>Ảnh sản phẩm</th>
		<th>Số lượng</th>
		<th>Tổng tiền</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php foreach ($resume as $get_detail_bill){ ?>
		<tr>
			<td style="text-align:center"><?php echo $get_detail_bill['name_product']; ?></td>
			<td style="text-align:center">
				<img height="100px" src="../../history_image/<?php echo $get_detail_bill['image_product'] ?>">
			</td>
			<td style="text-align:center"><?php echo $get_detail_bill['quantity']; ?></td>
			<td style="text-align:center"><?php echo $get_detail_bill['price']; ?></td>
			<td style="text-align:center">
				<a href="form_update.php?id=<?php echo $get_detail_bill['id']; ?>" style="color: blue;">X</a>
			</td>
			<td style="text-align:center">
				<a href="delete.php?id=<?php echo $get_detail_bill['id']; ?>" style="color: red;">X</a>
			</td>
		</tr>
	<?php } ?>
</table>
<?php for ($i=1; $i <=$quantity_page ; $i++) { ?>
	<a  href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
		<span style="margin: 10px 10px; float: left; border: 2px solid black;"><?php echo $i ?> </span>
	</a>
	<?php } ?>