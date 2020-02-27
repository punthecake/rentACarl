<?php
$DriverID = $_GET['DriverID'];
$sql = "SELECT * FROM tbldriver WHERE DriverID = $DriverID";
include 'connect.php';
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
$r = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Edit Driver  </title>
</head>
<body>
<br/>
<br/>
<br/>
<br/>
	<form method="POST" action="editdriver_confirm.php?DriverID=<?php echo $DriverID;?>"> 
		<h1> Edit Driver </h1> <br>
		Firstname:
		<input type="text" name="fname" placeholder="" value="<?php echo $r['Driver_Firstname'];?>"/required> <br/>
        Lastname:
		<input type="text" name="lname" placeholder="" value="<?php echo $r['Driver_Lastname'];?>" /required> <br/>
        
			<input type="submit" name="submit" name="Submit">
	</form>

