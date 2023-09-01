<?php //include('partials/menu.php') ;
include('../config//constants.php');
include('Navbar.html');



if(isset($_POST['placeorderBtn']))
{

   // $customer_email=  mysqli_real_escape_string($conn,$_POST['customer_email']);
    $customer_contact=mysqli_real_escape_string($conn,$_POST['customer_contact']);
    $customer_address=mysqli_real_escape_string($conn,$_POST['customer_address']);

    //$dishname=mysqli_real_escape_string($conn,$_POST['dishname']);
   // $hidden_price=mysqli_real_escape_string($conn,$_POST['hidden_price']);
   // $item_quantity=mysqli_real_escape_string($conn,$_POST['item_quantity']);
   // $item_price=mysqli_real_escape_string($conn,$_POST['item_price']);
   
   // $item_quantity=mysqli_real_escape_string($conn,$_POST['item_quantity']);
   // $item_price=mysqli_real_escape_string($conn,$_POST['item_price']);

    $total = 0;
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
        $item_name=$values['item_name'];
        $item_price=$values['item_price'];
        $total = $total + ($values["item_quantity"] * $values["item_price"]);
    }
echo "<div style='text-align:center;margin-top:50px;'><h1>Order is Succeeful...</h1></div>";
    $query="INSERT INTO tbl_order(food,price,qty,total,customer_contact,customer_address)
    values('$item_name','$item_price','1','$total','$customer_contact','$customer_address') ";
 $query=mysqli_query($conn,$query);

}








?>