<?php
    require_once 'model/CinemaLogic.php';

	/**
	 * The class which is responsible for controlling cinemas.
	 */
    class Cinema 
	{
		
		/**
		 * Constructs a new cinema by initializing the cinema logic.
		 */
        public function __construct() 
		{
			$this->CinemaLogic = new CinemaLogic();
        }

		/**
		 * Creates the cinema page by generating the overview.
		 */
        public function ShowCinemas()
        {
            $content = $this->CinemaLogic->generateCinemaOverview();
            include "view/pages/cinema.php";
        }
		
		/**
		 * Shows the reservation form for a cinema.
		 * $cinema_id	the id of the cinema to create the form for.
		 */
		public function showReservation($cinema_id) 
		{
			if(isset($_POST['createreserveren'])) 
			{
				//afhandeling formulier
			} 
			else 
			{
				$content = $this->CinemaLogic->generateReservationOverview($cinema_id);
				include "view/pages/reserverenFormulier.php";
			}
		}


		/**
		 * Creates a new cinema if the supplied form is submitted, else it will send a form.
		 */
        public function CreateCinema() 
		{
            if (isset($_POST['createsubmit']))
			{
                $cinema_name = $_POST['cinema_name'];
                $info_url = $_POST['info_url'];
                $street = $_POST['street'];
                $house_number = $_POST['house_number'];
                $postal_code = $_POST['postal_code'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $car_accessibility = $_POST['car_accessibility'];
                $ov_accessibility = $_POST['ov_accessibility'];
                $bike_accessibility = $_POST['bike_accessibility'];
                $wheelchair_accessibility = $_POST['wheelchair_accessibility'];
                $cinema_conditions = $_POST['cinema_conditions'];


                $content = $this->CinemaLogic->InsertCinema($cinema_name, $info_url, $street, $house_number, $postal_code, $city, $state, $car_accessibility, $ov_accessibility, $bike_accessibility,$wheelchair_accessibility,$cinema_conditions );

                header("Location: http://localhost/Inlog/Readactie");

            }
			else
			{
                include "view/pages/readactieCreate.php";
            }

        }

    }
 ?>
