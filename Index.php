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
        Page d'accueil
    </title>
</head>
<?php
include("header.php")
?>
<body>

<!-- Division en 2 du containeur avec à gauche le logo et à droite le titre -->
    <div class="container">
    <img id="logo" src="145e7a2579034ad5a9924f4da9f494c5%20(1).png">
    <div id="middleplane">
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
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="marioKartDeluxe.jpg" class="d-block w-100" alt="..." onclick="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mario Kart 8 Deluxe</h5>
                    <p>Appuyez sur le champignon et affûtez vos carapaces,
                        Mario Kart 8 Deluxe va tout retourner sur Nintendo Switch !</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="sims.jpg" class="d-block w-100" alt="..." onclick="do {
                  open("")
                }">>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Les Sims 4</h5>
                    <p>Créez des Sims uniques, construisez la maison idéale, explorez des mondes animés
                        en bref : Jouez avec la vie !</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="streetFighter.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Street Fighter</h5>
                    <p>Battez-vous avec des légendes et préparez-vous à nouveau pour le combat de votre vie avec le
                        retour des tournois carrément fracassants de la légendaire série Street Fighter.</p>
                </div>
            </div>
                <div class="carousel-item">
                    <img src="eldenRing.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Elden Ring</h5>
                        <p>Un nouvel univers de fantasy, un monde grandiose à explorer et une aventure épique
                            jouable à plusieurs</p>
                    </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
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
    <img id="image" src="télécharger%20(1).jpg">
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
<!-- Bannière de pied de page -->
<img id="banniere" src="banniere_16.png">

</html>







<?php
