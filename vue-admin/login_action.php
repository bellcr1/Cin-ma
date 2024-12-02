<?php
session_start();

include_once("../controllers/userController.php");
include_once("../models/user.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $usercontroller = new UserController();
    $verify = $usercontroller->Verify_password($email, $password);


    if ($verify -> rowCount() == 1) {
        $row = $usercontroller ->getemail($email);



        $_SESSION ['id']= $row['id'];
        $_SESSION ['userrole']= $row['roles'];
        $_SESSION ['nom']= $row['nom'];
        $_SESSION ['prenom']= $row['prenom'];
        $_SESSION ['email'] = $email;

        //echo "Invalid username or password. Please try again.";
        if($row['roles'] === "admin"){
            header('Location: index.php');
        }else{
            header('Location: ../vue-user/index.php');

        }
     
    } else {
        echo "Invalid username or password. Please try again.";
        echo $verify -> rowCount();
    }          

?>


