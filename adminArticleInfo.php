<?php
require_once "bootstrap.php";

$article = $newPost->getArticleOne($_GET['IdArticle']);
$titleHeader = $article->Title;
if (!$article) {
    header("Location: /adminArticle.php");
    exit;
}
require_once "view/admin/view/adminArticleInfo.view.php";