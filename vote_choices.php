<?php


include_once ("lib\user_Crud.php");
include_once ("lib\User.php");
include_once ("lib\Concours.php");
include_once ("lib\Concours_crud.php");
include_once("lib\Jeux_crud.php");
include_once("lib\jeux.php");
include_once("connexion.php");
include_once("RecupJeux.php");
session_start();
$connexion = connexion();?>
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
        Page de vote
    </title>
</head>
<?php
/// si la connexion est ok ajouter les jeux
if (is_a($connexion,  "PDO")){

$Jeux1=infosJeu(6);
$Jeux2=infosJeu(7);
$Jeux3=infosJeu(8);
$Jeux4=infosJeu(9);
/// si le joueur est connecté, vérifier s'il a déjà voté
if(isset($_SESSION['user']))
{
include_once("headerConnect.php");
$unUser=$_SESSION['user'];
$idUser=$unUser->getId();
    $CRUD_Concours= new concours_crud($connexion);
    $vote=$CRUD_Concours->verifVote($idUser);
    if($vote>0){
    $idJeu=$CRUD_Concours->recupIdJeuVote($idUser);
    if ($idJeu>0){
        ?>
        <H1> Tu as déjà voté pour </H1> <?php
    $jeuxChoix=infosJeu($idJeu);
    echo $jeuxChoix->GetNomjeu();?>
    <H1> ! Reviens l'année prochaine pour un autre vote ! </H1>
    <?php }}
    else { ?>

<body>
<h1> Vote pour le tournoi que tu préfères ! </h1>
<legend> Je vote pour </legend>
<form action="vote.php" method="POST">

                <input type="radio" name="Choice1" value="6" checked>
                <label for="Choice1"> <?php echo $Jeux1->GetNomjeu();
                    $CRUD_Concours= new concours_crud($connexion);
                    $nb=$CRUD_Concours->recupNbVote($Jeux1->getIdjeux());?>
                    <br><?php
                    echo $nb;?> <a> vote(s) pour ce jeu !</a> </label>
                <input type="radio" name="Choice1" value="7">
                <label for="Choice2"><?php echo $Jeux2->GetNomjeu();
                    $nb=$CRUD_Concours->recupNbVote($Jeux2->getIdjeux());?>
                    <br><?php
                    echo $nb;?> <a> vote(s) pour ce jeu !</label>
                <input type="radio" name="Choice1" value="8">
                <label for="Choice3"><?php echo $Jeux3->GetNomjeu();
                    $nb=$CRUD_Concours->recupNbVote($Jeux3->getIdjeux());?>
                    <br><?php
                    echo $nb;?> <a> vote(s) pour ce jeu !</label>
                <input type="radio" name="Choice1" value="9">
               <label for="Choice3"><?php echo $Jeux4->GetNomjeu();
                   $nb=$CRUD_Concours->recupNbVote($Jeux4->getIdjeux());?>
                   <br><?php
                   echo $nb;?> <a> vote(s) pour ce jeu !</label>
                <button onclick="vote()" type="submit" >Voter</button>
        </form>
       <?php }
/// si le user n'est pas connecté lui dire de se connecter
        }
else {     include_once("navbarre.php");
    ?>
        <H1> Pour voter il faut te connecter ! </H1>
        <form action ="login_connect.php" >
            <button class="btn-primary"> Se connecter </button> </form>
        <form action ="login_register.php" >
            <button class="btn-secondary">S'enregister</button> </form>

<?php }
      }
?>

</body>
</html>
<footer>
    <!-- Pied de page -->
    <?php
    if (isset($_SESSION['user'])) {
        include_once("footerConnect.php");
    } else {
        include_once("Footer.php");
    } ?>
</footer>