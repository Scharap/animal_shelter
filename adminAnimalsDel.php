<?php
require_once "bootstrap.php";

if(!isset($_GET['IdAnimal']) || empty($_GET['IdAnimal'])){
    exit;
}

$animalInfo=$newPost->getOne($_GET['IdAnimal']);
$titleHeader="Удаление информации o ".$animalInfo->Nick;
if(!$animalInfo){
    header("Location: /admin.php");
    exit;
}

if(isset($_POST['btnDel'])) {
    $_POST['IdAnimal'] = $_GET['IdAnimal'];
    $admin->deleteAnimal($_GET['IdAnimal']);
    header("location: /adminAnimalsGallery.php");
    exit;
}

if(isset($_POST['btnBack'])) {
    header("location: /admin.php");
    exit;
}


require_once "view/admin/view/adminDelAnimal.view.php";