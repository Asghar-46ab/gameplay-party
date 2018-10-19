<?php
// ?
require 'DataHandler.php';

	/**
	 * The class which is responsible for cinema logic.
	 */
	class CinemaLogic {

		/**
		 * The data handler of the cinema.
		 */
		private $Datahandler;

			/**
			 * Constructs a new cinema logic by initializing the data handler.
			 */
			function __construct()
			{
			$this->DataHandler = new Datahandler("mysql","localhost", "gameplay-party", "root", "");
			}

			function __destruct()
			{
			}

			/**
			 * Selects all cinemas from the database.
			 * @return the query that returns all the cinemas.
			 */
			function readCinemas() 
			{
				$sql = "SELECT * FROM `cinemas`";
				$stmt = $this->DataHandler->Read($sql);
				return $stmt;
			}

			/**
			 * Validates the user by checking if the input is valid.
			 * @username	the username this user is going by.
			 * @password	the password this user is going by.
			 * @return	{@code true} if the user is valid, {@code false} otherwise.
			 */
			function checkUser($username, $password) 
			{
				$sql = "SELECT * FROM users";
				$stmt = $this->DataHandler->Read($sql);
			
				$correct = false;
				foreach ($stmt as $key => $value) {
					if($value['user_name'] == $username && $value['password'] == $password) {
						$correct = true;
						break;
					}
				}
			
				if($correct) {
					header('Location: http://localhost/Inlog/Readactie');
				} else {
					echo "Inlog gegevens zijn onjuist";
				}
				return $correct;
			}

			/**
			 * Generates the cinema overview by constructing the html code and all its values.
			 * @return	a constructed html.
			 */
			function generateCinemaOverview() 
			{
				$html = '';
				$array = $this->readCinemas();
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
						<div class="col-12 meerInfoButton" onclick=location.href="/cinema/showReservation/'.$value["cinema_id"].'">Reserveren</div>
						<div class="col-4 pad-0"></div>
						</div>
					</div>

					</div>';
		
				}
				return $html;
			}
		 
			/**
			 * Gets a specific cinema from the database with the {@code cinema_id} that was supplied.
			 */
			function getCinema($cinema_id) { 
				$sql = "select * from cinemas WHERE cinema_id = $cinema_id";
				$stmt = $this->DataHandler->Read($sql);
				return $stmt;
			}
		 
			/**
			 * Generates the reservation overview with the {@code cinema_id} that was supplied by constructing the html code and all its values.
			 * @return	a constructed html.
			 */
			function generateReservationOverview($cinema_id) 
			{
				$html = '';//naam achternaam datum reservatie
				$array = $this->getCinema($cinema_id);
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

			/**
			 * Selects the page content from the pages database.
			 * @return	the result of the query that was sent.
			 */
			public function ReadOeverons()
			{
				$sql = "SELECT page_content FROM pages";
				$stmt = $this->DataHandler->Read($sql);
				return $stmt;
			}

			/**
			 * Constructs the over ons page.
			 * @return the constructed html page.
			 */
			public function Oeverons(){
				$array = $this->ReadOeverons();

				foreach ($array as $value){
					$overons = $value["page_content"];
					$html = "<strong> Over Ons </strong>";
					$html .= "<p>".$overons."</p> ";

				}
				return $html;
			}

			/**
			 * Inserts a new cinema to the database.
			 * @cinema_name					the name of the cinema.
			 * @info_url					the info url of the cinema.
			 * @street						the street location of the cinema.
			 * @house_numer					the house number of the cinema.
			 * @postal_code					the postal code of the cinema.
			 * @city						the city of the cinema.
			 * @state						the state the cinema is located at.
			 * @car_accessibility			determines whether the cinema is accessible by car.
			 * @ov_accessibility			determines whether the cinema is accessible by OV.
			 * @bike_accessibility			determines whether the cinema is accessible by bike.
			 * @wheelchair_accessibility	determines whether the cinema is accessible for invalid people.
			 * @cinema_conditions			the conditions of this cinema.
			 */
			public function InsertCinema($cinema_name, $info_url, $street, $house_number, $postal_code, $city, $state, $car_accessibility, $ov_accessibility, $bike_accessibility,$wheelchair_accessibility,$cinema_conditions ){
				try {
					$sql = "INSERT INTO `gameplay-party`.`cinemas` (`cinema_name`, `info_url`, `street`, `house_number`, `postal_code`, `city`, `state`, `car_accessibility`,`ov_accessibility`, `bike_accessibility`,`wheelchair_accessibility`,`cinema_conditions`) VALUES ('$cinema_name', '$info_url', '$street', '$house_number', '$postal_code', '$city', '$state', '$car_accessibility', '$ov_accessibility', '$bike_accessibility', '$wheelchair_accessibility', '$cinema_conditions');";
					$stmt = $this->DataHandler->Create($sql);
				} catch (Exception $e){
					throw $e;
				}
			}
	}
?>
