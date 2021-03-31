<?php
	if(isset($_COOKIE['userID'])){
		setcookie('userID', null, time()-1,"/");
	}

    header("location: homepage.php");
?>