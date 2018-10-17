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
             <div class="col-12 meerInfoButton" onclick=location.href="/bioscopen/showReserve/'.$value["cinema_id"].'">Reserveren</div>
           </div>

         </div>';
	
      }
      return $html;
     }
	 
	 function getBioscoop($bioscoop) { 
	   $sql = "select * from cinemas WHERE cinema_id = $bioscoop";
       $stmt = $this->DataHandler->Read($sql);
       return $stmt;
	 }
	 
	 function generateReserveOverzicht($bioscoop_id) 
	 {
		$html = '';
		$array = $this->getBioscoop($bioscoop_id);
		foreach($array as $key => $value) {
			$html .= '<div class="col-3">
					<form action="/handle_reserve_overzicht.php">
						Bioscoop: <input type="text" name="city" value="Kinepolis '.$value['city'] . '" readonly>
						
					</form>
					<p>'.$value["cinema_name"].'</p>
					<p>'.$value["state"].'</p>
			</div>
			';
		}
		return $html;
	}

  }
?>
