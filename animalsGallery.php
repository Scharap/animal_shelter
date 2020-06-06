<?php
require_once "bootstrap.php";
$titleHeader = "Галерея питомцев";
$banner = "banner-area-gallery";
$animals = $newPost->getAllAnimal();

if (isset($_POST['btnFilter'])) {
    $animals = $filter->FilterAnimals($_POST);
}
if (isset($_POST['btnBack'])) {
    $animals = $newPost->getAllAnimal();
}

require_once "view/posts/animal.view.php";