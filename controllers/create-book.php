<?php
// Si l'utilisateur n'est pas connecté => redirigé
if (!$_SESSION['connected']) {
	header('Location: http://localhost/books-app/');
	die();
}

require 'views/books-create.view.php';
