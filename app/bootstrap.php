<?php

	//load config file
	require_once "config/config.php";
	

	//Autoload core libraries 
	spl_autoload_register(function($ClassName){
		require_once "libraries/".$ClassName.".php";
	});