<?php

require_once 'model/BioscopenLogic.php';

class Page {

    public function __construct() {

        $this->BioscopenLogic = new BioscopenLogic();

    }

    public function home(){

        include "view/pages/home.php";
    }

    public function bioscoop(){

        $content = "bioscopen content";
        include "view/pages/bioscoop.php";
    }
    
    public function contact(){

        include "view/pages/home.php";
    }

    public function inlog(){

        include "view/pages/home.php";
    }


}
