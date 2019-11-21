<?php

class dbconnect{
    private $host='localhost';
    private $dbname='test';
    private $username='root';
    private $pass='';
    
    private $conn=null;
    
    function connect(){
        try{
            $this->conn=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $this->conn;
        }
        catch(PDOException $ex){
            return null;
        }
    }
    
}

?>

