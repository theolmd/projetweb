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


<!-- Création de la barre de navigation avec une liste et une sous liste -->
       <?php
       if (!empty($_SESSSION['user'])) {
           include_once("headerConnect.php");
       } else {
           include_once("navbarre.php");
       }
       include_once('lib\User_crud.php');
       include_once("connexion.php");

       session_start();
       ?>

<body>
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
</body>

<img id="banniere" src="img/banniere_16.png">

</html>
