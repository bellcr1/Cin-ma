<?php
    session_start();

include_once('../models/blog.php');
include_once('../controllers/blogController.php');

$blog = new blog();

$blog->setnom($_SESSION['nom']);
$blog->settitre($_POST['titre']);
$blog->setdescription($_POST['description']);
$blog->setimage($_POST['image']);
$blog->setiduser($_SESSION['id']);


$blogController = new blogController();
$res = $blogController->insertblog($blog->getnom(),$blog->gettitre(),$blog->getdescription(), $blog->getimage(), $blog->getiduser());

header('Location: blog.php');

?>
