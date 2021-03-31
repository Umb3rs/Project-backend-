<?php 
	if(isset($_COOKIE['userID']))
	{
		//Calling DB in order to get page working
		require_once('db.php');

		//the variable $url get the values from the "original_url" input form in index.php
		$url = $_POST['original_url'];
		//Generates a uniqID
		$uniq_id = uniqid();

		//Insert into our table the original_url and an according uniqID
		//Insert as well a default click value of 0 and a default status of 1 (activated)
		$stmt=$conn->prepare("INSERT INTO urls (original_url, uniqID, clicks, status, userID) VALUES (:original_url, :uniq_id, 0, 1," . $_COOKIE['userID'] .")");

		$stmt->bindParam(":original_url", $url);
		$stmt->bindParam(":uniq_id", $uniq_id);

		$stmt->execute();
		//Refresh the page automatically by adding at the end of index the last inserted ID in our DB
		header("location: account.php");
	}
?>

$redirect = $stmt->lastInsertId();
header("location: /?i=" . $stmt->$redirect)

header("location: /?i=" . $stmt->lastInsertId());