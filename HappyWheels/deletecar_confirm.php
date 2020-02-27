<?php
$CarID = $_GET['CarID'];
include 'connect.php';
$sql = "DELETE FROM tblcars WHERE CarID = $CarID";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location: car.php");
?>