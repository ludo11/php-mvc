<?php


class UsersController  {
    
    function  getHome(){
//        echo 'ici';
        require_once('./View/layout.php');
    }
    
    function getAll(){
        //on declare un tableau et un nouvelle objet et methode getAll
        $aoUser = [];
        $modelUser = new User();
        $aoResult = $modelUser->getAll();

//        vardump($aoResult);
    }
   
    function Create(){
//        on declare un nouvelle objet si un id on récupere id et methode update
        $modelUser = new User();
        if(isset($_POST['id'])){
            $modelUser->setId ((int)$_POST['id']);
        }
        $modelUser->update();
//        echo 'controller update';
    }

    function getById(){
        //recupere id 
        $id = explode("/", $_SERVER["REQUEST_URI"]);
        $id = (int)end($id);
        $modelUser = new User();
        $modelUser->setId($id);
        //retourne un objet hydraté grace a la méthode load 
        return $modelUser->load();
//        vardump($oUser);
    }

    function contact(){
//        echo 'controller user :: contact';
    }

    function inscription(){
        require_once "View/inscription.php";
    }
    
    function updateProfil(){
        //recupere id avec la methode getById
        $id = explode("/", $_SERVER['REQUEST_URI']);
        $id = end($id);
        
        $donneeProfil = $this->getById($id);
//        var_dump($donnéeProfil);
        
        require_once "View/update.php";
    }
    
     function delete(){
         //recupere id pour afficher dans la vue les infos a delete
         $id = explode("/", $_SERVER['REQUEST_URI']);
        $id = end($id);
        $donneeProfil = $this->getById($id);
        require_once "View/delete.php";
    }
    
    function remove(){
        //on declare un nouvelle objet on envoi id a remove
        $modelUser = new User();
            $id = $_POST['id'];
            $modelUser->remove((int)$id);
        }
       
    
    
}
