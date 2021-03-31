<?php 
	//Calling DB in order to get page working
	require '../db.php';
	//Connexion to the DB "url_short"
	$db = new Database("localhost", "url_short", "root");
	$db = $db->connect();

	//the variable $url get the values from the "long_url" input form in index.php
	$url = $_POST['long_url'];
	//Generates a uniqID
	$uniq_id = uniqid();

	//Insert into our table the long_url and an according uniqID
	//Insert as well a default click value of 0 and a default status of 1 (activated)
	$query = "INSERT INTO urls (long_url, uniqID, clicks, status) VALUES (:long_url, :uniq_id, 0, 1)";

	//Prepare our PDO request to DB
	$stmt = $db->prepare($query);

	$data = array(
		"long_url" => $url,
		"uniq_id" => $uniq_id
	);

	//Send our datas to the DB with PDO::execute
	$result = $stmt->execute($data);

	//Refresh the page automatically by adding at the end of index the last inserted ID in our DB
	header("location: /?i=" . $db->lastInsertId());
?>