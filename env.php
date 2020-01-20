<?php

//Nommer ces variables correctement, ce fichier pourra être dans un .gitignore
$host = "localhost";
$dbname = "mvc_sansPOO;charset=utf8";
$user = "root";
$pass = "";

$projetName = "mvc_sansPOO";
$projectNameLength = strlen($projetName) + 1;
$base_url = mb_substr($_SERVER['REQUEST_URI'], 0, $projectNameLength);
