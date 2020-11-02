<?php
	/**
	 * 
	 */
	class Pages extends Controller{
		
		public function __construct()
		{
		}


		public function index()
		{
			$data =["title" => 'Welcome'];
			
			$this->views('pages/index', $data);
		}

		public function about()
		{
			$data = ["title" => 'About Us'];
			
			$this->views('pages/about', $data);
		}



	}