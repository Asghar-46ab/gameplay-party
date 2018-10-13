<?php

require_once 'model/BioscopenLogic.php';

class Page {

    public function __construct() {


    }

    public function home(){
        include "view/pages/home.php";
    }

    public function bioscoop(){
        $this->BioscopenLogic = new BioscopenLogic();
        $content = "bioscopen content";
        // include "gameplay-party/view/pages/bioscoop.php";
    }

    public function contact(){

        include "view/pages/contact.php";
    }

    public function inlog(){

        include "view/pages/inlog.php";
    }


}
