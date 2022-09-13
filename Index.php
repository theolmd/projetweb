<html>
<head>
    <link rel="stylesheet" type="text/css" href="Style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.css"/>
    <script src="css/bootstrap-5.1.3-dist/js/bootstrap.js"></script>

    <!-- Titre de l'onglet -->
    <title>
        Page d'accueil
    </title>
</head>
<?php
if (!empty($_SESSSION['user'])) {
    include_once("headerConnect.php");
} else {
    include_once("header.html");
}
include_once('RecupJeux.php');
include_once('lib\User_crud.php');
include_once("connexion.php");

session_start();
session_destroy();

$connexion=connexion();
$id=6;
$Jeu1=infosJeu($id);
$id=8;
$Jeu2=infosJeu($id);
$id=7;
$Jeu3=infosJeu($id);
$id=9;
$Jeu4=infosJeu($id);
?>


    <?php
    if($_POST['deconnexion']="deconnexion")
    {
        $_SESSION['user']=NULL;
        include_once("header.html");
    }

    ?>
    <body>
    <H1>
        Le Festival Geek 4 Fun vous présente <br> les 4 jeux préselectionnés
    </H1>
    </div>
    </div>
<!-- Création d'un carrousel avec les images -->
<div id="presentationJeux" class="container">
        <H2>
            Les différents jeux :
        </H2>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/marioKartDeluxe.jpg" class="d-block w-100" alt="..." onclick="">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php $Nom = $Jeu1->getNomJeu();
                        echo $Nom;?></h5>
                    <p><?php $Nom = $Jeu1->getSlogan();
                        echo $Nom;?></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/sims.jpg" class="d-block w-100" alt="..." onclick="">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php $Nom = $Jeu2->getNomJeu();
                        echo $Nom;?></h5>
                    <p><?php $Nom = $Jeu2->getSlogan();
                        echo $Nom;?></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/streetFighter.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php $Nom = $Jeu3->getNomJeu();
                        echo $Nom;?></h5>
                    <p><?php $Nom = $Jeu3->getSlogan();
                        echo $Nom;?></p>
                </div>
            </div>
                <div class="carousel-item">
                    <img src="img/eldenRing.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php $Nom = $Jeu4->getNomJeu();
                            echo $Nom;?></h5>
                        <p><?php $Nom = $Jeu4->getSlogan();
                            echo $Nom;?></p>
                    </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
</div>

<!-- Création d'un containeur avec image + texte -->
<div id="explication" class="container">
    <H2>
        Pourquoi ces jeux ?
    </H2>
    <img id="image" src="img\imgIndex.jpg">
    <div id="texte">
    <p>
        Le festival Geek 4 Fun réunira les jeunes, les familles, les passionnés et les curieux autour du premier
        loisir des français qui affirme la volonté d'impulser une nouvelle dynamique territoriale.

        C'est pour cette raison que nous avons décidé de préselectionner ces jeux car ce sont des jeux indémodables
        et/ou du moment. Ces différents jeux couvrent plusieurs catégories telles que la simulation, le combat,
        l'aventure, la course.

        Ils sont également disponibles sur plusieurs supports de jeux comme la switch, le pc, etc.
    </p>
    </div>
</div>
</body>
</html>
<?php include_once("Footer.php")?>
