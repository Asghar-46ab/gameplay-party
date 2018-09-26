<?php
    require_once 'model/ContactLogic.php';

    class ContactsPoint {
        public function __construct() {
        $this->ContactsLogic = new ContactsLogic();
    }

    public function method2($params = ""){
        echo "Dit is standaard tekst, hieronder komt de param die je meegeeft.<br>";
        var_dump($params);
    }

    public function test2($params = ""){
        echo "BLA BLA<br>";
        echo "$params";
    }
    // test asghar met master

}
?>
