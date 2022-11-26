<?php

// Si l'utilisateur est connecté => rediriger vers la page d'acceuil
if ($_SESSION['connected']) {
	header('Location: http://localhost/books-app/');
}

require 'views/login.view.php';
