<?php

include_once('../models/jour.php');
include_once('../database/config.php');

class jourController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(jour $c) {
        $query = "INSERT INTO jour(idjour) VALUES (?)";
        $res = $this->pdo->prepare($query);

        $array = array( $c->getjour());
        return $res->execute($array);
    }

    function getjours($jour) {
        $query = "SELECT * FROM jour WHERE idjour = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($jour));
        $array = $res->fetch();
        return $array;
    }

    function delete($jour) {
        $query = "DELETE FROM jour WHERE idjour=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($jour));
    }

    function jourList() {
        $query = "SELECT * FROM jour";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function updatejour(jour $c) {
        $sql = "UPDATE jour SET `idjour`=? WHERE idjour=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($c->getjour(), $c->getoldjour()));
    }
    
}

?>
