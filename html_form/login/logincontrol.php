<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	/*if(isset($_POST['username'])){
		echo "Yes";
	}
	else{
		echo "Not";
	}
	*/
	if(empty($username) or empty($password)){
		echo "Username or password is empty";
	}
	else{
		echo "Username : $username";
		echo "<br>";
		echo "Username : $username";
	}

?>