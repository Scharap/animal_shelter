<?php
require_once "bootstrap.php";
$titleHeader="Добавить статью";
if (isset($_POST['btnIns'])) {
    $fileName = $_FILES['Photo']['name'];
    $fileTmpName = $_FILES['Photo']['tmp_name'];
    $fileType = $_FILES['Photo']['type'];
    $fileError = $_FILES['Photo']['error'];
    $fileSize = $_FILES['Photo']['size'];

    $fileExtension = strtolower(end(explode('.', $fileName)));
    $fileName = explode('.', $fileName)[0];

    $extensions = ['jpg', 'jpeg', 'png'];

    $_POST['Photo'] = "default.jpg";

    if (in_array($fileExtension, $extensions)) {
        if ($fileSize < 5000000) {
            if ($fileError === 0) {
                $_POST['Photo'] = implode('.', [$fileName, $fileExtension]);
            }
        }
    }

    $id = $admin->insertArticle($_POST);
    if ($id > -1) {
        $fileDestination = "img/" . $_POST['Photo'];
        move_uploaded_file($fileTmpName, $fileDestination);
    }
    header("location: /adminArticle.php");
    exit;

}

require_once "view/admin/view/adminInsertArticle.view.php";