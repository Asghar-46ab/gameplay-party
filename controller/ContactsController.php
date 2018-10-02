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

    public function Admin(){

        include "view/admin.php";
    }

    public function Login(){

        if (isset($_POST["login"])){
            $user = $_POST["username"];
            $pass = $_POST["passwoord"];
        }
        else
        {
            include "view/inlog.php";
        }
        if($user = "haneke" && $pass = "1234")
        {
            $content = header('Location: http://localhost/gameplay-party/ContactsController/admin');
        }
        else
        {
            $content = "aanvullingen zijn fout"; 
        }
        
    }



    public function CreatBioscoop(){
        if(isset($_POST["create"])){
            $naam = $_POST["naam"];
            $strat = $_POST["strat"];
            $postcode = $_POST["postcode"];
            $stad = $_POST["stad"];
            $provincie = $_POST["provincie"];
            $begintijd = $_POST["begintijd"];
            $eindtijd = $_POST["eindtijd"];
            $bereikbaarauto = $_POST["bereikbaarauto"];
            $bereikbaarov = $_POST["bereikbaarov"];
            $bereikbaarfiets = $_POST["bereikbaarfiets"];
            $rolstoeltoegankelijkheid = $_POST["rolstoeltoegankelijkheid"];
            $voorwaarden = $_POST["voorwaarden"];
            $content = $this->ContactsLogic->InsertBioscoppen($naam, $strat, $postcode, $stad, $provincie, $begintijd, $eindtijd, $bereikbaarauto, $bereikbaarov, $bereikbaarfiets, $rolstoeltoegankelijkheid, $voorwaarden);

// header("Location: http://localhost/gameplay-party/ContactsController/CreatBioscoop");
        }else{

            include "view/createBios.php";
        }
    }

}
?>
