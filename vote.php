<html>
<head>
    <link rel="stylesheet" type="text/css" href="Style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.css"/>
    <script src="css/bootstrap-5.1.3-dist/js/bootstrap.js"></script>

    <!-- Titre de l'onglet -->
    <title>
        Merci
    </title>
</head>
<?php
include("headerConnect.php");
include_once ("lib\user_Crud.php");
include_once ("lib\User.php");
include_once ("lib\Concours.php");
include_once ("lib\Concours_crud.php");
include_once("lib\Jeux_crud.php");
include_once("connexion.php");
include_once("RecupJeux.php");
?>


<?php
session_start();
$idVote=$_POST['Choice1'];
    $connexion = connexion();
if (is_a($connexion,  "PDO")){
{
    $unUser = $_SESSION['user'];
    $idUser = $unUser->getId();
    $CRUD_Concours = new concours_crud($connexion);
    $result = $CRUD_Concours->ajoutVote($idUser, $idVote);
}}?>

<h1>Merci d'avoir voté !</h1>
