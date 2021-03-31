<?php 
	if(isset($_COOKIE['userID']))
	{
		//Calling DB in order to get page working
		require_once('../connection.php');

		//the variable $url get the values from the "long_url" input form in index.php
		$url = $_POST['long_url'];
		//Generates a uniqID
		$uniq_id = uniqid();

		//Insert into our table the long_url and an according uniqID
		//Insert as well a default click value of 0 and a default status of 1 (activated)
		$stmt=$conn->prepare("INSERT INTO urls (long_url, uniqID, clicks, status, userID) VALUES (:long_url, :uniq_id, 0, 1," . $_COOKIE['userID'] .")");

		$stmt->bindParam(":long_url", $url);
		$stmt->bindParam(":uniq_id", $uniq_id);

		$stmt->execute();

		//Refresh the page automatically by adding at the end of index the last inserted ID in our DB
		header("location: /?i=" . $stmt->lastInsertId());
	}
?>

$redirect = $stmt->lastInsertId();
header("location: /?i=" . $stmt->$redirect)

header("location: /?i=" . $stmt->lastInsertId());