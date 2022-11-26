<?php
class Database {
	public $connection;

	public function __construct($username = 'root', $password = 'root'){
		$dsn="mysql:host=localhost;ports=3306;dbname=books-app;charser=utf8mb4";

		$this->connection = new PDO($dsn, $username, $password, [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);
	}

	public function query($query, $params = []) {

		$statement = $this->connection->prepare($query);

		$statement->execute($params);

		return $statement;
	}
}
