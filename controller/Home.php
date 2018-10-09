<?php

require_once 'model/BioscopenLogic.php';

class Home {

    public function __construct() {

        $this->BioscopenLogic = new BioscopenLogic();

    }

    public function Content(){

        include "view/pages/home.php";
    }


}