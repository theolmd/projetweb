<?php
define("SERVEUR", "localhost");
define("USER", "root");
define("PWD", "");
define("BDD", "bdd_projet");

function connexion()
{
    try {
        $connexion = new PDO('mysql:host=' . SERVEUR . ';dbname=' . BDD, USER, PWD);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexionOk = $connexion;
    } catch (PDOException $e) {
        $connexionOk = $e;}
        return $connexionOk;
}
