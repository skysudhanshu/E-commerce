<!DOCTYPE html>
<html>
    <head>
        <title>Settings page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" href = "setting.css">  
   </head>
    <body style="background:pink;">
	 
        <?php
          require 'include\common.php';
          include 'include\header.php';
          
        ?>
		<div class = "container" >
		  <div class = "panel panel-default  myPanel" >
		    <div class = "panel-heading" style="background:pink;">
			   <h3>Change Password</h3>
			</div>
			
			<div class = "panel-body" style="background:pink;" >
			   <form action = "setting_script.php" action = 'post' >
			     <div class = "form-group">
                                    <label for="old">Old Password</label>
				    <input type = "password" name = "old" class = "form-control" placeholder = "Old Password"/>
				 </div>
				 
				 <div class = "form-group">
                                     <label for="new">New Password</label>
				    <input type = "password" name = "new" class = "form-control" placeholder = "New Password"/>
				 </div>
				 
				 <div class = "form-group">
                                     <label for="cnf">Confirm Password</label>
				    <input type = "password" name = "cnf" class = "form-control" placeholder = "Confirm Password"/>
				 </div>
				 
			   </form>
			</div>
			
			<div class = "panel-footer" style="background:pink;">
			  <form  action = "setting_script.php" action = 'post'>
                            <div class = "form-group" style="background:pink;">
				    <input type = "submit" class = "btn btn-primary" value = "Change"/>
		            </div>
                          </form>    
			</div>
                      <?php
                        $flag = 0;
                        if(isset($_GET['cnf_error']))
                        {
                         $flag = 0;
                         echo'<script>cnfFunction();</script>';
                      ?>
                      
                      <script>
                                function cnfFunction() {
                                                         alert("New and confirm password are not same!");
                                                       }
                      </script>
                      <?php
                        }
                        elseif(isset($_GET['pass_error']))
                        {
                            $flag = 0;
                            echo'<script>passFunction();</script>';
                      ?>
                      
                      <script>
                                function passFunction() {
                                                         alert("Old Password not matching!");
                                                       }
                      </script>
                      <?php
                        }
                        elseif(isset($_GET['pass_upd']))
                        {
                            $flag = 1;
                            echo'<script>passFunction();</script>';
                      ?>
                      
                      <script>
                             function passFunction() {
                                                         alert("Password updated succesfully!");
                                                     }
                      </script>
                      <?php
                        }
                        if($flag == 1)
                        {
                            header('location:product.php');
                        }
                      ?>
                      
		  </div>
                    
		</div>
		<?php
                   include 'include\footer.php';
                ?>
	</body>
	
</html>	