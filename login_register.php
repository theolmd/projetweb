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
include("header.php")
?>
<h1> Créer un compte </h1>

<div class="container">
    <form action ="profile.php" method="POST">
        <label for="nom" class="form-label"><b>Nom</b></label>
        <input type="text" class="form-control" name="nom" >
        <label for="prenom" class="form-label"><b>Prénom</b></label>
        <input type="text" class="form-control" name="prenom" >

        <label for="email" class="form-label"><b>Email *</b></label>
        <input type="text" class="form-control" placeholder="Entrez l'adresse mail" name="mail" required>
        <label for="psw" class="form-label"><b>Mot de passe *</b></label>
        <input type="password" class="form-control" placeholder="Entrez le mot de passe" name="mdp" required>
        <label for="dateNaissane" class="form-label"><b>Date de naissance</b></label>
        <input type="date" class="form-control" name="dateNaissance" >
        <label for="sexe" class="form-label"><b>Sexe </b></label>
        <select name="sexe" id="sexe">
            <option value="">--Choisissez une option--</option>
            <option value="F">F</option>
            <option value="M">M</option>
            <option value="Autres"> </option>
        </select>
        <label for="departement" class="form-label"><b>Département</b></label>
        <input type="text" class="form-control" name="departement" >


        <button type="submit" class="btn-outline-info">S'enregistrer </button>

        <p> * Les champs sont obligatoires. </p>

</div>
</form>

<body>

</body>

<!-- Bannière de pied de page -->
<?php include("footer.php")?>
</html>
