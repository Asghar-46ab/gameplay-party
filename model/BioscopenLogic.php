<?php
// ?
require 'DataHandler.php';

 class BioscopenLogic {
   private $Datahandler;
     function __construct(){
      $this->DataHandler = new Datahandler("mysql","localhost", "gameplayparty", "root", "");
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
           <div class="col-3"></div>
           <div class="col-6 bioscoopItem">
             <img src="../view/images/200x100-placeholder.png" alt="">
             <p>Bioscoopnaam: '.$value["cinema_name"].'</p>
             <p>Provincie: '.$value["city"].'</p>
             <div class="col-12 meerInfoButton">Meer info</div>
             <div class="col-12 meerInfoButton">Reserveren</div>
           </div>
           <div class="col-3"></div>
         </div>';

      }
      return $html;
     }

  }
?>
