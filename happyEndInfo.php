<?php
require_once "bootstrap.php";

$happyEnd=$newPost->getHappyOne($_GET['IdHappy']);
$titleHeader=$happyEnd->Title;
if(!$happyEnd){
    header("Location: /happyEnd.php");
    exit;
}

require_once "view/posts/happyEndInfo.view.php";