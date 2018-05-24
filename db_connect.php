<?php
$hostname="localhost";
$username="root";
$password="";
$database="admin";
$dbcon=mysqli_connect($hostname,$username,$password,$database);
if(!$dbcon)
{
die("connection failed:" . mysqli_connect_error());
}
?>