<?php

$db = new Database();

$query = "
	SELECT b.id, b.title, b.author, b.rating, b.comment, u.username
	FROM books b
	JOIN users u ON b.user_id = u.id
	WHERE b.id = :id;
";

$params = [
	'id' => $_GET['id']
];

$book= $db->query($query, $params)->fetch();

require 'views/book.view.php';
