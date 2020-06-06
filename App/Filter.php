<?php

namespace App\Db\Components;

use PDO;

class Filter
{
    public $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function FilterAnimals($data)
    {
        $sql = "SELECT * FROM animal";
        $stmt = $this->pdo->prepare($sql);

        if ($data["IdCategory"] != 0 || $data["IdBreed"] != 0 || $data["IdAge"] != 0) {
//        if ($data["IdCategory"] != 0 || $data["IdBreed"] != 0 || $data["IdAge"] != 0 || $data["IdGender"] != 0 || $data["IdColor"] != 0) {
            $sql .= " WHERE ";


            //КАТЕГОРИЯ
            if ($data["IdCategory"] != 0) {
                $sql .= "IdCategory=:IdCategory ";
                $stmt = $this->pdo->prepare($sql);

                if ($stmt->execute(["IdCategory" => $data["IdCategory"]])) {

                    //ПОРОДА
                    if ($data["IdBreed"] != 0 && $data["IdCategory"] != 0) {

                        $sql .= "AND IdBreed=:IdBreed ";
                        $stmt = $this->pdo->prepare($sql);

                        if ($stmt->execute([
                            "IdCategory" => $data["IdCategory"],
                            "IdBreed" => $data["IdBreed"]
                        ])) {

                            //ВОЗРАСТ
                            if ($data["IdAge"] != 0 && ($data["IdBreed"] != 0 || $data["IdCategory"] != 0)) {

                                $sql .= "AND IdAge=:IdAge ";
                                $stmt = $this->pdo->prepare($sql);

                                if ($stmt->execute([
                                    "IdCategory" => $data["IdCategory"],
                                    "IdBreed" => $data["IdBreed"],
                                    "IdAge" => $data["IdAge"]
                                ])) {
                                    //ВОЗРАСТ
                                    return $stmt->fetchAll();
                                };

                            };

                            //ПОРОДА
                            return $stmt->fetchAll();
                        };

                    };

                    //КАТЕГОРИЯ
                    return $stmt->fetchAll();
                };

                return null;
            }


            if ($data["IdCategory"] == 0) {

                if ($data["IdBreed"] != 0 && $data["IdCategory"] == 0) {
                    $sql .= "IdBreed=:IdBreed ";
                    $stmt = $this->pdo->prepare($sql);

                    if ($stmt->execute([
                        "IdBreed" => $data["IdBreed"]
                    ])) {
                        return $stmt->fetchAll();
                    };

                    return $stmt->fetchAll();
                };

                if ($data["IdAge"] != 0 && ($data["IdBreed"] == 0 && $data["IdCategory"] == 0)) {
                    $sql .= "IdAge=:IdAge ";
                    $stmt = $this->pdo->prepare($sql);

                    if ($stmt->execute([
                        "IdAge" => $data["IdAge"]
                    ])) {
                        return $stmt->fetchAll();
                    };

                    return $stmt->fetchAll();
                };
                return $stmt->fetchAll();

            }

        };

        return null;

    }


}