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
			$content = $this->BioscopenLogic->generateReserveOverzicht($cinema_id);

			include "view/pages/reserveren.php";
		}

    }
 ?>
