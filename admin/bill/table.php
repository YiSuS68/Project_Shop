<table width="100%" align="center" border="2px">
  <tr>
    <th colspan="8">HÓA ĐƠN</th>
  </tr>
  <tr>
    <th>Tên khách hàng</th>
    <th>Tên nhân viên</th>
    <th>Ngày đặt</th>
    <th>Trạng thái</th>
    <th>Tổng tiền</th>
    <th>Chi tiết</th>
    <th>Sửa</th>
    <th>Xóa</th>
  </tr>
  <?php foreach ($resume as $get_bill){ ?>
    <tr>
      <td style="text-align:center"><?php echo $get_bill['name_customer']; ?></td>
      <td style="text-align:center"><?php echo $get_bill['name_serve']; ?></td>
      <td style="text-align:center"><?php echo $get_bill['date_order']; ?></td>
      <td style="text-align:center"><?php echo $get_bill['status']; ?></td>
      <td style="text-align:center"><?php echo $get_bill['price_bill']; ?></td>
      <td style="text-align:center">
        <a href="../detail_bill?id=<?php echo $get_bill['id']; ?>" style="color: black; text-decoration: none;">=></a>
      </td>
      <td style="text-align:center">
        <a href="form_update.php?id=<?php echo $get_bill['id']; ?>" style="color: blue;">X</a>
      </td>
      <td style="text-align:center">
        <a href="delete.php?id=<?php echo $get_bill['id']; ?>" style="color: red;">X</a>
      </td>
    </tr>
  <?php } ?>
</table>
<?php for ($i=1; $i <=$quantity_page ; $i++) { ?>
  <a  href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
    <span style="margin: 10px 10px; float: left; border: 2px solid black;"><?php echo $i ?> </span>
  </a>
<?php } ?>