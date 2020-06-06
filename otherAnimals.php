<?php
require_once "bootstrap.php";
$titleHeader = "Другие животные";
$banner = "banner-area-other";
$animals = $newPost->getCategoryAll("3");

if (isset($_POST['btnFilter'])) {
    $animals = $filter->FilterAnimals($_POST);
}
if (isset($_POST['btnBack'])) {
    $animals = $newPost->getAllAnimal();
}

require_once "view/posts/animal.view.php";