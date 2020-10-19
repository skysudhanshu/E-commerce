<!DOCTYPE html>
<html>
    <head>
        <title>Success Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" href = "success.css">  
   </head>
    <body>
	<?php
          require'include\common.php';
          include'include\header.php';
          if(!isset($_SESSION['id']))
          {
              header('location:index.php');
          }
        ?> 
        <?php
           $link = $_SESSION['con'];
           $u_id = $_SESSION['id'];
           $i_id = $_GET['id'];
           $i_arr = unserialize($i_id);
           foreach($i_arr as $item)
           {
                $query = "UPDATE users_items set status = 'Confirmed' where user_id = '$u_id' and item_id = '$item'";
				$query2="DELETE from users_items where user_id = '$u_id' and item_id = '$item'";
                $res = mysqli_query($link, $query) or die(mysqli_error($link));
				$res2 = mysqli_query($link, $query2) or die(mysqli_error($link));
           }
            
           
        ?>
		<div class = "container">
		  <div class = "panel panel-default  myPanel">
		    <div class = "panel-heading">
			   <h3>Success Message</h3>
			</div>
			
			<div class = "panel-body" >
			   <h2>Your order is confirmed! <br>Thank you for shopping with us.</h2>
			</div>
			
			<div class = "panel-footer">
			   <div class = "form-group">
				    <a href = "product.php">Click here</a> to purchase any other item.
				 </div>
			</div>
		  </div>
		</div>
	 <?php
           include'include\footer.php';
         ?>	
	  
           
           
           ?>
	</body>
</html>	