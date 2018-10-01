<?php
	require_once("model/router.php");
	require_once("config.php");

	define ('APP_DIR', $config['base_url']);

	//moet op deze volgorde staan!
	include 'view/partials/header.php';
	$router = new Router();
	echo $content;
	include 'view/partials/footer.php';
	//
	// $uri = $_SERVER['REQUEST_URI'];
	// var_dump($uri); // Outputs: URI
?>
