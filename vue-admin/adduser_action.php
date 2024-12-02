<?php

include_once('../models/user.php');
include_once('../controllers/userController.php');

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];

$email = $_POST['email'];
$password = $_POST['password'];

$userController = new UserController();
$result = $userController->insert(new User($nom,$prenom, $email, $password));

if ($result) {
    header('Location: userslist.php');
    exit();
} else {
    echo "Failed to add user.";
}
?>
