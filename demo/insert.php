<?php

include("connect.php");
include("createTableData.php");


// INSERT database

if(isset($_POST['btn-serche'])){

    $title       = $_POST['title'];
    $image       = $_POST['image'];
    $descreption = $_POST['descreption'];
    $superficie  = $_POST['superficie'];
    $adresse     = $_POST['adresse'];
    $montant     = $_POST['montant'];
    $date        = $_POST['date'];
    $type        = $_POST['type'];

    $stmt = $db->prepare("INSERT INTO annonce(`title`,`image` , `descreption`, `superficie` , `adresse`, `montant`, `date` , `type`) 
                                        VALUES (:ti ,:im, :de , :su , :ad , :mo , :da , :ty)");

    $stmt->execute([
        'ti'  => $title,
        'im'  => $image,
        'de'  => $descreption,
        'su'  => $superficie,
        'ad'  => $adresse,
        'mo'  => $montant,
        'da'  => $date,
        'ty'  => $type 
    ]);
}; 




