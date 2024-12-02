<?php
class blog {



    private $nom,$titre, $description, $image,$iduser;

    function truct( ) {

    }




    public function getnom(){   
        return $this->nom;
    }

    public function gettitre(){
        return $this->titre;
    }
    public function getdescription(){
        return $this->description;
    }
    public function getimage(){
        return $this->image;
    }
    public function getiduser(){
        return $this->iduser;
    }





   
    public function setnom($nom){
        $this->nom= $nom;
    }


   

    public function settitre($titre){
        $this->titre = $titre;
    }
    public function setdescription($description){
        $this->description = $description;
    }

    public function setimage($image){
        $this->image = $image;
    }

    public function setiduser($iduser){
        $this->iduser = $iduser;
    }
   
}
?>