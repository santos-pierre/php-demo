<?php
	$_SESSION['connected'] = true;
	$_SESSION['user'] = "John";
  header('Location: http://localhost:8080');

  die();
