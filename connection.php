
<?php

	$user = "root";
	$password = "";
	$host = "localhost";
	$db = "url_short";
	try {
		$conn = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  } catch (PDOException $e ) {
		echo "Connection à la BDD impossible : ", $e->getMessage();
		die();
	  }
?>
