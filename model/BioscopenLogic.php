<?php
// ?
require 'DataHandler.php';

 class BioscopenLogic {
   private $Datahandler;
     function __construct(){
      $this->DataHandler = new Datahandler("mysql","localhost", "gameplay-party", "root", "");
     }

     function __destruct(){

     }

     function readBioscopen()
     {
       $sql = "select * from cinemas";
       $stmt = $this->DataHandler->Read($sql);
       return $stmt;

     }
     function generateBioscoopOverzicht()
     {
       $html = '';
       $array = $this->readBioscopen();
       foreach ($array as $key => $value)
       {
           $html .= '<div class="col-3">

           <div class="col-12 bioscoopItem">
             <img class="bioscoopItemImage" src="../view/images/'.$value["city"].'.jpg" alt="">
             <p>'.$value["cinema_name"].'</p>
             <p>'.$value["state"].'</p>
             <div class="col-12 meerInfoButton" onclick=window.open("https://kinepolis.nl/bioscopen/'.$value["info_url"].'/info")>Meer info</div>
             <div class="col-12 meerInfoButton">Reserveren</div>
           </div>

         </div>';

      }
      return $html;
     }

  }
?>
