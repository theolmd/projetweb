<?php
include_once("headerConnect.php");
include_once("lib\User_crud.php");
include_once("connexion.php");
include_once("lib\user.php");
session_start();
$connexion = connexion();;?>
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
        Mon profil
    </title>
</head>
<h1>        Modifier mes informations
</h1>
<body>
<?php
if (is_a($connexion,  "PDO")) {
if (isset($_SESSION['user']))
{ $leUser=$_SESSION['user'];
?>

 <form action ="profile.php" method="POST">
     <div class="container">
         <label for="login" class="form-label">Adresse mail :</label>
         <input type="text" class="form-control"
                id="mail" name="mail" value="<?php echo $leUser->getEmail();?>">
         <label for="nom" class="form-label">Nom : </label>
         <input type="text" class="form-control"
                id="nom" name="nom" value="<?php echo $leUser->getNom();?>">
         <label for="prenom" class="form-label">Prénom : </label>
         <input type="text" class="form-control"
                id="prenom" name="prenom" value="<?php echo $leUser->getPrenom();?>">
         <label for="sexe" class="form-label"><b>Sexe </b></label>
         <select name="sexe" id="sexe" required>
             <option value="">--Choisissez une option--</option>
             <option value="F">F</option>
             <option value="M">M</option>
             <option value="Autres">Autre</option>
         </select> <br>
         <label for="departement" class="form-label">Département : </label>
         <input type="text" class="form-control"
                id="departement" name="departement" value="<?php echo $leUser->getDepartement();?>">
         <label for="mdp" class="form-label">Mot de passe :</label>
         <input type="password" class="form-control"
                id="mdp" name="mdp">
     </div>
    <div class="col-md-12 text-center mb-3">
        <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm" name="modifier" value="modifier"
                id="modifier" > Modifier mes informations </button>
    </div>
        <p> * Les champs sont obligatoires. </p><?php }}?>