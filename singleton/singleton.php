<?php 
 //singleton to connect to database
 class ConnectDb {
  // Hold the class instance.
  private static $instance = null;
  private $conn;
  
  private $host = 'localhost';
  private $user = 'user-name';
  private $pass = 'password';
  private $name = 'name';

//The db connection is established in the private constructor.
  private function __construct()
  {
    $this->conn = new PDO("mysql:host={$this->host};
    name={$this->name}", $this->user,$this->pass;
    &conn-> setAttribute (PDO:ATT_ERRMODE,PDO:ERRMODE_EXCEPTION);
  
  }
  
  public static function getInstance()
  {
    if(!self::$instance)
    {
      self::$instance = new ConnectDb();
    }
   
    return self::$instance;
  }
  
  public function getConnection()
  {
    return $this->conn;
  }
}

 	

?>