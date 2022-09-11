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
<?php
include("header.php");
include_once("lib\User_crud.php");
include_once("connexion.php");
include_once("lib\user.php");?>
<h1>        Mon profil et mes informations
</h1>
<body>
<?php
session_start();
$connexion = connexion();
if (is_a($connexion,  "PDO")) {
    if (!empty($_POST['login'])){
        if(empty($_POST['mail']) || empty($_POST['mdp'])) {
            header('Location: login_connect.php');
            exit();}

        else {
             $crudUser = new user_Crud($connexion);
             $leUser = $crudUser->verifUser($_POST['mail'], $_POST['mdp']);
                 if(!($leUser==null)) {
                     $_SESSION["user"] = $leUser ?>

                         <div class="container">
                <label for="login" class="form-label">Adresse mail : </label>
                <input type="text" class="form-control"
                       id="login" name="login" disabled value="<?php echo $leUser->getEmail();?>">
                <label for="nom" class="form-label">Nom : </label>
                <input type="text" class="form-control"
                       id="nom" name="nom" disabled value="
               <?php echo $leUser->getNom();?>">
                <label for="prenom" class="form-label">Prénom : </label>
                <input type="text" class="form-control"
                       id="prenom" name="prenom" disabled value="
               <?php echo $leUser->getPrenom();?>">
            <label for="naissance" class="form-label">Date de naissance : </label>
            <input type="text" class="form-control"
                   id="datedeNaissance" name="datedeNaissance" disabled value="
               <?php $date=$leUser->getDateDeNaissance();
            $dateN = DateTime::createFromFormat('Y-m-d', $date)->format('d/m/Y');;
            echo $dateN;?>">
            <label for="sexe" class="form-label">Sexe : </label>
            <input type="text" class="form-control"
                   id="sexe" name="sexe" disabled value="
               <?php echo $leUser->getSexe();?>">
            <label for="departement" class="form-label">Département : </label>
            <input type="text" class="form-control"
                   id="departement" name="departement" disabled value="
               <?php echo $leUser->getDepartement();?>">

   <?php  }}} if(!empty($_POST['enregistrer'])) {

        $nouvUser = new User($_POST['nom'],$_POST['prenom'],
            $_POST['mail'],$_POST['dateNaissance'],$_POST['sexe'],$_POST['departement'],$_POST['mdp']);
        $crudUser = new user_Crud($connexion);
        $mail=$nouvUser->getEmail();
        $mdp=$nouvUser->getMotPasse();
        $existUser = $crudUser->controleUser($mail, $mdp);



                if($existUser==$nouvUser){
                    $nouvUser=NULL;
                    echo "Votre adresse mail est déjà utilisée.";?>

            <form action = "login_connect.php" method="post">
                <button type="submit">Se connecter</button>
            </form>


<?php }
                else {
                    $crudUser = new user_Crud($connexion);
                    $leUser = $crudUser->insertUser($nouvUser);
                    $_SESSION["user"] = $leUser; ?>



        <div class="container">
                <label for="login" class="form-label">Adresse mail : </label>
                <input type="text" class="form-control"
                       id="login" name="login" disabled value="<?php echo $leUser->getEmail();?>">
                <label for="nom" class="form-label">Nom : </label>
                <input type="text" class="form-control"
                       id="nom" name="nom" disabled value="
               <?php echo $leUser->getNom();?>">
                <label for="prenom" class="form-label">Prénom : </label>
                <input type="text" class="form-control"
                       id="prenom" name="prenom" disabled value="
               <?php echo $leUser->getPrenom();?>">
            <label for="naissance" class="form-label">Date de naissance : </label>
            <input type="text" class="form-control"
                   id="datedeNaissance" name="datedeNaissance" disabled value="
               <?php $date=$leUser->getDateDeNaissance();
            $dateN = DateTime::createFromFormat('Y-m-d', $date)->format('d/m/Y');;
            echo $dateN;?>">
            <label for="sexe" class="form-label">Sexe : </label>
            <input type="text" class="form-control"
                   id="sexe" name="sexe" disabled value="
               <?php echo $leUser->getSexe();?>">
            <label for="departement" class="form-label">Département : </label>
            <input type="text" class="form-control"
                   id="departement" name="departement" disabled value="
               <?php echo $leUser->getDepartement();?>">
        </div>
<?php } }}?>

</body>



</html>

<!-- Bannière de pied de page -->
<?php include("footer.php")?>


