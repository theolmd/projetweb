<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS_login.css" />
    <link rel="stylesheet" type="text/css" href="Style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.css"/>
    <script src="css/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!------ Include the above in your HEAD tag ---------->
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Titre de l'onglet -->
    <title>
        Se connecter
    </title>
</head>
<?php
include("navbarre.php")
?>

<!-- Page de connexion -->

<body>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div id="first">
                <div class="myform form ">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Se connecter</h1>
                        </div>
                    </div>
                    <form action="profile.php" method="POST">
                        <div class="form-group">
                            <label for="mail">Adresse mail</label>
                            <input type="email" name="mail"  class="form-control"
                                   aria-describedby="emailHelp" placeholder="Entrer votre adresse mail">
                        </div>
                        <div class="form-group">
                            <label for="mdp">Mot de passe</label>
                            <input type="password" name="mdp"  class="form-control"
                                   aria-describedby="emailHelp" placeholder="Entrer votre mot de passe">
                        </div>
                        <div class="form-group">
                            <p class="text-center">En vous connectant vous acceptez les
                                <a href="#">Conditions d'utilisation</a></p>
                        </div>
                        <div class="col-md-12 text-center ">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="login"
                            value="login" id="login">Se connecter</button>
                        </div>
                        <div class="col-md-12 ">
                            <div class="login-or">
                                <hr class="hr-or">
                                <span class="span-or">ou</span>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p class="text-center">
                                <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                    </i> S'enregistrer avec Google
                                </a>
                            </p>
                        </div>
                        <div class="form-group">
                            <p class="text-center"> Pas de compte ? <a href="login_register.php" id="signup">
                                    Enregistrez-vous ici</a></p>
                        </div>
                    </form>

                </div>
            </div>

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
<?php include("Footer.php")?>

</html>
