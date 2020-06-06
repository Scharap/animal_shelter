<?php
require_once "bootstrap.php";

$donat = $newPost->getSelect("payment");
$titleHeader = "Помощь приюту";
if(isset($_GET['IdPayment'])){
    if($_GET['IdPayment']==3){
        header("Location: /notice.php");
        exit;
    }
    if($_GET['IdPayment']==1){
        header("Location: /sms.php");
        exit;
    }
    if($_GET['IdPayment']==2){
        header("Location: /bank.php");
        exit;
    }
    if($_GET['IdPayment']==23){
        header("Location: /yandexMoney.php");
        exit;
    }
}

require_once "view/posts/donat.view.php";