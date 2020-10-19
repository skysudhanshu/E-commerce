<!DOCTYPE html>
<html>
    <head>
        <title>My Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" href = "cart.css">  
   </head>
    <body style="background:pink;">
	 
        <?php
           require 'include\common.php';
        ?> 
        <?php
            if(!isset($_SESSION['id']))
            {
                header('location:login.php');
            }
                       
            $con = $_SESSION['con'];
            $id = $_SESSION['id'];
            $query = "Select * from users_items INNER JOIN items ON users_items.user_id = $id and users_items.item_id = items.id";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rowCount = mysqli_num_rows($result);
            $sum = 0;
            $id_arr = array();
            if($rowCount == 0)
            {
              echo'<script>alert("Add items to the cart first!");</script>'; 
            }
            else
            {
                while($row = mysqli_fetch_array($result))
                {
                    $id_arr[] = $row['id'];
                    $sum = $sum + $row['price'];
                }
                
            }
            
            ?>
            <?php
                include 'include\header.php';        
            ?>
        
		<div class = "container">
		  <table class = "table table-stripped table-hover table-responsive table-bordered">
		    <tr>
			  <th>Item number</th>
			  <th>Item name</th>
			  <th>Price</th>
			  <th></th>
			</tr>
			
            <?php
              foreach($id_arr as $itemId)
              {
                  $query2 = "select * from items where id='$itemId'";
                  $queryRes = mysqli_query($con, $query2) or die(mysqli_error($con));
                  $item_row = mysqli_fetch_array($queryRes);
                  //$sum = $sum + $row['price'];
                 
            ?>    
                  <tr>      
                  <td> <?php echo$item_row['id']; echo"<a href='cart-remove.php?id={$item_row['id']}' class='remove_item_link'> Remove</a>"?> </td>
		  <td> <?php echo$item_row['name']; ?> </td>
		  <td> <?php echo$item_row['price']; ?> </td>
		  <td>          </td>
	          </tr>
              <?php 
              }
              ?>    
                  
	     <tr>
		 <td>          </td>
		 <td> Total </td>
		 <td> Rs. <?php echo$sum;?></td>
                 <td><center><?php $idString = serialize($id_arr); echo"<a href = 'success.php?id={$idString}' style = 'color:white; text-decoration:none;'><button class = 'btn btn-primary'>Confirm Order</button></a>" ?></center></td>
	     </tr>
		  </table>
		</div>
		<?php
                    include 'include\footer.php';
                ?>
		
       
	</body>
</html>	