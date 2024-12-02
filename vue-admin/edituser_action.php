<?php

require_once('../models/user.php');
require_once('../controllers/userController.php');

$userController = new UserController();
$user = new user();

$user->setId($_POST['id']);
$user->setnom($_POST['nom']);
$user->setprenom($_POST['prenom']);
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);
$user->setrole($_POST['role']);

$result = $userController->updateUser($user);

header('Location: userslist.php');
exit();

?>
