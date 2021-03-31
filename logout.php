<?php
	session_start();

	if(isset($_COOKIE['userID'])){
		setcookie('userID', null, time()-1,"/");
	}

	session_destroy();

    header("location: homepage.php");
	
	exit();
?>