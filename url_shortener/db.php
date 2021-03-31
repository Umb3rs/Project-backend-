<?php
//DB declaration
class Database {
	private $host;
	private $dbname;
	private $user;
	//If your DB has a password
	//private $pass; 

	function __construct(string $host, string $dbname, string $user) {
		$this->host = $host;
		$this->dbname = $dbname;
		$this->user = $user;
		//$this->pass = $pass;
	}

	//Try to connect to DB using the variables given before
	public function connect() {
		$conn_str = "mysql:host=". $this->host .";dbname=". $this->dbname;
		//Add ". $this->pass" at the end if your DB has a password

		try {
			$conn = new PDO($conn_str, $this->user);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			//Connexion made to DB
			return $conn;
		} catch (PDOException $e) {
			//Display connexion failed if the connexion to DB hasn't work
			echo "Connection failed: " . $e->getMessage();
		}
	}
}