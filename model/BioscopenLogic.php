<?php
// ?
require 'DataHandler.php';

 class BioscopenLogic {

     function __construct(){
      $this->DataHandler = new Datahandler("mysql","localhost", "gameplayparty", "root", "");
     }

     function __destruct(){

     }


 public function data(){
     $sql = "select cinema_name from cinemas";

     $stmt= $this->DataHandler->Read($sql);

     return $stmt;

 }

 public function bbb(){



 }



  }
?>
