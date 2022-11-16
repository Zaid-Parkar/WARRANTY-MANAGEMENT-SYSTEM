<?php
    
    $Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Message = $_POST['Message'];

	// Database connection
	$conn = mysqli_connect('localhost','root','','test1');
	$name= "INSERT into contactus(`Name`,`Email`,`Message`) values('$Name','$Email','$Message')";
    $execute = mysqli_query($conn,$name);
    
	if($execute){
        
		header("Location:index.html");
		
    }
	



?>
