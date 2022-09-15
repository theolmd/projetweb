<?php
include_once("lib/Concours.php");
include_once("lib/Concours_crud.php");
include_once("lib/Jeux.php");
include_once("lib/Jeux_CRUD.php");
require_once("connexion.php");

function infosJeu(int $id) : ?Jeux
{
    $unId = $id;
    $connexion = connexion();
    $leJeu=NULL;
    if (is_a($connexion, "PDO")) {
        $Jeu1 = new Jeux_CRUD($connexion);
        $leJeu = $Jeu1->recupJeux($unId);
    }
    return $leJeu;
}
function infosConcours (Jeux $lejeu) : ?Concours
{
    $Jeu = $lejeu;
    $idJeu=$Jeu->getIdjeux();
    $connexion = connexion();
    $leConcours=NULL;
    if (is_a($connexion, "PDO")) {
        $Concours1 = new Concours_crud($connexion);
        $leConcours = $Concours1->recupConcours($idJeu);
    }
    return $leConcours;
}