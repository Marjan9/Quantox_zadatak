<?php

class DB{

public static $conn;


public function __construct(){
    $this->connect();
}

public function connect(){

    try{
        
        self::$conn = new PDO('mysql:host=localhost;dbname=quantox_task;charset=utf8mb4', 'root', '');
        self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $e){
        echo 'Database connection has failed <br>';
        $e->getMessage();
    }
}
}


?>