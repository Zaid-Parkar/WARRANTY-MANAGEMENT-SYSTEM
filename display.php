<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test1";


$conn = mysqli_connect($servername, $username, $password, $database);

/*if (!$conn)
{
    die("Failed to connect". mysqli_connect_error());
}
else
{
    echo "Connection successfull<br>"; 
}
*/
$sql= "SELECT * FROM appliancedetails ";
$result = mysqli_query($conn, $sql);

$rows = mysqli_num_rows($result);
echo $rows;
//echo "Number of rows found in database<br>";

if($rows>0)
{
    while($tuple = mysqli_fetch_assoc($result))
    {
        echo $tuple['ApplianceName']." ".$tuple['DOP']." ".$tuple['Details']." ".$tuple['Brand']." ".$tuple['Category'];
        echo "<br>";
    }
}

?>
