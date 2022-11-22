<?php
$config = require($_SERVER['DOCUMENT_ROOT']."/config.php");
$db = new Database($config['database'], 'psantos', 'root');

$query = "SELECT * FROM users WHERE username=".$_POST['username']." AND password=".$_POST['password'];

try {
	$users = $db->query($query)->fetchAll();
} catch (Exception $err) {
	dd($err);
}

dd($users);
