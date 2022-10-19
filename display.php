<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="5"><h2>Appliance Details</h2></th> 
		</tr> 
			  <th> Appliance Name </th> 
			  <th> DOP </th> 
			  <th> Details </th> 
			  <th> Brand </th>
              <th> Category </th> 
			  
		</tr> 
		
		<?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "test1";
        
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        $sql= "SELECT * FROM appliancedetails ";
        $result = mysqli_query($conn, $sql);

        $rows = mysqli_num_rows($result);
        //echo $rows;
//echo "Number of rows found in database<br>";

    if($rows>0)
    {

        while($tuple=mysqli_fetch_assoc($result)) 
		{ 
            
		?> 
		<tr> <td><?php echo $tuple['ApplianceName']; ?></td> 
		<td><?php echo $tuple['DOP']; ?></td> 
		<td><?php echo $tuple['Details']; ?></td> 
		<td><?php echo $tuple['Brand']; ?></td>
        <td><?php echo $tuple['Category']; ?></td> 
		</tr> 
	<?php 
        }
    } 
    ?> 
    
	</table> 
	</body> 
</html>






