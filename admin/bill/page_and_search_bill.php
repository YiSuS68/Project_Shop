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
join `order` on bill.id_order = `order`.id
join serve on bill.id_serve = serve.id
join customer on `order`.id_customer = customer.id
where customer.first_name like '%$search%'";
$array_quantity_value = mysqli_query($connect,$query_quantity_value);
$resume_quantity_value=mysqli_fetch_array($array_quantity_value);
$quantity_value=$resume_quantity_value['count(*)'];

$quantity_value_one_page=5;

$quantity_page=ceil($quantity_value/$quantity_value_one_page);
$quantity_value_pass=$quantity_value_one_page*($page-1);

$query = "
select customer.first_name,customer.last_name,serve.name,bill.status
from `order`
join customer on customer.id = `order`.id_customer
where customer.first_name like '%$search%'
group by customer.first_name,customer.last_name,`order`.name_receiver,`order`.phone_receiver,`order`.address_receiver,
`order`.status,`order`.date_order,`order`.total_price
limit $quantity_value_one_page
offset $quantity_value_pass";
$resume=mysqli_query($connect,$query);