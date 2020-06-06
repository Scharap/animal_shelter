<?php
require_once "bootstrap.php";

if(!isset($_GET['IdArticle']) || empty($_GET['IdArticle'])){
    exit;
}

$article=$newPost->getArticleOne($_GET['IdArticle']);
$titleHeader="Удаление статьи ".$article->Title;
if(!$article){
    header("Location: /admin.php");
    exit;
}

if(isset($_POST['btnDel'])) {
    $_POST['IdArticle'] = $_GET['IdArticle'];
    $admin->deleteArticle($_GET['IdArticle']);
    header("location: /adminArticleInfo.php");

    exit;
}


require_once "view/admin/view/adminArticleDel.view.php";