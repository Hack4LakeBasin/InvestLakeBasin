<?php
//including the database connection file
include_once("connect.php");

if(isset($_POST['Submit'])) {
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$business_name = mysqli_real_escape_string($mysqli, $_POST['business_name']);
	$national_id = mysqli_real_escape_string($mysqli, $_POST['national_id']);
	$kra_pin = mysqli_real_escape_string($mysqli, $_POST['kra_pin']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$retype_password = mysqli_real_escape_string($mysqli, $_POST['retype_password']);


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