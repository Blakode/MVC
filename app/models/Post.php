<?php

	/**
	 * 
	 */
	class Post{

		private $db;

		function __construct()
		{
			$this->db = new Database;
		}

		public function getPost()
		{
			$this->db->query("SELECT * FROM post");
			return $this->db->resultSet(); 
		}


	}