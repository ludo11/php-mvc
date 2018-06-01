<?php

class DaoUser extends Dao{
    
    protected $table = 'connection';
    
//    public function __construct() {
//        echo "lol";
//    }
    //on creer un nouvelle objet
    public function create($array){
//        vardump($array);
        $requete = $this->pdo->prepare( $this->insert().$this->keys($array) ." VALUES ".$this->value($array)."");
        
        $keys = $this->keys($array);
        $value = $this->value($array);
//         var_dump($requete);
//      $requete->bindValue($keys=>$value);
        
      
        $requete->execute($array);
        echo 'Vous etes bien inscrit';
//        
//        var_dump($requete);
       
    }
    //mise a jour de l'objet
    public function update($array){
//        echo 'update ici';
        $req = $this->pdo->prepare($this->RequeteUpadate().$this->setKey($array) .' WHERE id= :id' );
        $req->execute($array);
//        var_dump($req);
          echo'Mise a jour réussi';
    }
    //recupere les clé et les valeurs et supprime la derniere ,
    private function setKey($parray){
        $req = " ";
        foreach ($parray as $key => $value){
           $req.= $key . " = ".":" .$key. ", ";
           
        }
        $req =substr ( $req ,  0 , -2 );
         $req.= " ";
         return $req;
//        var_dump($req);
    }
    
    private function RequeteUpadate(){
        return "UPDATE " . $this->table . ' SET ';
    }
    
    private function insert(){
        return "INSERT INTO " . $this->table;
    }
    //recupere les clés pour create
    private function keys($pArray){
        $req = " (";
        foreach($pArray as $key => $value){
            $req.= $key . ", ";
        }
        $req =substr ( $req ,  0 , -2 );
//        var_dump($req);
//        $req = rtrim($req , ',');
        $req.= ")";
//        vardump($req);
        return $req;
    }
//    recupere les valeur pour create
    private function  value($pArray){
        $valeur = '( ';
        foreach($pArray as $key => $value){
            $valeur.=  ':'.$key.'  , ' ;
        }
        $valeur =substr ( $valeur ,  0 , -3 );
         $valeur.= ')';
         return $valeur;
    }
    //recherche par id
    public function retrieve($model){
        $this->modelObj = $model;
//        vardump($this->modelObj);
        return $this->getById($this->modelObj->getId());
//        vardump($this->modelObj->getId());
        
    }
    

    public function delete($id){
       $toto = "DELETE FROM `" . $this->table."`"." WHERE `id` =:id";
       vardump($toto);
       $req = $this->pdo->prepare($toto);
       $req->bindValue(":id", $id, PDO::PARAM_INT);
       var_dump($id);
       $req->execute(); 
       vardump($req);
    }
    
    public function reqDelete(){
        return   ;
    }
    
//    public function DelKeyValue($pArray){
//         $valeur = ' ';
//        foreach($pArray as $key => $value){
//            $valeur.=  ':'.$key.'  , ' ;
//        }
//        $valeur =substr ( $valeur ,  0 , -3 );
//         $valeur.= '';
//         return $valeur;
//    }
    public function getAllBy(){
        
    }
    
    public function getAll($oEntity){
        $result = [];
        $result = parent::getAll($oEntity);
        vardump($result);
        
        return $result;
    }
}