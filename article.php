<?php
require_once "bootstrap.php";
$titleHeader = "Полезные статьи";
$article=$newPost->getArticleAll();

require_once "view/posts/article.view.php";