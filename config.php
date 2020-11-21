<?php 
//login to mysql and access the database
$hostname = "localhost";
$username = "root";
$password = "password";
$db = "news";
//connect to the databse
$conn = mysqli_connect($hostname, $username, $password,$db);
if (mysqli_connect_errno()) die ("Fital Error");
?>