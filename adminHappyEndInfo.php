<?php
require_once "bootstrap.php";

$happyEnd = $newPost->getHappyOne($_GET['IdHappy']);
$titleHeader=$happyEnd->Title;
if (!$happyEnd) {
    header("Location: /adminHappyEnd.php");
    exit;
}
require_once "view/admin/view/adminHappyEndInfo.view.php";