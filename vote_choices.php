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
include("header.php");
include_once ("lib\user_Crud.php");
include_once ("lib\User.php");
include_once ("lib\Concours.php");
include_once ("lib\Concours_crud.php");
include_once("lib\Jeux_crud.php");
include_once("connexion.php");
include_once("RecupJeux.php");
session_start();
$connexion = connexion();
if (is_a($connexion,  "PDO")){
$Jeux1=infosJeu(6);
$Jeux2=infosJeu(7);
$Jeux3=infosJeu(8);
$Jeux4=infosJeu(9);

if(isset($_SESSION['user']))
{
$unUser=$_SESSION['user'];
$idUser=$unUser->getId();
    $CRUD_Concours= new concours_crud($connexion);
    $verif=$CRUD_Concours->verifVote($idUser);

    if($verif=true){ ?>
        <H1> Tu as déjà voté ! Reviens l'année prochaine pour un autre vote ! </H1>
    <?php }
    else { ?>

<body>
<h1> Vote pour le tournoi que tu préfères ! </h1>
<legend> Je vote pour </legend>
<form action="vote.php" method="POST">

                <input type="radio" name="Choice1" value="6" checked>
                <label for="Choice1"> <?php echo $Jeux1->GetNomjeu() ?></label>
                <input type="radio" name="Choice1" value="7">
                <label for="Choice2"><?php echo $Jeux2->GetNomjeu() ?></label>
                <input type="radio" name="Choice1" value="8">
                <label for="Choice3"><?php echo $Jeux3->GetNomjeu() ?></label>
                <input type="radio" name="Choice1" value="9">
               <label for="Choice3"><?php echo $Jeux4->GetNomjeu() ?></label>
                <button onclick="vote()" type="submit" >Voter</button>
        </form>
       <?php }

        }
else { ?>
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
