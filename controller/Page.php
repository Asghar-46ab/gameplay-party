<?php

	require_once 'model/CinemaLogic.php';

	/**
	 * The class which is responsible for pages.
	 */
	class Page {

		/**
		 * Constructs a new page by initializing the cinema logic.
		 */
		public function __construct() 
		{
			$this->CinemaLogic = new CinemaLogic();

		}

		/**
		 * Constructs the home page by creating the content inside of it and including the view.
		 */
		public function home()
		{
			$content = $this->CinemaLogic->Oeverons();
			include "view/pages/home.php";

		}

		/**
		 * Updates the over ons page.
		 */
		public function OveronsUpdate()
		{

			$overons = $this->home();
			include "view/pages/overonsForm.php";
		}
		
		/**
		 * Constructs the contact page by including the contact view.
		 */
		public function contact()
		{

			include "view/pages/contact.php";
		}
	}
