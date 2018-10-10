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


    }
    ?>
