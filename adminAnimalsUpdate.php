<?php
require_once "bootstrap.php";

if (!isset($_GET['IdAnimal']) || empty($_GET['IdAnimal'])) {
    exit;
}

$animalInfo = $newPost->getOne($_GET['IdAnimal']);
$titleHeader = "Изменение данных о ".$animalInfo->Nick;
if (!$animalInfo) {
    header("Location: /admin.php");
    exit;
}

if (isset($_POST['btnPost'])) {

    $_POST['Photo'] = $animalInfo->Photo;

    if (isset($_FILES['Photo']) && !empty($_FILES['Photo']['name'])) {
        $fileName = $_FILES['Photo']['name'];
        $fileTmpName = $_FILES['Photo']['tmp_name'];
        $fileType = $_FILES['Photo']['type'];
        $fileError = $_FILES['Photo']['error'];
        $fileSize = $_FILES['Photo']['size'];

        $fileExtension = strtolower(end(explode('.', $fileName)));
        $fileName = explode('.', $fileName)[0];

        $extensions = ['jpg', 'jpeg', 'png'];

        $_POST['Photo'] = $animalInfo->Photo;
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

    $_POST['IdAnimal'] = $_GET['IdAnimal'];
    if (empty($_POST["IdCategory"])) {
        $_POST["IdCategory"] = $animalInfo->IdCategory;
    }
    if (empty($_POST["IdBreed"])) {
        $_POST["IdBreed"] = $animalInfo->IdBreed;
    }
    if (empty($_POST["IdAge"])) {
        $_POST["IdAge"] = $animalInfo->IdAge;
    }
    if (empty($_POST["IdGender"])) {
        $_POST["IdGender"] = $animalInfo->IdGender;
    }
    if (empty($_POST["IdColor"])) {
        $_POST["IdColor"] = $animalInfo->IdColor;
    }
    $upd = $admin->updateAnimal($_POST);

    header("location: /adminAnimalsGallery.php");
    exit;
}

if (isset($_POST['btnBack'])) {
    header("location: /adminAnimalsGallery.php");
    exit;
}
require_once "view/admin/view/adminUpdateAnimal.view.php";