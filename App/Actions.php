<?php

namespace App\Db\Components;

use mysql_xdevapi\Session;
use PDO;

session_start();

class Actions
{
    public $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    //Весь список животных
    public function getAllAnimal()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM animal");
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }

    public function getOrg(){
        $stmt = $this->pdo->prepare("SELECT * FROM organization");
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }

    //Фото
    public function getPhoto($IdAnimal)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM photoanimal WHERE IdAnimal=:IdAnimal");
        if ($stmt->execute(["IdAnimal" => $IdAnimal])) {
            return $stmt->fetchAll();
        };
        return null;
    }

    //Одно животное
    public function getOne($IdAnimal)
    {
        $stmt = $this->pdo->prepare("SELECT IdAnimal, Nick, History, Photo, a.IdCategory, category.Name as Category, a.IdBreed, breed.Name as Breed, a.IdGender, Gender, a.IdAge, Age, a.IdColor, Color FROM animal AS a
                                            INNER JOIN category ON a.IdCategory = category.IdCategory
                                            INNER JOIN breed ON a.IdBreed = breed.IdBreed
                                            INNER JOIN gender ON a.IdGender = gender.IdGender
                                            INNER JOIN age ON a.IdAge = age.IdAge
                                            INNER JOIN color ON a.IdColor = color.IdColor
                                            WHERE IdAnimal=:IdAnimal");

        if ($stmt->execute(["IdAnimal" => $IdAnimal])) {
            return $stmt->fetch();
        };
        return null;
    }

    //Поле со списком
    public function getCategoryAll($idCategory)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM animal WHERE IdCategory=:IdCategory");
        if ($stmt->execute(["IdCategory" => $idCategory])) {
            return $stmt->fetchAll();
        };
        return null;
    }

    //Получить статью
    public function getArticleAll()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM article");
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }

    public function getArticleOne($IdArticle)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM article WHERE IdArticle=:IdArticle");
        if ($stmt->execute(["IdArticle" => $IdArticle])) {
            return $stmt->fetch();
        };
        return null;
    }

    //Получить Happy
    public function getHappyAll()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM happyend");
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }

    public function getHappyOne($IdHappy)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM happyend WHERE IdHappy=:IdHappy");
        if ($stmt->execute(["IdHappy" => $IdHappy])) {
            return $stmt->fetch();
        };
        return null;
    }

    //Список работников приюта
    public function getWorkAll()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM worker");
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }

    public function getAboutLi($title)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM about WHERE Title=:Title");
        if ($stmt->execute(["Title" => $title])) {
            return $stmt->fetchAll();
        };
        return null;
    }

    public function getSelect($table)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $table");
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }

    public function getPayment($IdPayment)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM payment WHERE IdPayment=:IdPayment");
        if ($stmt->execute(["IdPayment"=>$IdPayment])) {
            return $stmt->fetch();
        };
        return null;
    }

    public function insertVolunteer($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO volunteer(Lastname, Surname, Patro, Email, Phone, Date)
                                             VALUE (:Lastname, :Surname, :Patro, :Email, :Phone, CURRENT_DATE() )");


        if ($stmt->execute(
            [
                "Lastname" => $data["Lastname"],
                "Surname" => $data["Surname"],
                "Patro" => $data["Patro"],
                "Email" => $data["Email"],
                "Phone" => $data["Phone"]
            ])) {

            return $this->pdo->lastInsertId();
        };
        return -1;
    }

}
