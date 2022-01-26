<?php    
$id = $_GET['id'];
$page=1;
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}

$search='';
if (isset($_GET['search'])) {
  $search = $_GET['search'];
}

$query_quantity_value="
select count(*) 
from detail_bill 
join bill on bill.id = detail_bill.id_bill
join customer on customer.id = detail_bill.id_customer
join product on product.id = detail_bill.id_product 
where bill.id = $id and customer.first_name like '%$search%'";
$array_quantity_value = mysqli_query($connect,$query_quantity_value);
$resume_quantity_value=mysqli_fetch_array($array_quantity_value);
$quantity_value=$resume_quantity_value['count(*)'];

$quantity_value_one_page=5;

$quantity_page=ceil($quantity_value/$quantity_value_one_page);
$quantity_value_pass=$quantity_value_one_page*($page-1);

$query = "
select detail_bill.id as id_bill, customer.first_name as 'first_name_customer', customer.last_name as 'last_name_customer', 
product.name as name_product, product.image as image_product, detail_bill.quantity as quantity, detail_bill.price
from detail_bill 
join bill on bill.id = detail_bill.id_bill
join customer on customer.id = detail_bill.id_customer
join product on product.id = detail_bill.id_product
where bill.id = $id and customer.first_name like '%$search%'
group by detail_bill.id, customer.first_name, customer.last_name, product.name, product.image, detail_bill.quantity
limit $quantity_value_one_page
offset $quantity_value_pass";
$resume=mysqli_query($connect,$query);
mysqli_close($connect);