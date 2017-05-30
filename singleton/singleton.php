<?php 
 
 class DatabaseConnection extends AnotherClass
 {
 	private $_connection;
 	private static $_instance;
 	private &_dbhost="host";
 	private $_dbusername="username";
 	private &_dbpassword="password";
 	private &_database="Students";


 	
 	private function __construct()
 	{
 		$this-> _connection =new mysqli ($this->_dbhost,$this->_dbusername,$this->_dbpassword,$this->_database);
 		if (mysqli_connect_error()) {
 			trigger_error("No connection"). mysqli_connect_error(),
 E_USER_ERROR);
 		
 		 } {
 		 	public static function getInstance() {
 		 		if (self::&_instance==null {
 		 			self::&_instance=new self();
 		 			
 		 		}
 		 		return self::&instance;

 		 	}
 		 	private funtion clone __clone(){
 		 		public funtion getConnection(){
 		 			return &this->_connection;
 		 		}
 		 	}


 ?>