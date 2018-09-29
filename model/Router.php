<?php
/**
 *
 */
class Router
{
  function __construct()
  {
    //haalt url op
    $uri = $_SERVER['REQUEST_URI'];
    //haal url uit elkaar op '/'
    $exploded = explode('/',$uri);
    //filter alle lege strings uit
    $filtered = array_filter($exploded);

    $this->determineDestination($filtered);
  }

  public function determineDestination($filtered)
  {
    //$filtered[1] = gameplay-party = root project
    //$filtered[2] = gekozen pagina = php pagina in view map
    //$filtered[3] = classname      = classname en filename
    //$filtered[4] = method         = method in een class
    //$filtered[5] = parameters     = parameters voor de method
    $page = $filtered[2];

    $this->sendToDestination($page);
  }

  public function sendToDestination($page,$classname='',$method='',$params='')
  {
    $filename = 'view/' . $page . '.php';
    include($filename);

    //$class =  APP_DIR . 'controller/' . $classname . '.php';
    //require_once($class);
    //Create object and call method
    //$obj = new $classname;
    //die(call_user_func_array(array($obj, $method), $params));
  }

  public function __destruct()
  {
    //
  }
}
