<?php 
class connections{
   private $servername = 'localhost';
   private $username = 'root';
   private $password = '';
   private $dbname = 'teammvc';
    
    function connection (){
        $conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);
        return $conn;
    }
}


