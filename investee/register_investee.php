<?php
//including the database connection file
//include_once("connect.php");

if(isset($_POST['sub_investee'])) {
	/*$full_name = mysqli_real_escape_string($mysqli, $_POST['full_name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$business_name = mysqli_real_escape_string($mysqli, $_POST['business_name']);
	$national_id = mysqli_real_escape_string($mysqli, $_POST['national_id']);
	$kra_pin = mysqli_real_escape_string($mysqli, $_POST['kra_pin']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$retype_password = mysqli_real_escape_string($mysqli, $_POST['retype_password']);
	// checking empty fields
	if(empty($email) || empty($email)|| empty($password)|| empty($business_name)|| empty($national_id)|| empty($kra_pin)|| empty($password)|| empty($retype_password) ) {
				
		if(empty($full_name)) {
			echo "<font color='red'>full_name field is empty.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}
				
		if(empty($phone)) {
			echo "<font color='red'>phone field is empty.</font><br/>";
		}
		if(empty($business_name)) {
			echo "<font color='red'>business_name field is empty.</font><br/>";
		}
				
		if(empty($national_id)) {
			echo "<font color='red'>national_id field is empty.</font><br/>";
		}
		if(empty($kra_pin)) {
			echo "<font color='red'>kra_pin field is empty.</font><br/>";
		}
		if(empty($password)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		if(empty($retype_password)) {
			echo "<font color='red'>retype password field is empty.</font><br/>";
		}
		
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$sql ="INSERT INTO details (full_name,email,phone,business_name,national_id,kra_pin,password,retype_password) VALUES('$full_name','$email','$phone','$business_name','$national_id','$kra_pin','$password','$retype_password')";
		if (mysqli_query($mysqli, $sql)) {
    echo "registration successful";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}

		//display success message
		echo "<font color='green'>registration successful.";
	}*/
	//$_SESSION['login_user'] = 'Test';
	header("location: signin.php?message=success");
}
if(isset($_POST['sub_investor'])) {
	header("location: signin.php?message=success");
}
?>
