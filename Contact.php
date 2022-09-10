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
        Contact
</title>
</head>

<body>
<!-- Ajout de la bannière -->

        <img id="banniere" src="img/banniere_16.png">

<!-- Création de la barre de navigation avec une liste et une sous liste -->
        <nav>
            <ul>
                <li> <a href="Index.php">Accueil &ensp;</a></li>
                <li class="deroulant"><a href="#">Les Jeux &ensp;</a>
                    <ul class="sous">
                        <li><a href="#">Mario Kart 8 Deluxe </a></li>
                        <li><a href="#">Les Sims 4</a></li>
                        <li><a href="game_strt_fght.php">Street Fighter V</a></li>
                        <li><a href="#">Elden Ring</a></li>
                    </ul>
                </li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
<div class="container">
    <img id="logo" src="145e7a2579034ad5a9924f4da9f494c5%20(1).png">
    <div id="middleplane">


        <div class="contactez-nous">
            <h1>Contactez-nous</h1>
            <p>Un problème, une question, envie de nous envoyer un message ?
                N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous !</p>
            <form action="" method="post">
                <div>
                    <label for="nom">Votre nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Martin" required>
                </div>
                <div>
                    <label for="email">Votre e-mail</label>
                    <input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
                </div>
                <div>
                    <label for="sujet">Quel est le sujet de votre message ?</label>
                    <input type="text" id="sujet" name="sujet" placeholder="Demande d'informations" required>
                </div>
                <div>
                    <label for="message">Votre message</label>
                    <textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...."
                              required></textarea>
                </div>
                <div>
                    <button type="submit">Envoyer mon message</button>
                </div>
            </form>
        </div>
</div>
</div>

<img id="banniere" src="img/banniere_16.png">

</html>
