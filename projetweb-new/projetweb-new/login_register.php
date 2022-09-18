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
        Créer un compte
    </title>
</head>
<?php
include("navbarre.php")
?>
<h1> Créer un compte </h1>
<!-- Page de création de compte -->

<div id="second">
    <div class="myform form ">
        <div class="logo mb-3">
            <div class="col-md-12 text-center">
                <h1 >S'enregistrer</h1>
            </div>
        </div>
    <form action ="profile.php" method="POST">
        <div class="form-group">
        <label for="nom" class="form-label"><b>Nom</b></label>
        <input type="text" class="form-control" name="nom" >
        </div>
        <div class="form-group">
        <label for="prenom" class="form-label"><b>Prénom</b></label>
        <input type="text" class="form-control" name="prenom" >
        </div>
        <div class="form-group">
        <label for="email" class="form-label"><b>Email *</b></label>
        <input type="text" class="form-control" placeholder="Entrez l'adresse mail" name="mail" required>
        </div>
        <div class="form-group">
        <label for="psw" class="form-label"><b>Mot de passe * (8 caractères minimum)</b></label>
        <input type="password" class="form-control" placeholder="Entrez le mot de passe" name="mdp" minlength="8"
               pattern=”(?=^.{8,}$)((?=.*d)|(?=.*W+))(?![.n])(?=.*[A-Z])(?=.*[a-z]).*” required>
            <div class="alert alert-warning" role="alert">
                Le mot de passe doit contenir au minimum 8 caractères dont une majuscule, une minuscule et un caractère spécial.
            </div>
        </div>
        <div class="form-group">
        <label for="dateNaissance" class="form-label"><b>Date de naissance</b></label>
        <input type="date" class="form-control" name="dateNaissance" >
        </div>
        <label for="sexe" class="form-label"><b>Sexe </b></label>
        <select name="sexe" id="sexe">
            <option value="">--Choisissez une option--</option>
            <option value="F">F</option>
            <option value="M">M</option>
            <option value="Autres">Autre</option>
        </select> <br>
        <label for="departement" class="form-label"><b>Département</b></label>
        <input type="text" class="form-control" name="departement" >

        <div class="col-md-12 text-center mb-3">
        <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm" name="enregistrer" value="enregistrer"
                id="enregistrer" >S'enregistrer </button>

        <p> * Les champs sont obligatoires. </p>


            <div class="form-group">
                <p class="text-center">En vous inscrivant vous acceptez les
                    <a href="cgu.php">Conditions d'utilisation</a></p>
            </div>

</div>
</form>

<body>

</body>

<!-- Bannière de pied de page -->
<?php include("footer.php")?>
</html>
