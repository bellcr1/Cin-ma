<?php

include_once("../controllers/userController.php");
include_once("../models/user.php");

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = new user($nom,$prenom, $email, $password);
    $userController = new userController();

    $inserted = $userController->insert($user);

    if ($inserted) {
        header('Location: login.html');
    } else {
        echo "Failed to insert data into the database.";
    }
?>
