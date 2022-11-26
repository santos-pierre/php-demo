<?php

$uri = str_replace("/books-app", '', parse_url($_SERVER['REQUEST_URI'])['path']);

$routes =[
	'/' => 'controllers/index.php',
	'/books' => 'controllers/books.php',
	'/login' => 'controllers/login.php',
	'/book' => 'controllers/book.php',
	'/create-book' => 'controllers/create-book.php',
	'/book/create' => 'controllers/books/create.php',
	'/auth/login' => 'controllers/auth/login.php',
	'/auth/logout' => 'controllers/auth/logout.php',
];

function routeToController($uri, $routes){
	if (array_key_exists($uri, $routes)) {
		require $routes[$uri];
	}else {
		http_response_code(404);
		require "views/404.php";
		die();
	}
}

routeToController($uri, $routes);
