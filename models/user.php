<?php

class User {
    private $id,$nom,$prenom, $email, $password,$role;

    function __construct($nom = "",$prenom = "", $email = "", $password = "",$role="") {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;


    }

    public function getId(){
        return $this->id;
    }

    public function getnom(){
        return $this->nom;
    }


  
    public function getprenom(){
        return $this->prenom;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getrole(){
        return $this->role;
    }







    public function setid($id){
        $this->id = $id;
    }

  
    public function setnom($nom){
        $this->nom = $nom;
    }

    public function setprenom($prenom){
        $this->prenom = $prenom;
    }




    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
         $this->password = $password;
    }

    public function setrole($role){
        $this->role = $role;
    }


}

?>