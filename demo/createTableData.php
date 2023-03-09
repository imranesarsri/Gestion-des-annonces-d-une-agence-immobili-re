<?php

// create a table "annonce" inside the database "demo"

try {
    $creatTable = "CREATE TABLE IF NOT EXISTS annonce(
        `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
        `title` VARCHAR(255) NOT NULL,
        `image` VARCHAR(50) NOT NULL,
        `descreption` VARCHAR(255) NOT NULL,
        `superficie` INT(11) NOT NULL,
        `adresse` VARCHAR(255) NOT NULL UNIQUE,
        `montant` DECIMAL(10.0) NOT NULL,
        `date` DATE  NOT NULL,
        `type` VARCHAR(255) NOT NULL
    )";
    $db->exec($creatTable);
    
} catch (PDOException $e) {
    die("error : not create table" . $e->getMessage());
}

