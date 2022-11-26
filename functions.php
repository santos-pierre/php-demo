<?php

function dd($value){
	echo '<pre>';
	var_dump($value);
	echo '</pre>';

	die();
}

function urlProject($route, $parentRoute = '/books-app'){
	return $parentRoute.$route;
}
