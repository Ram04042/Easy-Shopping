<?php
	require_once "config.php";
	unset($_SESSION['access_token']);
	session_destroy();
	header('Location: eslogin.php');
	exit();
?>


