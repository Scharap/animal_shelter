<?php
require_once "bootstrap.php";
$titleHeader="Стать волонтером";
if(isset($_POST['btnPost'])){

    $id=$newPost->insertVolunteer($_POST);
    header("location: /volunteer.php");
    exit;
}


require_once "view/posts/volunteer.view.php";