<?php
$sql = "SELECT * FROM tblcars";
include 'connect.php';

    if(isset($_POST['search'])){
        $search= $_POST['search'];
        $sql = "SELECT * FROM tblcars
        WHERE Car_Model LIKE '%$search%'";
    } else {
        $sql = "SELECT * FROM tblcars";
    }

$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
?>

<html> 
    <head> <title> Car Profiles </title> </head>
    <body> <br/><br/><br/><br/>
            <form class="search" method="POST" action="index.php?loadnav=searchcar">
			<b>Search</b> <input type="text" name="search">
			<input type ="submit" name="submit" value="Go">
			</form>


            <table border=1> 
                <tr> 
                    <td> Car ID </td> 
                    <td> Model </td> 
                    <td> Year</td> 
                    <td> Manufacturer </td> 
                    <td> Type </td> 
                    <td> Color </td> 
                    <td> Plate # </td> 
                    <td> Availability </td> 
                    <td colspan="2"> Manage </td>
                </tr> 
            <?php
            while($r=mysqli_fetch_assoc($query))
            {
            ?>
                <tr> 
                <td> <?php echo $r['CarID'];?></td> 
                <td> <?php echo $r['Car_Model'];?></td> 
                <td> <?php echo $r['Car_Year'];?></td> 
                <td> <?php echo $r['Car_Make'];?></td> 
                <td> <?php echo $r['Car_Type'];?></td> 
                <td> <?php echo $r['Car_Color'];?></td> 
                <td> <?php echo $r['Car_Plate_Number'];?></td> 
                <td> <?php echo $r['Car_Availability'];?></td> 
                <td> <a href="index.php?loadnav=editcar&CarID=<?php echo $r['CarID'];?>"> EDIT </a> </td>
			    <td> <a href="index.php?loadnav=deletecar&CarID=<?php echo $r['CarID'];?>&&Model=<?php echo $r['Car_Model'];?>"> DELETE </a> </td>
	
                </tr>
            <?php } ?>
            <tr>
				<td colspan="9"> <a href="index.php?loadnav=addcar"> CAR (+) </a></td>
			</tr>
            </table> 
    </body> 

</html> 