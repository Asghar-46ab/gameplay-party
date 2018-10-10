<?php
    require_once 'model/BioscopenLogic.php';

    class Bioscopen {

        public function __construct() {

        $this->BioscopenLogic = new BioscopenLogic();

        }

        public function Show(){

            $content = $this->BioscopenLogic->bbb();

            include "view/pages/bioscoop.php";

        }


    }
    ?>
