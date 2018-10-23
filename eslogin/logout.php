<?php
	require_once "config.php";
	unset($_SESSION['access_tokeng']);
	$gClient->revokeToken();
	session_destroy();
	header('Location: http://localhost/mdl-new-shopping/index.php');
	exit();
?>
