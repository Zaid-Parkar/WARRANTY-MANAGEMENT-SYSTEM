<?php
session_start();
$con = mysqli_connect('localhost','root','','test1');

if (isset($_POST['ok']))
{
	$ApplianceName = $_POST['ApplianceName'];
	$DOP = date('Y-m-d', strtotime($_POST['DOP']));
	$Details = $_POST['Details'];
    $Brand = $_POST['Brand'];
    $Category = $_POST['Category'];

	$query = "INSERT INTO appliancedetails (ApplianceName,DOP,Details,Brand,Category) values('$ApplianceName','$DOP','$Details','$Brand','$Category')";
	$query_run = mysqli_query($con, $query);

	if($query_run)
	{ 
		$_SESSION['status'] = "Appliance Added Successfully";
		header("Location: index.html");
	}
	else
	{
		$_SESSION['status'] = "Appliance Not Added";
		header("Location: index.html");
	}
} 




?>
