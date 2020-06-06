<?php
require_once "bootstrap.php";
$photoAnimal=$newPost->getPhoto($_GET['IdAnimal']);
$animalInfo=$newPost->getOne($_GET['IdAnimal']);
$titleHeader = $animalInfo->Nick;
if(!$animalInfo){
    header("Location: /");
    exit;
}

require_once "view/posts/animalInfo.view.php";