<?php
	$name = $_POST["name"];
	$pass = $_POST["password"];
	$email = $_POST["emailAddres"];
	$mess = $_POST["message"];


	if(trim($name) == "" && strlen(trim($name)) <= 1) {
		echo "Name can't be absent";
	} else if(strlen(trim($name)) <= 2) {
		echo "Name can't be so short";
	} else if(trim($email) == "") {
		echo "Email can't be absent";
	} else {
		//$pass = md5($pass);
		//echo "<h1>All Data:</h1><p>$name</p><p>$email</p><p>$pass</p><p>$_POST[message]</p>";

		$_POST["password"] = md5($pass);
		echo "<h1>All Data: </h1>";

		foreach($_POST as $key => $value) {
			echo "<p>$key : $value</p>";
		}
	}