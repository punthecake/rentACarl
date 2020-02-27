<?php 
$CustomerID = $_GET['CustomerID'];
$fname = $_GET['Firstname'];
?>

<html>
<head>
	<title> Delete Customer</title>
</head>
        <body>
        Are you sure you want to delete the record of <?php echo "$fname";?> with an ID of  <?php echo "$CustomerID";?> ?
        </body>
        
    <form action="deletecustomer_confirm.php?CustomerID=<?php echo $CustomerID; ?>" method="POST">
	<input type="Submit" name="Submit" value="Delete">
    </form>
    
</html>