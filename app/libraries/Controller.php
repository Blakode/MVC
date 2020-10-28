<?php

/*
	This is the base controller
	Loads Models & Views 

*/
class Controller{
		
		function __construct()
		{
			
		}

		// loads model
		public function model($model)
		{
		// require model file
		require_once '../app/models/'.$model.'.php'
		// instantiate model
		require new $model();
		}

		public function views($views, $data[])
		{
		if(file_exists('../app/views/'.$views.'.php')){
			require_once '../app/views/'.$views.'.php'
			}else{
				die('view does not exist')
			}
		}
	}
	