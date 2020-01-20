<?php

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass, $options);

//Fonction exemple qui permet d'interagir avec la BDD
/*function getAllTest() {
    global $pdo;

    $sql = "SELECT * FROM test";
    $req = $pdo->prepare($sql);
    $req->execute();
    $result = $req->fetchAll();
    return $result;
}*/