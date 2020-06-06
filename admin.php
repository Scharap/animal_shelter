<?php
require_once "bootstrap.php";
$titleHeader="BestFriends";
$animalInfo=$newPost->getAllAnimal();
$work=$newPost->getWorkAll();
$aboutIcon=$newPost->getAboutLi("Большой выбор домашних животных");



require_once "view/admin/view/admin.view.php";