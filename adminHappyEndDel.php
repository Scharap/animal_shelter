<?php
require_once "bootstrap.php";

if(!isset($_GET['IdHappy']) || empty($_GET['IdHappy'])){
    exit;
}

$happyEnd=$newPost->getHappyOne($_GET['IdHappy']);
$titleHeader="Удаление истории о ".$happyEnd->Title;
if(!$happyEnd){
    header("Location: /admin.php");
    exit;
}

if(isset($_POST['btnDel'])) {
    $_POST['IdHappy'] = $_GET['IdHappy'];
    $admin->deleteHappyEnd($_GET['IdHappy']);
    header("location: /adminHappyEndInfo.php");

    exit;
}

require_once "view/admin/view/adminHappyEndDel.view.php";