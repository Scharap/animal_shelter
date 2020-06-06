<?php
require_once "bootstrap.php";
$titleHeader="Присоединиться к нам";
$work=$newPost->getWorkAll();
$aboutIcon=$newPost->getAboutLi("Большой выбор домашних животных");

require_once "view/posts/join.view.php";