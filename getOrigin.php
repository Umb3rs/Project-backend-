<?php
	//Calling DB in order to get page working
	require_once('connection.php');

	//Get the uniqID displayed after the "link=" in our shortlink url
	$uniqid = $_GET['link'];

	//Get the entry where uniqID column equals to the uniqID after our "link="
	//Update the number of clicks on the link with corresponding uniqID of 1
	$stmt=$conn->prepare("SELECT * FROM urls WHERE uniqID = :uniqid; UPDATE urls SET clicks = clicks + 1 WHERE uniqID = :uniqid");
    $stmt->bindParam(":uniqid", $uniqid);
    $stmt->execute();

	//Get our original_link from DB
	$url = $stmt->fetch(PDO::FETCH_ASSOC);

	//Send us back to the original link
	header("location: " . $url['long_url']);
?>