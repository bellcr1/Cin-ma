<?php
class chairs {



    private $idchairs,$numchairs, $reserve, $idfilme,$iduser;

    function __construct($idchairs = "" , $numchairs = "", $reserve = "",$idfilme = "" ) {
        $this->idchairs = $idchairs;
        $this->numchairs = $numchairs;
        $this->reserve = $reserve;
        $this->idfilme = $idfilme;
    }




    public function getidchairs(){   
        return $this->idchairs;
    }

    public function getnumchairs(){
        return $this->numchairs;
    }
    public function getreserve(){
        return $this->reserve;
    }
    public function getidfilme(){
        return $this->idfilme;
    }
    public function getiduser(){
        return $this->iduser;
    }





   
    public function setidchairs($idchairs){
        $this->idchairs= $idchairs;
    }


   

    public function setnumchairs($numchairs){
        $this->numchairs = $numchairs;
    }
    public function setreserve($reserve){
        $this->reserve = $reserve;
    }

    public function setidfilme($idfilme){
        $this->idfilme = $idfilme;
    }

    public function setiduser($iduser){
        $this->iduser = $iduser;
    }
   
}
?>