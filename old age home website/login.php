<?php
	if(isset($_POST['submit'])){
		$un=$_POST['username'];
		$pw=$_POST['password'];
		if($un=='username' && $pw=='password') {
			header("C:\Users\DIVYA G NAIK\Desktop\final");
			exit();
		}
		else
			echo_"Invalid username/password";
	}
?>
		