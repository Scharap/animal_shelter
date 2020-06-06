<?php
require_once "bootstrap.php";
$titleHeader="BestFriends";
$work=$newPost->getWorkAll();
$aboutIcon=$newPost->getAboutLi("Большой выбор домашних животных");

require_once "view/posts/about.view.php";