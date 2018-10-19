<?php
     class Router
     {

       public function __construct()
       {
         // gets the current url and chops it into pieces
         $url = $_SERVER['REQUEST_URI'];
         $packets = explode('/',$url);
         //calls determineDestination()
         $this->determineDestination($packets);
       }

       public function filterPackets($packets)
       {
         // searches through the array and returns index of gameplay-party
         $keyResult = array_search("gameplay-party",$packets);
         if ($keyResult!=null)
         {
           // if index exists then removes gameplay-party from array
           unset($packets[$keyResult]);
           //removes all empty indexes in array and puts them in numerical order
           return array_values($packets);
         }
         else
         {
           return $packets;
         }
       }
        public function determineDestination($packets='')
        {
            //slices index 3 from array packets and puts it into variable params
            $params = array_slice($packets, 3);
            // calls filterPackets()
            $packets = $this->filterPackets($packets);
            //if packets are empty than set to default location.
            if (isset($packets[1]) && isset($packets[2]) && !empty($packets[1] && $packets[2]))
            {
              $this->sendToDestination($packets[1],$packets[2],$params);
            }
            else
            {
              //this sets website to page home
              $classname = "Page";
              $method = "home";
              $this->sendToDestination($classname, $method);
            }
        }

        public function sendToDestination($classname,$method,$params = [])
        {
          //sets class variable to path of controller//
          $class =  APP_DIR . '/controller/' . $classname . '.php';
          require_once($class);
          // makes instance of said class
          $obj = new $classname;
          // calls class with method and params if exists
            die(call_user_func_array(array($obj, $method), $params));
        }

        public function __destruct()
        {
        }

    }
       ?>
