<?php
     class Router
     {
       public function __construct()
       {
         $url = $_SERVER['REQUEST_URI'];
         $packets = explode('/',$url);
        //  var_dump($packets);
         $this->determineDestination($packets);
       }

        public function determineDestination($packets=''){
            $params = array_slice($packets, 3);
            if (isset($packets[1]) && isset($packets[2]) && !empty($packets[1] && $packets[2])) {
                $this->sendToDestination($packets[1],$packets[2],$params);
            }
            else {
              $classname = "Page";
              $method = "home";

              $classname = $classname;
              $this->sendToDestination($classname, $method);        
            }
          }

        public function sendToDestination($classname,$method,$params = [])
        {
          $class =  APP_DIR . '/controller/' . $classname . '.php';
          require_once($class);
          $obj = new $classname;
            die(call_user_func_array(array($obj, $method), $params));
        }

        public function __destruct()
        {
        }
      
    }
       ?>
