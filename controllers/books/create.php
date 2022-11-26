<?php
$db = new Database();

$queryCreateBook = "
	INSERT INTO books(`user_id`,`title`,`author`,`rating`,`comment`)
		VALUES (:user_id, :title, :author, :rating, :comment);
";

$params = [
	'user_id' => $_SESSION['user_id'],
	'title' => $_POST['title'],
	'author' => $_POST['author'],
	'rating' => $_POST['rating'],
	'comment' => $_POST['comment']
];

$newBook = $db->query($queryCreateBook, $params)->fetchObject();

$lastInserted = $db->connection->lastInsertId();

header("Location: http://localhost/books-app/book?id={$db->connection->lastInsertId()}");
