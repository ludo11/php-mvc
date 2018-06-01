<?php
//on charge les fichiers php

define("ROOT", "./");

require_once('Autoloader.php');
//require_once('View/layout.php');  

spl_autoload_register(array('Autoloader', 'classAutoloader'));

//echo 'ici';
function vardump($pWhat){
    echo '<pre>';
    var_dump($pWhat);
    echo '</pre>';
}


Kernel::getInstance()->Main();

