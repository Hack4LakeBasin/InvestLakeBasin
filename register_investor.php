<?php
//including the database connection file
include_once("connect.php");

if(isset($_POST['Submit'])) {	
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	
	// checking empty fields
	if(empty($email) || empty($password) ) {
				
		if(empty($email)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}
		if(empty($password)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$sql ="INSERT INTO details (email,password) VALUES('$email','$password')";
		if (mysqli_query($mysqli, $sql)) {
	echo "registration successful";
	 header("location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}

		//display success message
		echo "<font color='green'>registration successful.";
	}
}
?>
