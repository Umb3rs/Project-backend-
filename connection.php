
<?php

session_start ();

$dbhost ='localhost';
$username = 'root';
$password = ''; 
$db = 'rculr';
$connection = mysqli_connect($dbhost, $username, $password, $db);

if ($connection){
	echo "connection good";
}


if (!$connection) {
	echo "La connection à échoué";
}

