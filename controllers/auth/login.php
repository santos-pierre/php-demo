<?php
$_SESSION['errors'] = null;

$db = new Database();

// Chercher si l'utilisateur existe
$queryUserExist = "SELECT `username`, `password`, `id` FROM users WHERE username = :username";

$user = $db->query($queryUserExist, ['username' => $_POST['username']])->fetch();

if (!$user) {
	// Si l'uitilisateur n'existe pas envoyer une erreur dans les session
	// !! NE PAS OUBLIER D'AJOUTER session_start() DANS INDEX.PHP !! //
	$_SESSION['errors'] = ['username' => 'Bad credentials'];
	header('Location: http://localhost/books-app/login');
	die();
}

// Verification du password
$correctPassword = password_verify($_POST['password'], $user['password']);

if (!$correctPassword) {
	// Si le mot de passe n'est pas le bon
	// !! NE PAS OUBLIER D'AJOUTER session_start() DANS INDEX.PHP !! //
	$_SESSION['errors'] = ['username' => 'Bad credentials'];
	header('Location: http://localhost/books-app/login');
	die();
}

// Ajouter l'utilisateur à la session et le rediriger vers la page d'accueil
$_SESSION['connected'] = true;
$_SESSION['user_id'] = $user['id'];
header('Location: http://localhost/books-app/');
