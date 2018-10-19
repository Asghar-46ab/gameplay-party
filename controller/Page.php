<?php

require_once 'model/CinemaLogic.php';

class Page {

    public function __construct() {
        $this->CinemaLogic = new CinemaLogic();

    }

    public function home(){
        $content = $this->CinemaLogic->Oeverons();
        include "view/pages/home.php";

    }

    public function OveronsUpdate(){

        $overons = $this->home();

        include "view/pages/overonsForm.php";
    }



    public function contact(){

        include "view/pages/contact.php";
    }

    public function inlog(){
		if(isset($_POST['login-submit'])) {
			$username = $_POST['username'];
			$password = $_POST['psw'];
			
			$check = $this->CinemaLogic->checkUser($username, $password);
			
			if($check) {
				
			} else {
				//inlog gegevens kloppen niet
			}
		} else {
			include "view/pages/inlog.php";
		}
    }


}
