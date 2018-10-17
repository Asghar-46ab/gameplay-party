<?php

require_once 'model/BioscopenLogic.php';

class Inlog {

    public function __construct() {

        $this->BioscopenLogic = new BioscopenLogic();

    }

    public function Login() {

        if (isset($_POST['login-submit'])){
            $username = $_POST['username'];
            $pas = $_POST['psw'];

//            var_dump($username, $pas);
        }
        else{
            include "view/pages/inlog.php";
        }


        if($username == "hanneke" && $pas == "1234")
        {
             header('Location: http://localhost/Inlog/Readactie');

        }

        else{
            echo "check data";

        }

        if ($username == "cinema" && $pas == "1234") {

            header("Location: http://localhost/Inlog/Readactie");
        }

        else {
            echo "check data";
        }


    }

    public function Readactie()
    {
        include "view/pages/readacti.php";
    }


    public function Bioscoop(){
        include "view/pages/cinema.php";
    }



}