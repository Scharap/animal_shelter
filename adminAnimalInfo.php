<?php
require_once "bootstrap.php";
$photoAnimal=$newPost->getPhoto($_GET['IdAnimal']);
$animalInfo=$newPost->getOne($_GET['IdAnimal']);
$titleHeader=$animalInfo->Nick;
if($_GET['IdAnimal']>195){
    $photoAnimal=$newPost->getOne($_GET['IdAnimal']);
}

if(!$animalInfo){
    header("Location: /admin.php");
    exit;
}

require_once "view/admin/view/adminAnimalInfo.view.php";