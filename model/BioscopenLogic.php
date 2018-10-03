<?php
// ?
require 'DataHandler.php';

 class BioscopenLogic {

     function __construct(){
      $this->DataHandler = new Datahandler("mysql","localhost", "gameplayparty", "root", "");
     }

     function __destruct(){

     }



  }
?>
