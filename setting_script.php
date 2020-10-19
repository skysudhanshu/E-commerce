<?php
 require 'include\common.php';
 if(!isset($_SESSION['id']))
 {
     header('location:index.php');
 }
 else
 {
     $oldPass = $_POST['old'];
     $newPass = $_POST['new'];
     $cnfPass = $_POST['cnf'];
     
     
     if(strlen($cnfPass) != strlen($newPass) || $cnfPass != $newPass )
     {
         header('location:setting.php?cnf_error=Confirm password not same');
     }
     else
     {
         $link = $_SESSION['con'];
         $id = $_SESSION['id'];
         $query = "select * from users where id = '$id'";
         $result = mysqli_query($link, $query);
         $row = mysqli_fetch_array($result);
         if($row['password'] != $oldPass)
         {
             header('location:setting.php?pass_error=Old password not found');
         }
         else
         {
             $query = "UPDATE users SET password = '$newPass' where id = '$id'";
             $result = mysqli_query($link, $query);
             header('location:setting.php?pass_upd=Password updated successfully');
         }
     }
 }


