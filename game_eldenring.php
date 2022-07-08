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
        Jeu Elden Ring
    </title>
</head>


<body>
    <!-- Ajout de la bannière -->
    <?php
    include("header.php")
    ?>
    <!-- Division en 2 du containeur avec à gauche le logo et à droite le titre -->
    <div class="container">
        <img id="logo" src="145e7a2579034ad5a9924f4da9f494c5%20(1).png">

        <div>
            <h3 id="sfTitle">
                Elden Ring
            </h3>
        </div>
    </div>

        <!--Container video-->
    <H2 id="sfDemoTitle">
        Démonstration : siuuuuuuuuuuuuuuuuuuuuuuuuuuu
    </H2>
        <div id="gameVideo" class="container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JldMvQMO_5U" id="sfVideo"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/VngRHfxKQ3I" id="sfVideoScnd"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <!--Container description du jeu-->
    <div class="container">
            <H2 id="sfTitleDesc">
                Description du jeu :
            </H2>
            <div id="sfGameDesc" class="container">
                <img src="elden2.jpg" id="sfMenu">
                <div id="sfDescGame">
                    Levez-vous, Sans-éclat, et puisse la grâce guider vos pas. <br>
                    Brandissez la puissance du Cercle d'Elden. Devenez Seigneur de l'Entre-terre. <br>
                    Vous qui avez péri et qui pourtant vivez, cheminez vers l'Entre-terre, par-delà la Mer de
                    brume, pour vous tenir devant le Cercle d'Elden.
                </div>
            </div>
    </div>
            <!--Container detail du jeu-->
    <div class="container" id="sfGameDetail">
        <img src="eldenring1.jpg" id="sfElden">
        <div id="sfEldent">
        Catégorie : Jeu d'aventure<br>
        Date de sortie : 25 février 2022<br>
        Développeur : FromSoftware<br>
        Supports : PlayStation 4, Xbox Series, Xbox One, PlayStation 5, Microsoft Windows<br>
        PEGI : 16+<br>
        Nombre de jeux vendus : 13 Millions <br>
            Mode : Multijoueurs <br>
        </div>
    </div>



</body>
<!-- Bannière de pied de page -->
<img id="banniere" src="banniere_16.png">

</html>