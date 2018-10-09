<?php

	require_once "config.php";
	require_once "model/Router.php";
	define ('APP_DIR', $config['base_url']);
	$router = new Router();
	
?>
