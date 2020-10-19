<!DOCTYPE html>
<html>
    <head>
        <title>Sign up Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" href = "register.css">  
		<script type = 'text/javascript'>

  function OnClose()

  {

    if(window.opener != null && !window.opener.closed) 

    {
   
       window.opener.HideModalDiv();
	   window.opener.location.href='product.php';

    }

  }

  window.onunload = OnClose;
    window.resizeTo(500, 700);

</script>

   </head>
  
        
	<div class = "container-fluid">
	  
              <div class = "col-lg-6">
                 
		 <div class = "panel panel-default ">
		    <div class = "panel-heading">
			 <h3 class = "text-warning">Register here</h3>
			</div>
			<div class = "panel-body" style = "max-height:500px; overflow-y:scroll">
			 <form action = "signup_script.php" method = "post">
			    <div class = "form-group">
				  <label for="name">Name</label>
				  <input type = "text" name = "name" class = "form-control" placeholder = "Name"/>
			    </div>
				
                             <div class = "form-group">
				  <label for="email">Email</label>
				  <input type = "email" name = "email" class = "form-control" placeholder = "E-Mail"/>
				</div>
				
				<div class = "form-group">
				  <label for="password">Password</label>
				  <input type = "password" name = "password" class = "form-control" placeholder = "Password"/>
				</div>
				
				<div class = "form-group">
				  <label for="Age">Age</label>
				  <input type = "number" name = "age" class = "form-control" placeholder = "Age" min = "18" max = "90"/>
				</div>
                             
				<div class = "form-group">
				  <label for="contact">Contact No</label>
				  <input type = "tel" name = "contact" class = "form-control" placeholder = "Contact number"/>
			        </div>
                             
                                 <div class = "form-group">
				  <label for="city">City</label>
				  <input type = "text" name = "city" class = "form-control" placeholder = "City"/>
			         </div>
                             
				<div class = "form-group">
				  <label for="address">Address</label>
				  <br>
				  <textarea placeholder = "Type your address here" class = "form-control"name = "address"></textarea>
				</div>

			    
				<div class = "form-group">
				  <center><input type = "submit" class = "btn btn-primary" /></center>
				</div>
                             <?php
                                  if(isset($_GET['email_error']))
                                  {
                                      echo'<script>alert("User email already taken!");</script>';
                               
                                  }
                                  
                                ?>
			 </form>
			</div>
			<div class = "panel-footer">
			  <h4><center>Thanking you for registering!</center></h4>
			</div>
		</div>
		</div>
	  </div>	
	
	
	</body> 
</html>	