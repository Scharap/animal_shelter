<?php
require_once "bootstrap.php";

if (!isset($_GET['IdHappy']) || empty($_GET['IdHappy'])) {
    exit;
}

$happyEnd = $newPost->getHappyOne($_GET['IdHappy']);
$titleHeader="Изменить историю о ".$happyEnd->Title;
if (!$happyEnd) {
    header("Location: /adminHappyEnd.php");
    exit;
}

if (isset($_POST['btnUpd'])) {

    $_POST['Photo'] = $happyEnd->Photo;

    if (isset($_FILES['Photo']) && !empty($_FILES['Photo']['name'])) {
        $fileName = $_FILES['Photo']['name'];
        $fileTmpName = $_FILES['Photo']['tmp_name'];
        $fileType = $_FILES['Photo']['type'];
        $fileError = $_FILES['Photo']['error'];
        $fileSize = $_FILES['Photo']['size'];

        $fileExtension = strtolower(end(explode('.', $fileName)));
        $fileName = explode('.', $fileName)[0];

        $extensions = ['jpg', 'jpeg', 'png'];

        $_POST['Photo'] = $happyEnd->Photo;
        $photo = $_POST['Photo'];

        $fileNameNew = "";

        if (strlen($photo) > 0) {
            if (file_exists('img/Happy End/' . $_POST['Photo'])) {
                $photo = $fileNameNew;
                unlink('img/Happy End/' . $_POST['Photo']);
            }
        } else $photo = $fileNameNew;

        if (in_array($fileExtension, $extensions)) {
            if ($fileSize < 5000000) {
                if ($fileError === 0) {
                    $fileNameNew = "$fileName.$fileExtension";

                    if (move_uploaded_file($fileTmpName, 'img/Happy End/' . $fileNameNew)) {
                        $photo = $fileNameNew;
                    }
                }
            }
        }
        $_POST['Photo'] = $photo;

    }

    $_POST['IdHappy'] = $_GET['IdHappy'];
    $upd = $admin->updateHappyEnd($_POST);

    header("location: /adminHappyEnd.php");
    exit;
}

require_once "view/admin/view/adminUpdateHappyEnd.view.php";