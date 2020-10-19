<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Us | The Mobile Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
            .navContainer{
                           height: 15px;
                         }
                         
            footer {
                           position: fixed;
                           padding: 10px 0;
                           background-color: #101010;
                           color:#9d9d9d;
                           bottom: 0;
                           width: 100%;
                    }
        </style>
    </head>
    <body style="background:pink;">
        <?php
           include'include/header.php';
        ?>
        <div class="container-fluid">
            <div class = "row"> 
                <div class = "col-lg-2">
                    <img src = "images\leftBanner.jpg">;
                </div>
                <div class = "col-lg-6">
                    <h2 style = "color:cornflowerblue">Connect with us:</h2>
                    <pre>Call support(24 hours)                 :   7207-666-000   </pre>
                    <pre>E-Mail support(9am to 9pm)             :   customercare@mobilestore.com   </pre>
                    
                    <div class = "panel panel-default ">
		    <div class = "panel-heading">
			 <h3 class = "text-warning">Log a service request</h3>
			</div>
			<div class = "panel-body" style = "max-height:500px; overflow-y:scroll">
			 <form>
			    <div class = "form-group">
				  
				  <input type = "text" name = "name" class = "form-control" placeholder = "Name"/>
			    </div>
				
                             <div class = "form-group">
				 
				  <input type = "email" name = "email" class = "form-control" placeholder = "E-Mail"/>
				</div>
				
				
				<div class = "form-group">
				 
				  <input type = "tel" name = "contact" class = "form-control" placeholder = "Contact number"/>
			        </div>
                             
				<div class = "form-group">
				 
				  <textarea placeholder = "Message" class = "form-control"name = "address"></textarea>
				</div>

			    
				<div class = "form-group">
				  <input type = "submit" class = "btn btn-primary" />
				</div>
                             
			 </form>
			</div>
			
		</div>
		</div>
               
                </div>
            </div>
        <?php
         include 'include/footer.php';
        ?> 
    </body>
</html>
