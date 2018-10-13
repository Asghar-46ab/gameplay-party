<?php
     class Router
     {
       public function __construct()
       {
         $url = $_SERVER['REQUEST_URI'];
         $packets = explode('/',$url);
         $this->determineDestination($packets);
       }

       public function filterPackets($packets)
       {
         $keyResult = array_search("gameplay-party",$packets);
         if ($keyResult!=null)
         {
           unset($packets[$keyResult]);
           return array_values($packets);
         }
         else
         {
           return $packets;
         }
       }
        public function determineDestination($packets='')
        {
            $params = array_slice($packets, 3);
            $packets = $this->filterPackets($packets);
            if (isset($packets[1]) && isset($packets[2]) && !empty($packets[1] && $packets[2]))
            {
              $this->sendToDestination($packets[1],$packets[2],$params);
            }
            else
            {
              $classname = "Page";
              $method = "home";
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
