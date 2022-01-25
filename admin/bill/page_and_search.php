<?php    
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
from bill
join customer ON customer.id = bill.id_customer 
join serve ON serve.id = bill.id_serve 
where customer.first_name like '%$search%'";
$array_quantity_value = mysqli_query($connect,$query_quantity_value);
$resume_quantity_value=mysqli_fetch_array($array_quantity_value);
$quantity_value=$resume_quantity_value['count(*)'];

$quantity_value_one_page=5;

$quantity_page=ceil($quantity_value/$quantity_value_one_page);
$quantity_value_pass=$quantity_value_one_page*($page-1);

$query = "
select bill.id, customer.first_name as 'first_name_customer', customer.last_name as 'last_name_customer', serve.name as 'name_serve', bill.date_order, bill.status, bill.price_bill 
from bill
join customer ON customer.id = bill.id_customer 
join serve ON serve.id = bill.id_serve 
where customer.first_name like '%$search%' 
group by bill.id, customer.first_name, customer.last_name, serve.name, bill.date_order, bill.status, bill.price_bill
limit $quantity_value_one_page
offset $quantity_value_pass";
$resume=mysqli_query($connect,$query);