<?php
$CustomerID = $_GET['CustomerID'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$vID=$_POST['vID'];
$IDnum=$_POST['IDnum'];
$num=$_POST['num'];
$email=$_POST['email'];


include 'connect.php';


$sqlcustomer= "INSERT INTO tblcustomer(Customer_Firstname, Customer_Lastname, Valid_ID, ID_Number, Contact_Number, Email)
VALUES ('$fname', '$lname', '$vID', '$IDnum', '$num', '$email')";

$querycustomer= mysqli_query($connect,$sqlcustomer) or die (mysqli_error($connect));
header("location: customers.php");
?>