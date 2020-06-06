<?php
require_once "bootstrap.php";
$titleHeader="Полезные статьи";
$article=$newPost->getArticleAll();


require_once "view/admin/view/adminArticle.view.php";