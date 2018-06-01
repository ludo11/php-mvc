<?php

abstract class EntityModel implements Persistable 
{
    protected $dao;
    
    public function __construct($childClass) {
        //on instencie dao a entityModele 
        $daoToLoad = "Dao".ucfirst($childClass);
        $this->dao = new $daoToLoad;
    }


    public function load() {
        //on recherche par id et on hydrate l'objet
        $result = $this->dao->retrieve($this);
        $this->hydrate($result);
        return $this;
    }
    //on appel create dans le dao si pas id sinon mise a jour avec update 
    public function update() {
        
        if($this->getId() == null){
            //
//            echo "create";
            $this->dao->create($_POST);
        }else{
            $this->dao->update($_POST);
            echo 'la';
        }
    }
    
    public function remove() {
        $this->dao->delete($_POST['id']);
    }
    
    public function getAll(){
        return $this->dao->getAll($this);
    }
    
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
//        vardump($this);
    }

}
