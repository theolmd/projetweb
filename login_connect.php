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
        Page de login
    </title>
</head>
<?php
include("header.php")
?>

<!-- Page de connexion -->


    <body>

    <div class="container">
        <form action ="profile.php" method="POST">
        <h1>Se connecter</h1>
            <div class ="">
        <label for="email" class="form-label"><b>Email</b></label>
        <input type="text" class="form-control" placeholder="Entrez l'adresse mail" name="mail" required>
    </div>
            <div class="">
        <label for="psw" class="form-label"><b>Mot de passe</b></label>
        <input type="password" class="form-control" placeholder="Entrez le mot de passe" name="mdp" required>
    </div>
            <div class="row">
        <button onclick=verif() type="submit" name="login" value ="login" id="login">Se connecter</button>
        </div>
            <label><a href="login_register.php">Pas de compte ? S'inscrire.</a></label>
    </div>
    </form>

    </body>
<script>
    function verif()
    //Affiche une alerte si au moins l'un des deux champs est vide
    {
        if ((document.getElementById("email").value == "") || (document.getElementById("mdp").value == ""))
        {
            alert("Erreur : veuillez compléter les deux champs avant de continuer");
        }
    }
</script>
<!-- Bannière de pied de page -->
<?php include("footer.php")?>

</html>
