<?php
$CarID = $_GET['CarID'];
$sql = "SELECT * FROM tblcars WHERE CarID = $CarID";
include 'connect.php';
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
$r = mysqli_fetch_assoc($query);
?>
<html>
<head>
	<title> Edit Car </title>
</head>
<body>
	<br/><br/><br/><br/><br/>
	<form method="POST" action="editcar_confirm.php?CarID=<?php echo $CarID;?>"> 
		<h1> Car Addition </h1> <br>
		Model of the Car: 
		<input type="text" name="model" placeholder="" value="<?php echo $r['Car_Model'];?>"/required> <br/>
		Year of manufacturing: 
		<input type="number" name="year" placeholder="" value="<?php echo $r['Car_Year'];?>"/required> <br/>
        Manufacturer: 
		<input type="text" name="manufacturer" placeholder="" value="<?php echo $r['Car_Make'];?>"/required> <br/>
        Type: 
        <input type="text" name="type" placeholder="" value="<?php echo $r['Car_Type'];?>"/required> <br/>
        Color:  
		<input type="text" name="color" placeholder="" value="<?php echo $r['Car_Color'];?>"/required> <br/>
        Plate Number: 
		<input type="text" name="plate" placeholder="" value="<?php echo $r['Car_Plate_Number'];?>"/required> <br/>
        
			<input type="submit" name="submit" name="Submit">
	</form>


</body>
</html>