<html>
<head>
    <link rel="stylesheet" type="text/css" href="Style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.css"/>
    <script src="css/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    <!-- Ajout de la bannière, recupération des infos du jeu et du concours -->
    <?php
    if (isset ($user))
    {
        include ("headerUser.php");
    }
    else{
        include("header.php");
    }
    include_once('RecupJeux.php');
    $id=9;
    $Jeu=infosJeu($id);
    $Concours=infosConcours($Jeu);
    ?>
    <!-- Titre de l'onglet -->
    <title>
        <?php $Nom = $Jeu->getNomJeu();
               echo $Nom;?>
    </title>
</head>


<body>
            <!-- Affichage du nom du jeu -->
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
                <img src="img/elden2.jpg" id="sfMenu">
                <!-- Affichage de la description du jeu -->
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
        <img src="img/eldenring1.jpg" id="sfElden">
        <div id="sfEldent">
        Catégorie : <?php
            $categ = $Jeu->getCategorie();
        echo $categ;
        ?><br>
        Date de sortie : <?php
            $date = $Jeu->getDateSortie();
            echo $dateS = DateTime::createFromFormat('Y-m-d', $date)->format('d/m/Y');
            ?><br>
        Développeur : <?php
            $dev = $Jeu->getDeveloppeur();
            echo $dev;
            ?><br>
        Supports : <?php
            $support = $Jeu->getPlateforme();
            echo $support;
            ?><br>
        PEGI : <?php
            $pegi = $Jeu->getPegi();
            echo $pegi;
            ?><br>
        Nombre de jeux vendus : <?php
            $nbVendus = $Jeu->getNbJeuxVendus();
            echo $nbVendus;
            ?> <br>
            Mode : <?php
            $mode = $Jeu->getMode();
            echo $mode;
            ?> <br>
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

</body></html>
<?php include_once("Footer.php")?>

