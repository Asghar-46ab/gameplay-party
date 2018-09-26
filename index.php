<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>mvc_router</title>
</head>
<body>
	<?php
		require_once("model/router.php");
		require_once("config.php")
		define ('APP_DIR', $config['base_url']);

		 $router = new Router();
	?>
</body>
</html>
