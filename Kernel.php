<?php

class Kernel {
    private static $_Instance = NULL;
    
    private function __construct() {
        
    }

    public static function getInstance(){
      if(is_null(self::$_Instance)){
          self::$_Instance = new Kernel();
      }
      return self::$_Instance;
    }
    
    public static function Main() {
//        echo ' ---methode main dans le kernel';
        $routes = New Router();
        
        $routes->index();
    }
}
