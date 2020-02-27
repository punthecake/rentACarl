<?php
$CustomerID = $_GET['CustomerID'];
include 'connect.php';
$sql = "DELETE FROM tblcustomer WHERE CustomerID = $CustomerID";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location: customers.php");
?>