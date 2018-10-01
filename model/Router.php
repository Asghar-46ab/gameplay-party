<?php

	 class Router
	 {
	   public function __construct()
	   {
	     $url = $_SERVER['REQUEST_URI'];
	     $packets = explode('/',$url);
		 //var_dump($packets);
	     $this->determineDestination($packets);
	   }

		public function determineDestination($packets='' ){
			//var_dump($packets);
			// if(isset($packets[2]) && !empty($packets[2])) $classname = $packets[2];
			// else {
			// 	echo "hij is leeg";
			// }
			// var_dump($classname);
			// if (isset($packets[3]) && !empty($packets[3])) $method = $packets[3];
			// else {
			// 	echo "hij is leeg";
			// }
			$params = array_slice($packets, 4);
			if (isset($packets[2]) && isset($packets[3]) && !empty($packets[2] && $packets[3])) {
				$this->sendToDestination($packets[2],$packets[3],$params);
			}
			else {
//				echo "hij is leg";
			};

			//$params = array_slice($packets, 4);
			//$this->sendToDestination($packets[2],$packets[3],$params);
			//$this->sendToDestination($classname,$method,$params);

	    }

	    public function sendToDestination($classname,$method,$params)
	    {
	      $class =  APP_DIR . '//controller/' . $classname . '.php';
	      require_once($class);
	      // Create object and call method
	      $obj = new $classname;
	        die(call_user_func_array(array($obj, $method), $params));
	    }

	    public function __destruct()
	    {
	      # code...
	    }
	  }
	   ?>
