<?php
require_once "bootstrap.php";

$article=$newPost->getArticleOne($_GET['IdArticle']);
$titleHeader=$article->Title;
if(!$article){
    header("Location: /article.php");
    exit;
}

require_once "view/posts/articleInfo.view.php";