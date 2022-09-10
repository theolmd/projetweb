<html>
<head>
    <link rel="stylesheet" type="text/css" href="Style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.css"/>
    <script src="css/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    <?php
    if (isset ($user))
    {
        include ("headerUser.php");
    }
    else{
        include("header.php");
    }
    ?>
    <!-- Titre de l'onglet -->
    <title>
        Jeu Mario Kart 8 Deluxe
    </title>
</head>


<body>
    <!-- Ajout de la bannière -->

    <!-- Division en 2 du containeur avec à gauche le logo et à droite le titre -->

            <h3 id="sfTitle">
                Mario Kart 8 Deluxe
            </h3>
        </div>
    </div>

        <!--Container video-->
    <H2 id="sfDemoTitle">
        Démonstration :
    </H2>
        <div id="gameVideo" class="container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/QfzTZtzfoEw" id="sfVideo"
                    title="YouTube video player" frameborder="0" allow="accelerometer;
                    autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/AOwvR3FKeRo" id="sfVideoScnd"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <!--Container description du jeu-->
    <div class="container">
            <H2 id="sfTitleDesc">
                Description du jeu :
            </H2>
            <div id="sfGameDesc" class="container">
                <img src="img/mario1.jpg" id="sfMenu">
                <div id="sfDescGame">
                Faites la course n’importe où, n’importe quand <br>
                    Disputez des courses dans pas moins de 48 circuits, incluant des pistes
                    inspirées des séries Excite Bike™ et The Legend of Zelda™.
                    Le jeu Mario Kart 8 Deluxe a 42 personnages parmi lesquels choisir –
                    la plus grande distribution dans la série!
                </div>
            </div>
    </div>
            <!--Container detail du jeu-->
    <div class="container" id="sfGameDetail">
        <img src="img/mario2.jpg" id="sfCharSelect">
        <div id="sfGameCat">
        Catégorie : Jeu de courses<br>
        Date de sortie : 28 Avril 2017<br>
        Développeur : Nintendo<br>
        Supports : Nintendo Switch<br>
        PEGI : 3+ <br>
        Nombre de jeux vendus : 200 Millions <br>
            Mode : Multijoueurs <br>
        </div>
    </div>




    <!--Container tournois-->

    <div class="container">
        <H2 id="sfTitleDesc">
            Le tournoi :
        </H2>
        <div class="container">
            <div id="sfTournoiDesc">
                Règles : <br>
                Un grand prix (4 courses), 4 poules de 12 joueurs.<br>
                Les 3 premiers gagnants de chaque poule accèdent à la finale. <br>
                Nombre de participants : 48
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