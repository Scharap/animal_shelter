<?php

namespace App\Db\Components;

use PDO;

class Admin
{
    public $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function insertAnimals($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO animal(IdCategory, IdBreed, IdAge, IdGender, IdColor, Nick, History, Photo)
                                             VALUE (:IdCategory, :IdBreed, :IdAge, :IdGender, :IdColor, :Nick, :History, :Photo)");
        if ($stmt->execute(
            [
                "IdCategory" => $data["IdCategory"],
                "IdBreed" => $data["IdBreed"],
                "IdAge" => $data["IdAge"],
                "IdGender" => $data["IdGender"],
                "IdColor" => $data["IdColor"],
                "Nick" => $data["Nick"],
                "History" => $data["History"],
                "Photo" => $data["Photo"]
            ])) {
            return $this->pdo->lastInsertId();
        };
        return -1;
    }

    public
    function deleteAnimal($IdAnimal)
    {
        $stmt = $this->pdo->prepare("DELETE FROM animal WHERE IdAnimal=:IdAnimal");
        if ($stmt->execute(["IdAnimal" => $IdAnimal])) {
            return 1;
        }
        return -1;
    }

    public
    function updateAnimal($data)
    {
        $stmt = $this->pdo->prepare("UPDATE animal SET IdCategory=:IdCategory, IdBreed=:IdBreed, IdAge=:IdAge, IdGender=:IdGender, IdColor=:IdColor, Nick=:Nick, History=:History, Photo=:Photo WHERE IdAnimal=:IdAnimal");


        if ($stmt->execute(
            [
                "IdAnimal" => $data["IdAnimal"],
                "IdCategory" => $data["IdCategory"],
                "IdBreed" => $data["IdBreed"],
                "IdAge" => $data["IdAge"],
                "IdGender" => $data["IdGender"],
                "IdColor" => $data["IdColor"],
                "Nick" => $data["Nick"],
                "History" => $data["History"],
                "Photo" => $data["Photo"]
            ]
        )) {
            return 1;
        };
        return -1;
    }

    public
    function getAdminSelect($table)
    {
        $stmt = $this->pdo->prepare("select * from $table");
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }

    public
    function insertArticle($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO article(Title, SubTitle, Description, Photo)
                                               VALUE (:Title, :SubTitle, :Description, :Photo)");
        if ($stmt->execute(
            [
                "Title" => $data["Title"],
                "SubTitle" => $data["SubTitle"],
                "Description" => $data["Description"],
                "Photo" => $data["Photo"]
            ]
        )) {
            return $this->pdo->lastInsertId();
        };
        return -1;
    }

    public
    function updateArticle($data)
    {
        $stmt = $this->pdo->prepare("UPDATE article SET Title=:Title, SubTitle=:SubTitle, Description=:Description, Photo=:Photo WHERE IdArticle=:IdArticle");
        if ($stmt->execute(
            [
                "IdArticle" => $data["IdArticle"],
                "Title" => $data["Title"],
                "SubTitle" => $data["SubTitle"],
                "Description" => $data["Description"],
                "Photo" => $data["Photo"]
            ]
        )) {
            return 1;
        };
        return -1;
    }

    public
    function deleteArticle($IdArticle)
    {
        $stmt = $this->pdo->prepare("DELETE FROM article WHERE IdArticle=:IdArticle");
        if ($stmt->execute(["IdArticle" => $IdArticle])) {
            return 1;
        }
        return -1;
    }

    public
    function insertHappyEnd($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO happyend(Title, SubTitle, Description, Photo)
                                               VALUE (:Title, :SubTitle, :Description, :Photo)");
        if ($stmt->execute(
            [
                "Title" => $data["Title"],
                "SubTitle" => $data["SubTitle"],
                "Description" => $data["Description"],
                "Photo" => $data["Photo"]
            ]
        )) {
            return $this->pdo->lastInsertId();
        };
        return -1;
    }

    public
    function updateHappyEnd($data)
    {
        $stmt = $this->pdo->prepare("UPDATE happyend SET Title=:Title, SubTitle=:SubTitle, Description=:Description, Photo=:Photo WHERE IdHappy=:IdHappy");
        if ($stmt->execute(
            [
                "IdHappy" => $data["IdHappy"],
                "Title" => $data["Title"],
                "SubTitle" => $data["SubTitle"],
                "Description" => $data["Description"],
                "Photo" => $data["Photo"]
            ]
        )) {
            return 1;
        };
        return -1;
    }

    public
    function deleteHappyEnd($IdHappy)
    {
        $stmt = $this->pdo->prepare("DELETE FROM happyend WHERE IdHappy=:IdHappy");
        if ($stmt->execute(["IdHappy" => $IdHappy])) {
            return 1;
        }
        return -1;
    }


    public
    function getAllVolunteer()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM volunteer ORDER BY Date DESC ");
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }

    function updatePayment($data)
    {
        $stmt = $this->pdo->prepare("UPDATE payment SET Donat=:Donat WHERE IdPayment=:IdPayment");
        if ($stmt->execute(
            [
                "IdPayment" => $data["IdPayment"],
                "Donat" => $data["Donat"]
            ]
        )) {
            return 1;
        };
        return -1;
    }

}