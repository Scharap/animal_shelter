<?php
require_once "bootstrap.php";
$titleHeader = "Собаки";
$banner = "banner-area-dog";
$animals = $newPost->getCategoryAll("1");
if (isset($_POST['btnFilter'])) {
    $animals = $filter->FilterAnimals($_POST);
}
if (isset($_POST['btnBack'])) {
    $animals = $newPost->getAllAnimal();
}

require_once "view/posts/animal.view.php";