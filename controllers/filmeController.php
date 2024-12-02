<?php

include_once('../models/filme.php');
include_once('../database/config.php');

class filmeController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert($nomfilme,$description, $dated, $datef,$timefilme,$image, $idjour,$best)
{
    $query = "INSERT INTO filme ( `nomfilme`,`description`, `dated`, datef,timefilme,`image`,`idjour`,best) VALUES (?, ?, ?, ?,?,?,?,?)";
    $res = $this->pdo->prepare($query);
    $res->execute(array($nomfilme,$description, $dated, $datef,$timefilme,$image, $idjour,$best));
    return $res;
}


    function getfilme($id) {
        $query = "SELECT * FROM filme WHERE idfilme = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array = $res->fetch();
        return $array;
    }

    function delete($idfilme) {
        $query = "DELETE FROM filme WHERE idfilme=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idfilme));
    }

    function filmeList() {
        $query = "SELECT f.*, j.idjour 
                  FROM filme f 
                  LEFT JOIN jour j ON f.idjour = j.idjour";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res->fetchAll(); 
    }

    
   

    function updatefilme(filme $c) {
        $sql = "UPDATE filme SET `nomfilme`=?,`description`=? ,`dated`=?,`datef`=?,`timefilme`=?,`image`=?,`idjour`=?,`best`=? WHERE idfilme=?";
        $res = $this->pdo->prepare($sql);
        $res->execute(array(
            $c->getnomfilme(),
            $c->getdescription(),
            $c->getdated(),
            $c->getdatef(),
            $c->gettimefilme(),
            $c->getimage(),
            $c->getidjour(),
            $c->getbest(),

            $c->getidfilme()
        ));
    }
    

    function recherchejour($idjour){
        $query = "select * from filme where idjour='".$idjour."'";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }



}

?>
