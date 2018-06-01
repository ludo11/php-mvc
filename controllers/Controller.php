<?php

class Controller    {
     
    public function view(String $action){
           include ('./View/layout/header.php');
           if ($dir) {
               if (file_exists('./View/' . $dir .'/' . $action . '.php')){
                   include ('./View/' . $dir .'/' . $action . '.php');
               }
           }
            if (file_exists('./View/' . $action . '.php')){
                 include ('./View/' . $action . '.php');
            }
             include ('./View/layout/footer.php');
           
    }
    public function acceuil(){
        include 'View/headerView.php';
        include (dirname(__FILE__) . '/../View/acceuil.php');
    }
    
//    public static function getAll(){
//        echo '---class controller';
//        require_once ('View/Pages/home.php');;
//        
//    }


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function delete($truc,$id){
        $delete = new Model();
        $result = $delete->delete($truc, $id);
        $this->response($result['data'], $result['status'], $result[1]);
    }
}
