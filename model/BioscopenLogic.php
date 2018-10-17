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

     function readBioscopen() {
       $sql = "SELECT * FROM `cinemas`";
       $stmt = $this->DataHandler->Read($sql);
       return $stmt;

     }



     function generateBioscoopOverzicht() {
       $html = '';
       $array = $this->readBioscopen();
       foreach ($array as $key => $value) {

           $html .= '<div class="col-3">

           <div class="row bioscoopItem">
             <img class="col-12 bioscoopItemImage" src="../view/images/'.$value["city"].'.jpg" alt="">
             <div class="col-1"></div>
             <span class="col-11 bioscoopNaam">'.$value["cinema_name"].'</span>
             <div class="col-1"></div>
             <span class="col-11 bioscoopProvincie">'.$value["state"].'</span>
             <div class="col-12">
             <div class="col-4 pad-0"></div>
             <div class="col-12 meerInfoButton" onclick=window.open("https://kinepolis.nl/bioscopen/'.$value["info_url"].'/info")>Meer info</div>
             <div class="col-4 pad-0"></div>
             </div>

             <div class="col-12">
             <div class="col-4 pad-0"></div>
             <div class="col-12 meerInfoButton" onclick=location.href="/bioscopen/showReserve/'.$value["cinema_id"].'">Reserveren</div>
             <div class="col-4 pad-0"></div>
             </div>
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
		$html = '';//naam achternaam datum reservatie
		$array = $this->getBioscoop($bioscoop_id);
		foreach($array as $key => $value) {
			$html .= "<label for='fname'>Bioscoop Naam</label>
            <input type='text' value='Kinepolis ".$value['city'] . "' readonly>
			<label for='fname'>Voornaam</label>
            <input type='text' name='voornaam'>
			<label for='fname'>Achternaam</label>
            <input type='text' name='achternaam'>
			<label for='fname'>Reserverings datum</label><br>
			<input type='date' name='datum'>
            <input type='submit'  name='createreserveren' value='Reserveer'>
			";
		}
		return $html;
	}

    public function ReadOeverons(){

        $sql = "SELECT page_content FROM pages";
        $stmt = $this->DataHandler->Read($sql);
        return $stmt;

 }



     public function Oeverons(){
         $array = $this->ReadOeverons();

         foreach ($array as $value){
             $overons = $value["page_content"];
             $html = "<strong> Over Ons </strong>";
              $html .= "<p>".$overons."</p> ";

         }
         return $html;
     }

     public function InsertBioscopen($cinema_name, $info_url, $street, $house_number, $postal_code, $city, $state, $car_accessibility, $ov_accessibility, $bike_accessibility,$wheelchair_accessibility,$cinema_conditions ){



         try {



             $sql = "INSERT INTO `gameplayparty`.`cinemas` (`cinema_name`, `info_url`, `street`, `house_number`, `postal_code`, `city`, `state`, `car_accessibility`,`ov_accessibility`, `bike_accessibility`,`wheelchair_accessibility`,`cinema_conditions`) VALUES ('$cinema_name', '$info_url', '$street', '$house_number', '$postal_code', '$city', '$state', '$car_accessibility', '$ov_accessibility', '$bike_accessibility', '$wheelchair_accessibility', '$cinema_conditions');";


            $stmt = $this->DataHandler->Create($sql);

         }catch (Exception $e){
             throw $e;
         }
     }






  }
?>
