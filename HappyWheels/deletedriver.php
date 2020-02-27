<?php 
$DriverID = $_GET['DriverID'];
$fname = $_GET['Firstname'];
?>
<html>
<head>
	<title> Delete Driver </title>
</head>
        <body>
		<br/><br/><br/><br/><br/>
        Are you sure you want to let go of  <?php echo "$fname";?> with an ID of  <?php echo "$DriverID";?> ?
        </body>
        
    <form action="deletedriver_confirm.php?DriverID=<?php echo $DriverID; ?>" method="POST">
	<input type="Submit" name="Submit" value="Delete">
    </form>
    
</html>