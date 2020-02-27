<?php
$sql = "SELECT * FROM tbldriver";
include 'connect.php';

    if(isset($_POST['search'])){
        $search= $_POST['search'];
        $sql = "SELECT * FROM tbldriver
        WHERE Driver_Firstname LIKE '%$search%'";
    } else {
        $sql = "SELECT * FROM tbldriver";
    }

$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
?>

<html> 
    <head> <title> Driver Profiles </title> </head>
    <body> <br/><br/><br/><br/>
            <form class="search" method="POST" action="index.php?loadnav=searchdriver">
			<b>Search</b> <input type="text" name="search">
			<input type ="submit" name="submit" value="Go">
			</form>


            <table border=1> 
                <tr> 
                    <td> DriverID  </td> 
                    <td> Firstname </td> 
                    <td> Lastname </td> 
                    <td colspan="2"> Manage </td>
                </tr> 
            <?php
            while($r=mysqli_fetch_assoc($query))
            {
            ?>
                <tr> 
                <td> <?php echo $r['DriverID'];?></td> 
                <td> <?php echo $r['Driver_Firstname'];?></td> 
                <td> <?php echo $r['Driver_Lastname'];?></td> 
                <td> <a href="index.php?loadnav=editdriver&DriverID=<?php echo $r['DriverID'];?>"> EDIT </a> </td>
			    <td> <a href="index.php?loadnav=deletedriver&DriverID=<?php echo $r['DriverID'];?>&&Firstname=<?php echo $r['Driver_Firstname'];?>"> DELETE </a> </td>
	
                </tr>
            <?php } ?>
            <tr>
				<td colspan="5"> <a href="adddriver.php"> Driver (+) </a></td>
			</tr>
            </table> 
    </body> 

</html> 