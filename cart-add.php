<?php
   require 'include\common.php';
   $con = $_SESSION['con'];
   $user_id = $_SESSION['id'];
   $item_id = $_GET['id'];             //sent through url
   $query = "insert into users_items(user_id,item_id,status) values('".$user_id."','".$item_id."','Added to cart')";
   $query_res = mysqli_query($con,$query) or die(mysqli_error($con));
   header('location:product.php');
   
?>
