<?php

require_once 'model/BioscopenLogic.php';

class Page {

    public function __construct() {
        $this->BioscopenLogic = new BioscopenLogic();

    }

    public function home(){
        $content = $this->BioscopenLogic->Oeverons();
        include "view/pages/home.php";
        include "view/pages/overonsForm.php";

    }

    public function OveronsUpdate(){

        $overons = $this->home();

        include "view/pages/overonsForm.php";
    }



    public function contact(){

        include "view/pages/contact.php";
    }

    public function inlog(){

        include "view/pages/inlog.php";
    }


}
