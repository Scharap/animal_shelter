<?php
require_once "view/parts/adminHeader.php";
?>
<form method="POST">
    <section class="banner-area-article relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">

            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        <?= $article->Title ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-12 text-right">
                    <a class="btn btn-outline-secondary" href="/adminArticle.php">Назад</a>
                </div>
            </div>

            <div class="row justify-content-center align-items-center m-5">
                <div class="col-9">
                    <p>
                        <?= $article->Description ?>
                    </p>

                </div>
            </div>
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-9">
                    <div class="home-about-right no-padding">
                        <div class="row">
                            <div class="col-9">
                                <a class="btn btn-outline-warning mx-3"
                                   href="/adminArticleUpdate.php?IdArticle=<?= $article->IdArticle; ?>">Изменить
                                </a>
                                <a class="btn btn-outline-danger mx-3"
                                   href="/adminArticleDel.php?IdArticle=<?= $article->IdArticle; ?>">Удалить
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scrollup">Наверх</div>
        </div>
    </section>
</form>
<?php
require_once "view/parts/adminFooter.php";
?>
