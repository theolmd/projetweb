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
        Jeu Street Fighter
    </title>
</head>


<body>
<?php
 include("header.php");

?>
    <!-- Division en 2 du containeur avec à gauche le logo et à droite le titre -->

            <h3 id="sfTitle">
                Street Fighter V
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
                Vivez toute l'intensité du combat avec Street Fighter V ! <br>
                Choisissez parmi 16 personnages, chacun ayant son histoire et des défis d'entraînement uniques à surmonter. <br>
                Affrontez des amis en ligne ou hors ligne via les nombreuses options de combat proposées.
                </div>
            </div>
    </div>
            <!--Container detail du jeu-->
    <div class="container" id="sfGameDetail">
        <img src="img/sheesh.jpg" id="sfCharSelect">
        <div id="sfGameCat">
        Catégorie : Jeu de combat<br>
        Date de sortie : 16 Février 2016<br>
        Développeur : Capcom<br>
        Supports : PC, Playstation, Arcade<br>
        PEGI : 12+<br>
        Nombre de jeux vendus : 5,2 Millions en Décembre 2020<br>
            Mode : Multijoueurs <br>
        </div>
    </div>



    <div class="container">
        <H2 id="sfTitleDesc">
            Le tournoi :
        </H2>
        <div class="container">
            <div id="sfTournoiDesc">
                Règles : <br>
                Combats en 1 contre 1.<br>
                3 match pour 1 round.<br>
                Gagner les 5 rounds puis la finale.<br>
                Nombre de participants : 32
            </div>
        </div>
    </div>

<div>
    <button class="btn" id="btnVote">
        <a href="vote_choices.php">
            Je vote !
        </a>
    </button>
</div>



</body>
<!-- Bannière de pied de page -->
<img id="banniere" src="img/banniere_16.png">

</html>