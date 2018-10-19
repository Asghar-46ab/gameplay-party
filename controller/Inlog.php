<?php

	require_once 'model/CinemaLogic.php';

	/**
	 * The class which is responsible for users logging in.
	 */
	class Inlog 
	{
		
		/**
		 * Constructs a new inlog by initializing the cinema logic.
		 */
		public function __construct() 
		{
			$this->CinemaLogic = new CinemaLogic();

		}	
		
		/**
		 * Attempts to login a user.
		 * @return	{@code true} if the login was successful, {@code false} otherwise.
		 */
		public function inlog()
		{
			if(isset($_POST['login-submit'])) 
			{
				$username = $_POST['username'];
				$password = $_POST['psw'];
				
				$check = $this->CinemaLogic->checkUser($username, $password);
				
				if($check) {
				} 
				else 
				{
				}
				
				return $check;
			} 
			else 
			{
				include "view/pages/inlog.php";
			}
		}

		/**
		 * Includes the readacti page.
		 */
		public function Readactie()
		{
			include "view/pages/readacti.php";
		}

		/**
		 * Includes the cinema page.
		 */
		public function Bioscoop()
		{
			include "view/pages/cinema.php";
		}



}