<?php
require_once "bootstrap.php";
$titleHeader = "Коты";
$banner = "banner-area-cat";
$animals = $newPost->getCategoryAll("2");
if (isset($_POST['btnFilter'])) {
    $animals = $filter->FilterAnimals($_POST);
}
if (isset($_POST['btnBack'])) {
    $animals = $newPost->getAllAnimal();
}

require_once "view/posts/animal.view.php";