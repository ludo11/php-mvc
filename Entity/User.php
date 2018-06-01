<?php

class User extends EntityModel{
    
public $id;
public $user;
public $mdp;
public $confirm_mdp;
public $resultat;
public $role;
public $mail;

    public function __construct() {
        parent::__construct(get_class());
    }
//---------------------Getters----------------------------------------------------------
    public function getId(){
        return $this->id;
    }

    public function getUser(){
        return $this->user;
    }

    public function getResultat(){
        return $this->resultat;
    }

    public function getRole(){
        return $this->role;
    }

    public function getMail(){
        return $this->mail;
    }

//-------------------Setter---------------------------------
    
    public function setId($value){
         $this->id = $value;
    }
    
     public function setMdp($value){
         $this->mdp = $value;
    }

    public function setUser($value){
         $this->user = $value;
    }

    public function setResultat($value){
         $this->resultat = $value;
    }

    public function setRole($value){
         $this->role = $value;
    }

    public function setMail($value){
         $this->mail = $value;
    }


}