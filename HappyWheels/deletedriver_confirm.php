<?php
$DriverID = $_GET['DriverID'];
include 'connect.php';
$sql = "DELETE FROM tbldriver WHERE DriverID = $DriverID";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location: drivers.php");
?>