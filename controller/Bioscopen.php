<?php
    require_once 'model/BioscopenLogic.php';

    class Bioscopen {

        public function __construct() {

        $this->BioscopenLogic = new BioscopenLogic();

        }


        public function Show(){

            $content = "bioscopen content";
            include "view/pages/bioscoop.php";
        }



    }
    ?>
