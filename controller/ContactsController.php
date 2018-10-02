<?php
    require_once 'model/ContactLogic.php';

    class ContactsController {
        public function __construct() {
        $this->ContactsLogic = new ContactsLogic();
    }
    public function Contact(){
       include "view/contacts.php";
        
    }

    public function Bioscopen(){

        $content = $this->ContactsLogic->DisplayBioscopen();
        include "view/bioscopen.php";
    }

    public function Home(){
        $content = "home content";
        include "view/home.php";
    }

}
?>
