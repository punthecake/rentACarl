<?php 
$CustomerID = $_GET['CustomerID'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$vID=$_POST['vID'];
$IDnum=$_POST['IDnum'];
$num=$_POST['num'];
$email=$_POST['email'];

include 'connect.php';


$sql= "UPDATE tblcustomer SET
 Customer_Firstname='$fname',
 Customer_Lastname='$lname',
 Valid_ID='$vID',
 ID_Number='$IDnum',
 Contact_Number='$num',
 Email='$email'
WHERE CustomerID=$CustomerID;";

$query= mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location:customers.php");

?>