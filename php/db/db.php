<?php

	include 'config.php';

	class DB{
		
		private static $instance = NULL;
		private static $connection = NULL;
		
		private function __construct(){
			self::$connection =  new mysqli(DB_HOST,
										  	DB_USER,
										  	DB_PASSWORD,
										  	DB_DATABASE);
		}
		
		public static function getInstance(){
			if(self::$instance == 0)
				self::$instance = new DB();
			return self::$instance;
		}
		
		
		public function getConnection(){
			return self::$connection;
		}
		
	}

?>