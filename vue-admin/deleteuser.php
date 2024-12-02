<?php

include_once('../models/user.php');
include_once('../controllers/userController.php');

$userController = new UserController();


if (isset($_GET['id'])) {
    $id = urldecode($_GET['id']);
    $result = $userController->delete($id);
echo $id;
   if ($result) {
        header('Location: userslist.php');
        exit();
    } else {
        echo "Failed";
    }
}
?>
