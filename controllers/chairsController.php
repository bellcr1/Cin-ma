<?php

include_once('../models/chairs.php');
include_once('../database/config.php');

class chairsController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert($numchairs, $reserve, $idfilme) {
        $query = "INSERT INTO chairs(numchairs , reserve , idfilme ,iduser ) VALUES (?,?,?,?)";
        $res = $this->pdo->prepare($query);

        $array = array( $numchairs, $reserve, $idfilme , 1);
        return $res->execute($array);
    }




    function getchairs($chairs) {
        $query = "SELECT * FROM chairs WHERE idchairs = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($chairs));
        $array = $res->fetch();
        return $array;
    }

    function delete($chairs) {
        $query = "DELETE FROM chairs WHERE idchairs=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($chairs));
    }

    function chairsList() {
        $query = "SELECT * FROM chairs";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }


    
    function chairsListfilme($idfilme) {
        $query = "SELECT * FROM chairs WHERE idfilme = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idfilme));
        return $res;
    }
    



    function updatechairs($r, $u, $c) {
        $sql = "UPDATE chairs SET `reserve`=?, iduser=? WHERE idchairs=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$r, $u, $c]);
    }
    
}

?>
