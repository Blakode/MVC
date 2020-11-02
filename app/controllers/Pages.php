<?php
	/**
	 * 
	 */
	class Pages extends Controller{
		
		public function __construct()
		{
		$this->postModel = $this->model('Post');
		}


		public function index()
		{
			$post = $this->postModel->getPost();
			$data =["title" => 'Welcome',
					"post" => $post ];
			

			$this->views('pages/index', $data);
		}

		public function about()
		{
			$data = ["title" => 'About Us'];
			
			$this->views('pages/about', $data);
		}



	}