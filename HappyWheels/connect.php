<?php 
$connect = mysqli_connect("localhost","root","") or die (mysqli_error($connect));
$database = mysqli_select_db($connect,"car_rental_db");
?>