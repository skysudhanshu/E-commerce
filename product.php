<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" href = "product.css">  
   </head>
    <body style="background:pink;">
	<div id = "divBackground" style="position: fixed; z-index: 999; height: 100%; width: 100%; top: 0; left:0; background-color: Black; filter: alpha(opacity=60); opacity: 0.6; -moz-opacity: 0.8;display:none">

</div>
	<?php
           require 'include\common.php';
           include 'include\header.php';
        ?> 
         <?php
           include 'check_if_added.php';
         ?>
        
		<div class = "container">
		   <div class = "jumbotron">
		     <b><h2>Welcome to our Lifestyle store!</h2></b>
			 <h5>We have the best cameras,shirts and watches for you.No need to hunt around.We have all in one place.</h5>
		   </div>
		</div>
		<div class = "container">
		  <div class = "row">
		    <div class = "col-lg-2">
			  <div class ="thumbnail thumbs">
                              <img src = "images/galaxynote8.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Samsung Galaxy Note 8</h3></center>
				  <center><p>Price:Rs.96000.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(1))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled  style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=1" value = "add" name = "add" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" >Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
                                </div>
			  </div>
			</div>
			<div class = "col-lg-2 col-lg-offset-1">
			  <div class ="thumbnail thumbs">
                              <img src = "images/galaxys9plus.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Samsung Galaxy S9 Plus</h3></center>
				  <center><p>Price:Rs.70000.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(2))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=2" value = "add" name = "add" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary">Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
				</div>
			  </div>
			</div>
			<div class = "col-lg-2 col-lg-offset-1">
			   <div class ="thumbnail thumbs">
                               <img src = "images/samsungj8.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Samsung Galaxy J8</h3></center>
				  <center><p>Price:Rs.45000.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(3))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=3" value = "add" name = "add" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary">Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
				</div>
			  </div>
			</div>
			<div class = "col-lg-2 col-lg-offset-1">
			   <div class ="thumbnail thumbs">
                               <img src = "images/iphone_xr.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Apple Iphone XR</h3></center>
				  <center><p>Price:Rs.150000.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(4))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled  style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=4" value = "add" name = "add" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary">Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<div class = "container">
		  <div class = "row">
		    <div class = "col-lg-2">
			  <div class ="thumbnail thumbs">
                              <img src = "images/iphone_x.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Apple Iphone X</h3></center>
				  <center><p>Price:Rs.130000.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(5))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=5" value = "add" name = "add"  style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary">Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
				</div>
			  </div>
			</div>
			<div class = "col-lg-2 col-lg-offset-1">
			  <div class ="thumbnail thumbs">
                              <img src = "images/iphone8.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Apple Iphone 7 Plus</h3></center>
				  <center><p>Price:Rs.65000.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(6))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=6" value = "add" name = "add" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary">Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
				</div>
			  </div>
			</div>
			<div class = "col-lg-2 col-lg-offset-1">
			   <div class ="thumbnail thumbs">
                               <img src = "images/huaweip10.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Huawei P10 Plus</h3></center>
				  <center><p>Price:Rs.25000.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(7))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=7" value = "add" name = "add" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary">Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
				</div>
			  </div>
			</div>
			<div class = "col-lg-2 col-lg-offset-1">
			   <div class ="thumbnail thumbs">
                               <img src = "images/redmi_5.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Redmi Note 5 Pro</h3></center>
				  <center><p>Price:Rs.15000.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(8))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=8" value = "add" name = "add" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary">Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	    
		<div class = "container">
		  <div class = "row">
		    <div class = "col-lg-2">
			  <div class ="thumbnail thumbs">
                              <img src = "images/mi_a2.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Mi A2</h3></center>
				  <center><p>Price:Rs.12000.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(9))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=9" value = "add" name = "add" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary">Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
				</div>
			  </div>
			</div>
			<div class = "col-lg-2 col-lg-offset-1">
			  <div class ="thumbnail thumbs">
                              <img src = "images/motorolag4plus.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Motorola G4 Plus</h3></center>
				  <center><p>Price:Rs.11000.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(10))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=10" value = "add" name = "add" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary">Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
				</div>
			  </div>
			</div>
			<div class = "col-lg-2 col-lg-offset-1">
			   <div class ="thumbnail thumbs">
                               <img src = "images/nokia.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Nokia 5.1 Plus</h3></center>
				  <center><p>Price:Rs.9900.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(11))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=11" value = "add" name = "add" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary">Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
				</div>
			  </div>
			</div>
			<div class = "col-lg-2 col-lg-offset-1">
			   <div class ="thumbnail thumbs">
                               <img src = "images/huaweip10lite.jpg" class = "img-thumbnail img-responsive"/>
				<div class = "caption">
				  <center><h3>Huawei P10 Lite</h3></center>
				  <center><p>Price:Rs.18000.00</p></center>
                                  <?php
                                     if(!isset($_SESSION['id']))         //logged out user
                                     {
                                  ?>
                                  <center><a href = "#" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary" onclick="loginpopup();">Add to cart</button></a></center>
				   <?php
                                     }
                                     else
                                     {
                                         //logged in users
                                         if(check_if_added_to_cart(12))
                                         {
                                             
                                    ?>
                                  <center><button type = "button" class = "btn btn-primary" disabled style="text-decoration: none; color: white;">Add to cart</button></center>
                                  <center><p>Added to cart</p></center>
                                    <?php
                                         }
                                         else
                                         {
                                      
                                    ?>
                                  <center><a href = "cart-add.php?id=12" value = "add" name = "add" style="text-decoration: none; color: white;"><button type = "button" class = "btn btn-primary">Add to cart</button></a></center>
                             
                                    <?php
                                         }
                                         
                                         
                                     }
                                     
                                   ?>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	    
		<?php
                  include'include\footer.php';
                ?>
  	</body>
</html>	