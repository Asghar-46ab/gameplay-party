<?php
    require_once 'model/ContactLogic.php';

    class ContactsController {
        public function __construct() {
        $this->ContactsLogic = new ContactsLogic();
    }

    public function method($params = ""){
        $table = "Dit is standaard tekst, hieronder komt de param die je meegeeft.<br>";
        

        include "view/contacts.php";
    }

    public function test($params = ""){
        echo "BLA BLA<br>";
        echo "$params";
    }

}
?>
