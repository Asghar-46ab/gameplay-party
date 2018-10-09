<?php

require_once 'model/BioscopenLogic.php';

class Page {

    public function __construct() {

        $this->BioscopenLogic = new BioscopenLogic();

    }

    public function home(){

        include "view/pages/home.php";
    }


}