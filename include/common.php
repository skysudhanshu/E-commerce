<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "store";

$con = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($con));
session_start();
$_SESSION['con'] = $con;

?>
