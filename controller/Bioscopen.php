<?php
    require_once 'model/BioscopenLogic.php';

    class Bioscopen {

        public function __construct() {

        $this->BioscopenLogic = new BioscopenLogic();

        }

        public function ShowBioscopen()
        {

            $content = $this->BioscopenLogic->generateBioscoopOverzicht();

            include "view/pages/bioscoop.php";

        }
		
		public function showReserve($cinema_id) {
			if(isset($_POST['createreserveren'])) {
				//afhandeling formulier
			} else {
				$content = $this->BioscopenLogic->generateReserveOverzicht($cinema_id);
				include "view/pages/reserverenFormulier.php";
			}
		}


        public function CreateBioscoop() {

            if (isset($_POST['createsubmit'])){

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


                $content = $this->BioscopenLogic->InsertBioscopen($cinema_name, $info_url, $street, $house_number, $postal_code, $city, $state, $car_accessibility, $ov_accessibility, $bike_accessibility,$wheelchair_accessibility,$cinema_conditions );

                header("Location: http://localhost/Inlog/Readactie");

            }else{

                include "view/pages/readactieCreate.php";
            }

        }

    }
 ?>
