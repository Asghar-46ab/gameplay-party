<?php
	require_once("model/router.php");
	//require_once("config.php");

	//define ('APP_DIR', $config['base_url']);

	//moet op deze volgorde staan!
	include 'view/header.php';
	$router = new Router();
	include 'view/footer.php';
	//
	// $uri = $_SERVER['REQUEST_URI'];
	// var_dump($uri); // Outputs: URI
?>
