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
        Jeu Les Sims 4
    </title>
</head>


<body>
<?php
include("header.php")
?>
    <!-- Division en 2 du containeur avec à gauche le logo et à droite le titre -->
    <div class="container">
        <img id="logo" src="145e7a2579034ad5a9924f4da9f494c5%20(1).png">

        <div>
            <h3 id="sfTitle">
                Les Sims 4
            </h3>
        </div>
    </div>

        <!--Container video-->
    <H2 id="sfDemoTitle">
        Démonstration :
    </H2>
        <div id="gameVideo" class="container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WIlLzDQuZkg" id="sfVideo"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/TjHiO3VedX4" id="sfVideoScnd"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                    clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <!--Container description du jeu-->
    <div class="container">
            <H2 id="sfTitleDesc">
                Description du jeu :
            </H2>
            <div id="sfGameDesc" class="container">
                <img src="sims2.jpg" id="sfMenu">
                <div id="sfDescGame">
                    Libérez votre imagination et créez un monde de Sims unique qui vous ressemble ! <br>
                    Explorez et personnalisez les moindres détails de vos Sims et de vos maisons, et bien plus encore.
                    Concevez et construisez des maisons incroyables pour chaque famille. Jouez avec la vie !
                </div>
            </div>
    </div>
            <!--Container detail du jeu-->
    <div class="container" id="sfGameDetail">
        <img src="sims1.jpg" id="sfSims">
        <div id="sfGameCat">
        Catégorie : Jeu de simulation<br>
        Date de sortie : 2 septembre 2014<br>
        Développeur :  Eric Holmberg-Weidler, Matt Yang<br>
        Supports :  PlayStation 4, Xbox One, Mac OS, Microsoft Windows <br>
        PEGI : 12+ <br>
        Nombre de jeux vendus : 200 Millions <br>
            Mode : Solo <br>
        </div>
    </div>



</body>
<!-- Bannière de pied de page -->
<img id="banniere" src="banniere_16.png">

</html>