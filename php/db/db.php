<?php

	include 'config.php';
	include 'dbException.php';

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
		
		
		public function executeQuery($query){
			if(self::$connection->connect_errno)
				throw new DbException("Fallo al conectar a MySQL: " . $mysqli->connect_errno . $mysqli->connect_error);
			
			$result = self::$connection->query($query);
			
			self::$connection->close();
					
			return $result;
		}
		
	}

?>