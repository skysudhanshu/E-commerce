<?php
   require "include\common.php";
   $con = $_SESSION['con'];
   
   $email = mysqli_real_escape_string($con,$_POST['email']);
   
   $query = "select email from users where email = '$email'";
   $res = mysqli_query($con, $query) or die(mysqli_error($con));
   $rowCount = mysqli_num_rows($res);
   if($rowCount != 0)
   {
       //user already exists
       header('location:register.php?email_error=Already existing user');
   }
   else
   {
       $name = mysqli_real_escape_string($con,$_POST['name']);
       $password = mysqli_real_escape_string($con,$_POST['password']);
       $contact = mysqli_real_escape_string($con,$_POST['contact']);
       $city = mysqli_real_escape_string($con,$_POST['city']);
       $address = mysqli_real_escape_string($con,$_POST['address']);
       $myQuery = "insert into users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
       $queryRes = mysqli_query($con, $myQuery) or die(mysqli_error($con));
       $_SESSION['id'] = mysqli_insert_id($con);
       echo "
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
   window.close();
</script>";
   }
   
   
   
   
?>
