<?php
  //require 'include\common.php';
  function check_if_added_to_cart($item_id)
  {
      $link = $_SESSION['con'];
      $user_id = $_SESSION['id'];
      $query = "select * from users_items where user_id = '$user_id' and item_id = '$item_id'";
      $query_res = mysqli_query($link, $query) or die(mysqli_error($link));
      $row = mysqli_fetch_array($query_res);
      if($row['status'] == 'Added to cart')
      {
          return 1;
      }
      else
      {
          return 0;
      }
  }
  
  
  
  
?>

