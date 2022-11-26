<?php

if (!$_SESSION['connected']) {
	header('Location: http://localhost/books-app/');
	die();
}

$db = new Database();

$query = "
	SELECT b.id, b.title, b.author, b.rating, b.comment
	FROM books b
	WHERE b.user_id = :user_id
";

$books = $db->query($query, ['user_id' => $_SESSION['user_id']])->fetchAll();

require 'views/books.view.php';
