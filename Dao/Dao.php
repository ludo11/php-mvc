<?php
require ('connection.php');
abstract class Dao implements CRUDinterface, Repository 
{
    
    protected $table;
    protected $pdo;
    protected $modelObj;
    
    public function __construct() {
        $this->pdo = db::getInstance();
    }
    
    public function getAll($modelEntity){
        //le modele avec lequel on travail
        $this->modelObj = $modelEntity;
        $list = [];
        //on parcour la table du model
        $req = $this->pdo->query("SELECT * FROM " . $this->table);
//            var_dump($req);
//        $req->execute();
        //on recupere les données
        foreach ($req->fetchAll() as $donnée){
//            vardump($donnée);
            //on clone chaque résultat par apport a l'entité
            $newEntity = clone $this->modelObj;
            //on hydrate avec les donnéés nos nouveaux objets
            $newEntity->hydrate($donnée);
            $list[] = $newEntity;
        }
        return $list;
    }
    
    public function getById($pId){
        $requete = "SELECT * FROM " . $this->table . " WHERE id= :id" ;
        $req = $this->pdo->prepare($requete);
        $req->bindParam(':id', $pId, PDO::PARAM_INT);
        $req->execute();
        return($req->fetch());
    }
    
   
//    public function getAll(){
//         $resultat = [];
//        $req = $pdo->query("SELECT * FROM $class  ");
//        $req->execute();
////        var_dump($req);
//        foreach ($resultat = $req->fetchall(PDO::FETCH_ASSOC) as $ligne=>$valeur) {
//          
//        }
//          
//           return $resultat; 
//     }
//     
//    public function getAllBy(){
//         
//     }
}
