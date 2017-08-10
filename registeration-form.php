<?php 
	
	session_start();

	$dbName = "edvancer";
	$dbUser = "edvancerDB";
	$dbHost = "localhost";
	$dbPass = "9xG0(.f;!UQX";

	$conn = mysql_connect($dbHost,$dbUser,$dbPass);
	$db = mysql_select_db($dbName,$conn);


	if(isset($_POST) && $_POST['reg']){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$name = $firstname . $lastname;
		$presalt = $name . $email;
		$salt = md5($presalt);

		$query = mysql_query("INSERT INTO wpe_custom_reg_users(firstname,lastname,email,phone,salt) VALUES ('$firstname','$lastname','$email','$phone','$salt')") or die(mysql_error());
		if($query){
			$_SESSION['videoWatchPermission'] == true;
			echo "1";
		}else{
			echo "0";
		}
	}

?>