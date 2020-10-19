<?php
   require'include\common.php';
   $link = $_SESSION['con'];
   $item_id = $_GET['id'];
   $user_id = $_SESSION['id'];
   $query = "DELETE from users_items where user_id = $user_id and item_id = $item_id";
   $result = mysqli_query($link, $query) or die(mysqli_error($link));
   header('location:cart.php');

?>
