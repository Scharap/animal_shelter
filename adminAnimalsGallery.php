<?php
require_once "bootstrap.php";
$titleHeader="Галерея питомцев";
$gallery=$newPost->getAllAnimal();
if (isset($_POST['btnFilter'])) {
    $gallery = $filter->FilterAnimals($_POST);
}
if (isset($_POST['btnBack'])) {
    $gallery = $newPost->getAllAnimal();
}

require_once "view/admin/view/adminAnimalsGallery.view.php";