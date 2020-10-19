<?php
  require 'include\common.php';
 
  $con = $_SESSION['con'];
  
  $temp_email = $_POST['email'];
  $temp_pass = $_POST['password'];
  $email = mysqli_real_escape_string($con,$temp_email);
  $password = mysqli_real_escape_string($con,$temp_pass);
  $query = "select * from users where email = '$email' and password = '$password'";
  $query_result = mysqli_query($con,$query) or die(mysqli_error($con));
  $rowCount = mysqli_num_rows($query_result);
  $row = mysqli_fetch_array($query_result);
  if($rowCount == 0)
  {
      header('location:login.php?error=User not found');
  }
  else
  {
      $_SESSION['id'] = $row['id'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['contact'] = $row['contact'];
      $_SESSION['address'] = $row['address'];
      $_SESSION['city'] = $row['city'];
      echo "Login Successfull : Now you can Shop<script type = 'text/javascript'>

  function OnClose()

  {

    if(window.opener != null && !window.opener.closed) 

    {
   
       window.opener.HideModalDiv();
	   window.opener.location.href='product.php';
	

    }

  }

  window.onunload = OnClose;
     window.close();

</script>";
  }
  
  
?>


