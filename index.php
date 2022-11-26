<?php
session_start();

require 'functions.php';
require 'Database.php';
require 'router.php';

$id = $_GET['id'];

$db = new Database();

$query ="select * from books where id = {}";

// dd($query);

$books = $db->query($query)->fetch();

dd($books);

echo "<ul>";
foreach($books as $book){
	echo "<li>".$book['title']."</li>";
}
echo "</ul>";
