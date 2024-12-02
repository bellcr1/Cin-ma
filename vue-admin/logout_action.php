<?php
session_start();





        $_SESSION ['id']= "";
        $_SESSION ['userrole']= "";
        $_SESSION ['nom']= "";
        $_SESSION ['prenom']= "";
        $_SESSION ['email'] = "";

            header('Location: login.html');
     

?>