<?php

include_once('../models/user.php');
include_once('../database/config.php');

class UserController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(User $u) {
        $query = "INSERT INTO user(nom , prenom, email, motp,roles) VALUES (?, ?, ?, ?,?)";
        $res = $this->pdo->prepare($query);

        $array = array($u->getnom(),$u->getprenom(), $u->getEmail(), $u->getPassword(),'user');
        return $res->execute($array);
    }

    function getUser($id) {
        $query = "SELECT * FROM user WHERE id = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array = $res->fetch();
        return $array;
    }

    function getemail($email) {
        $query = "SELECT * FROM user WHERE email = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($email));
        $array = $res->fetch();
        return $array;
    }

    function Verify_password($email,$password) {
        $query = "SELECT * FROM user where email = '$email' and motp = '$password' ";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function delete($id) {
        $query = "DELETE FROM user WHERE id=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($id));
    }

    function userList() {
        $query = "SELECT * FROM user";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function updateUser(User $u) {
        $sql = "UPDATE user SET nom=?,prenom=?, email=?, motp=?, roles=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array(
            $u->getnom(), 
            $u->getprenom(), 
            $u->getEmail(), 
            $u->getPassword(), 
            $u->getrole(), 
            $u->getId()
        ));
    }
}
?>