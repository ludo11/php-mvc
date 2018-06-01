<?php

class db {
    //
    protected static $instance = NULL ;


    //constructeur vide pour s'en servir 
    public function __construct(){
       
    }
 
    
    public static function getInstance(){
        //on verifie si l'instance existe sinon on la créee
        if(!isset(self::$instance)) {
            //le self fait reference a la classe donc ici db
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $dataBase =  json_decode(file_get_contents( './config/database.json'), true);
            
//            vardump($dataBase);
           
            //on creer l'instance 
//            $instance = new PDO("mysql:host=x".$dataBase['host'].";dbname=".$dataBase['dbname'].";charset=utf8", $username, $pasword,$pdo_options);
            self::$instance = new PDO('mysql:host='.$dataBase['host'].';dbname='.$dataBase['dbname'].';charset=utf8', $dataBase['username'], $dataBase['password'],$pdo_options);
        } 
        return self::$instance;
    }

    
    
    
    
    
    
    
    
}

