<?php

class Autoloader {
//    private static $_classDir = "./classes/";
    //charge les class si elle existe dans les chemins
    public static function classAutoloader($class){
//        echo $class."<br>";
            if(file_exists('./Common/'.$class.'.php')):
                include'./Common/'.$class.'.php';
            elseif (file_exists('./' . $class . '.php')):
                include './' . $class . '.php';
            elseif (file_exists('./controllers/' . $class . '.php')):
                include './controllers/' . $class . '.php';
            elseif (file_exists('./Entity/' . $class . '.php')):
                include './Entity/' . $class . '.php';
            elseif (file_exists('./Dao/' . $class . '.php')):
                include './Dao/' . $class . '.php';
            endif;
//            echo '----class autoloader ';
    }   
}
