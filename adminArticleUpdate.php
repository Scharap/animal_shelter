<?php
require_once "bootstrap.php";

if (!isset($_GET['IdArticle']) || empty($_GET['IdArticle'])) {
    exit;
}

$article = $newPost->getArticleOne($_GET['IdArticle']);
$titleHeader="Изменить статью ".$article->Title;
if (!$article) {
    header("Location: /adminArticle.php");
    exit;
}

if (isset($_POST['btnUpd'])) {

    $_POST['Photo'] = $article->Photo;

    if (isset($_FILES['Photo']) && !empty($_FILES['Photo']['name'])) {
        $fileName = $_FILES['Photo']['name'];
        $fileTmpName = $_FILES['Photo']['tmp_name'];
        $fileType = $_FILES['Photo']['type'];
        $fileError = $_FILES['Photo']['error'];
        $fileSize = $_FILES['Photo']['size'];

        $fileExtension = strtolower(end(explode('.', $fileName)));
        $fileName = explode('.', $fileName)[0];

        $extensions = ['jpg', 'jpeg', 'png'];

        $_POST['Photo'] = $article->Photo;
        $photo = $_POST['Photo'];

        $fileNameNew = "";

        if (strlen($photo) > 0) {
            if (file_exists('img/' . $_POST['Photo'])) {
                $photo = $fileNameNew;
                unlink('img/' . $_POST['Photo']);
            }
        } else $photo = $fileNameNew;

        if (in_array($fileExtension, $extensions)) {
            if ($fileSize < 5000000) {
                if ($fileError === 0) {
                    $fileNameNew = "$fileName.$fileExtension";

                    if (move_uploaded_file($fileTmpName, 'img/' . $fileNameNew)) {
                        $photo = $fileNameNew;
                    }
                }
            }
        }
        $_POST['Photo'] = $photo;

    }

    $_POST['IdArticle'] = $_GET['IdArticle'];
    $upd = $admin->updateArticle($_POST);
    header("location: /adminArticle.php");
    exit;

}
require_once "view/admin/view/adminUpdateArticle.view.php";