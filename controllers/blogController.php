<?php

include_once('../models/blog.php');
include_once('../database/config.php');
class blogController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insertblog($nom,$titre,$description,$image,$iduser){
    $query = "INSERT INTO blog ( `nom`,`titre`, `description`, `image`,iduser) VALUES (?, ?, ?, ?, ?)";
    $res = $this->pdo->prepare($query);
    $res->execute(array($nom,$titre, $description, $image,$iduser));
    return $res;
}


   

    function blogList() {
        $query = "SELECT * FROM blog";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res->fetchAll(); 
    }

    
   


}

?>
