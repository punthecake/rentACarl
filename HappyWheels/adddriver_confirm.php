<?php
$DriverID = $_GET['DriverID'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];


include 'connect.php';


$sqldriver= "INSERT INTO tbldriver(Driver_Firstname, Driver_Lastname)
VALUES ('$fname', '$lname')";

$querydriver= mysqli_query($connect,$sqldriver) or die (mysqli_error($connect));
header("location: drivers.php");
?>