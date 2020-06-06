<?php
require_once "bootstrap.php";
$titleHeader="Авторизация";
$pas="1234";
$alert="";
$style="display:none";
if(isset($_POST['btnCheck'])){
    if(isset($_POST['Password']) && !empty($_POST['Password'])){
        if($_POST['Password']==$pas){
            header("Location: /admin.php");
            exit;
        }
        else{
            $style="display:block";
            $alert="Неверный пароль!";
        }

    }
}
if(isset($_POST['btnBack'])){
    header("Location: /index.php");
    exit;

}

require_once "view/admin/view/authorization.view.php";