<?php

$db = new Database();

$query = "
	SELECT b.id, b.title, b.author, b.rating, b.comment, u.username
	FROM books b
	JOIN users u ON b.user_id = u.id;
";

$books = $db->query($query)->fetchAll();

require 'views/index.view.php';
