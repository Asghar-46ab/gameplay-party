<?php
// ?
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
        print_r($content) ;
        // require_once "./index.php";
    }

}
?>
