<?php
	//Calling DB in order to get page working
	require '../db.php';

	//Connexion to the DB "url_short"
	$db = new Database("localhost", "url_short", "root");
	$db = $db->connect();

	//Get the uniqID displayed after the "link=" in our shortlink url
	$uniqid = $_GET['link'];

	//Get the entry where uniqID column equals to the uniqID after our "link="
	//Update the number of clicks on the link with corresponding uniqID of 1
	$query = "SELECT * FROM urls WHERE uniqID = :uniqid; UPDATE urls SET clicks = clicks + 1 WHERE uniqID = :uniqid";

	//Prepare our PDO request to DB
	$stmt = $db->prepare($query);
	
	$params = array(
		"uniqid" => $uniqid
	);

	//Send our datas to the DB with PDO::execute
	$stmt->execute($params);

	//Get our original_link from DB
	$url = $stmt->fetch();

	//Send us back to the original link
	header("location: " . $url['long_url']);
?>