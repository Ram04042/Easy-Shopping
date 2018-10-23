<?php
	session_start();



	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '494379444374127',
		'app_secret' => '9b34421a6bec64447a42d9a224ec8b5a',
		'default_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();


	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("561922321790-thp9782aiej998gsv5ptoa26gl80koub.apps.googleusercontent.com");
	$gClient->setClientSecret("pUwuv4Q6wWiEDeYT3_xVg1Sj");
	$gClient->setApplicationName("Easy Shopping");
	$gClient->setRedirectUri("http://localhost/eslogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>




