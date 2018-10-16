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

           <div class="row bioscoopItem">
             <img class="col-12 bioscoopItemImage" src="../view/images/'.$value["city"].'.jpg" alt="">
             <div class="col-1"></div>
             <span class="col-11 bioscoopNaam">'.$value["cinema_name"].'</span>
             <div class="col-1"></div>
             <span class="col-11 bioscoopProvincie">'.$value["state"].'</span>
             <div class="col-12">
             <div class="col-4"></div>
             <div class="col-4 meerInfoButton" onclick=window.open("https://kinepolis.nl/bioscopen/'.$value["info_url"].'/info")>Meer info</div>
             <div class="col-4"></div>
             </div>

             <div class="col-12">
             <div class="col-4"></div>
             <div class="col-4 meerInfoButton">Reserveren</div>
             <div class="col-4"></div>
             </div>
           </div>

         </div>';

      }
      return $html;
     }

  }
?>
