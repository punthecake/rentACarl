<?php 
$DriverID = $_GET['DriverID'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

include 'connect.php';


$sql= "UPDATE tblDriver SET
 Driver_Firstname='$fname',
 Driver_Lastname='$lname'
WHERE DriverID=$DriverID;";

$query= mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location: index.php?loadnav=drivers");

?>