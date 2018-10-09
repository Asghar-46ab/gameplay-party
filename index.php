<?php

	require_once"config.php";
	require_once"model/router.php";
	define ('APP_DIR', $config['base_url']);
	$router = new Router();
	
?>
