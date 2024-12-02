<?php
class filme {



    private $idfilme,$description, $nomfilme, $dated, $datef,$timeflme,$image, $idjour,$best;

    function __construct($idfilme = "", $nomfilme = "", $dated = "", $datef = "") {
        $this->idfilme = $idfilme;
        $this->nomfilme = $nomfilme;
        $this->dated = $dated;
        $this->datef = $datef;
    }



    public function getidfilme(){
        return $this->idfilme;
    }

    public function getnomfilme(){
        return $this->nomfilme;
    }
    public function getdescription(){
        return $this->description;
    }

    public function getdatef(){   
        return $this->datef;
    }

    public function getdated(){
        return $this->dated;
    }
    public function gettimefilme(){
        return $this->timefilme;
    }

    public function getimage(){
        return $this->image;
    }


    public function getidjour(){
        return $this->idjour;
    }
    public function getbest(){
        return $this->best;
    }


   

    public function setidfilme($idfilme){
        $this->idfilme = $idfilme;
    }

    public function setnomfilme($nomfilme){
        $this->nomfilme = $nomfilme;
    }
    public function setdescription($description){
        $this->description = $description;
    }

    public function setdatef($datef){
        $this->datef= $datef;
    }

    public function setdated($dated){
        $this->dated= $dated;
    }
    public function settimefilme($timeflme){
        $this->timefilme= $timeflme;
    }
    
    public function setimage($image){
        $this->image = $image;}


    public function setidjour($idjour){
        $this->idjour= $idjour;
    }

    public function setbest($best){
        $this->best= $best;
    }
}
?>