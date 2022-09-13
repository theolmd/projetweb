<html>
<head>
    <link rel="stylesheet" type="text/css" href="Style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.css"/>
    <script src="css/bootstrap-5.1.3-dist/js/bootstrap.js"></script>



<body>
<?php
if (isset($_SESSSION['user'])) {
    include_once("headerConnect.php");
} else {
    include_once("header.html");
}
/// créer l'objet concours avec l'id du jeu et l'objet jeu
include_once('RecupJeux.php');
$id=7;
$Jeu=infosJeu($id);
$Concours=infosConcours($Jeu);
?>
<!-- Titre de l'onglet -->
<title>
    <?php
    $Nom = $Jeu->getNomJeu();
    echo $Nom;?>
</title>
</head>

<!-- Division en 2 du containeur avec à gauche le logo et à droite le titre -->

            <h3 id="sfTitle">
                <?php echo $Nom;?>
            </h3>
        </div>
    </div>

        <!--Container video-->
    <H2 id="sfDemoTitle">
        Démonstration :
    </H2>
        <div id="gameVideo" class="container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/581RY6YETCs" id="sfVideo"
                    title="YouTube video player" frameborder="0" allow="accelerometer;
                    autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/4-fUoRZqNPk" id="sfVideoScnd"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <!--Container description du jeu-->
    <div class="container">
            <H2 id="sfTitleDesc">
                Description du jeu :
            </H2>
            <div id="sfGameDesc" class="container">
                <img src="img/sf.jpg" id="sfMenu">
                <div id="sfDescGame">
                    <?php
                    $description = $Jeu->getDescription();
                    echo $description;
                    ?>
                </div>
            </div>
    </div>
            <!--Container detail du jeu-->
    <div class="container" id="sfGameDetail">
        <img src="img/sheesh.jpg" id="sfCharSelect">
        <div id="sfGameCat">
        Catégorie : <?php
            $description = $Jeu->getDescription();
            echo $description;
            ?>
        </div>
    </div>



    <div class="container">
        <H2 id="sfTitleDesc">
            Le tournoi :
        </H2>
        <div class="container">
            <div id="sfTournoiDesc">
                <table>
                    <tr>
                        <td id="table1"><strong>Objectif</strong></td>
                        <td id="table"><?php
                            $Objectif = $Concours->getObjectif();
                            echo $Objectif;
                            ?></td>
                    </tr>
                    <tr>
                        <td id="table1"> <strong>Mode de jeu</strong></td>
                        <td id="table"><?php
                            $Mode = $Concours->getModeDeJeu();
                            echo $Mode;
                            ?> </td>
                    </tr>
                    <tr>
                        <td id="table1"> <strong>Règles</strong></td>
                        <td id="table"><?php
                            $Regles = $Concours->getRegles();
                            echo $Regles;
                            ?> </td>
                    </tr>
                    <tr>
                        <td id="table1"> <strong>Nombre de participants</strong></td>
                        <td id="table"><?php
                            $nbJoueur = $Concours->getNbMaxJoueur();
                            echo $nbJoueur;?> </td>
                    </tr> <tr>
                        <td id="table1"> <strong>Nombre de gagnants</strong></td>
                        <td id="table"><?php
                            $nbGagnant = $Concours->getNbGagnant();
                            echo $nbGagnant;?> </td>
                    </tr>
                    <tr>
                        <td id="table1"> <strong>Les gains</strong></td>
                        <td id="table"> <?php $gain = $Concours->getGain();
                            echo $gain;
                            ?> </td>
                    </tr>
                    <tr>
                        <td id="table1"> <strong>Le vote débute le</strong></td>
                        <td id="table"> <?php
                            $dateDebut = $Concours->getDateDeDebut();
                            echo $dateD = DateTime::createFromFormat('Y-m-d', $dateDebut)
                                ->format('d/m/Y');
                            ?> </td>
                    </tr>
                    <tr>
                        <td id="table1"> <strong>Et il se termine le</strong></td>
                        <td id="table"><?php
                            $dateFin = $Concours->getDateDeFin();
                            echo $dateF = DateTime::createFromFormat('Y-m-d', $dateFin)
                                ->format('d/m/Y');;
                            ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

<div>
    <button class="btn" id="btnVote">
        <a href="login_connect.php">
            Je veux voter !
        </a>
    </button>
</div>



</body>
<!-- Bannière de pied de page -->
<img id="banniere" src="img/banniere_16.png">

</html>