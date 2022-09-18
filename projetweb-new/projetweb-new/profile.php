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
<h1>        Mon profil et mes informations
</h1>
<body>
<?php
if (is_a($connexion,  "PDO")) {

if(isset($_POST['modifier'])) {
$connexion = connexion();
$crudUser = new user_Crud($connexion);
$unUser=$_SESSION['user'];
if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail'])
    && !empty($_POST['mdp']) && !empty($_POST['departement'])&& !empty($_POST['sexe'])) {
    $verif=$crudUser->updateUser($unUser, ($_POST['nom']), ($_POST['prenom']),($_POST['mail']), ($_POST['mdp']),
        ($_POST['departement']),($_POST['sexe']));
    $User=$crudUser->recupUser(($_POST['mail']));
    $_SESSION['user']=$User;}}
if ((isset($_SESSION['user']))&& (!isset($_SESSION['modifier'])))
{ $leUser=$_SESSION['user'] ;
    ?>
    <div class="container">
        <label for="login" class="form-label">Adresse mail : </label>
        <input type="text" class="form-control"
               id="login" name="login" disabled value="<?php echo $leUser->getEmail();?>">
        <label for="nom" class="form-label">Nom : </label>
        <input type="text" class="form-control"
               id="nom" name="nom" disabled value="<?php echo $leUser->getNom();?>">
        <label for="prenom" class="form-label">Prénom : </label>
        <input type="text" class="form-control"
               id="prenom" name="prenom" disabled value="<?php echo $leUser->getPrenom();?>">
        <label for="naissance" class="form-label">Date de naissance : </label>
        <input type="text" class="form-control"
               id="datedeNaissance" name="datedeNaissance" disabled value="<?php $date=$leUser->getDateDeNaissance();
        $dateN = DateTime::createFromFormat('Y-m-d', $date)->format('d/m/Y');;
        echo $dateN;?>">
        <label for="sexe" class="form-label">Sexe : </label>
        <input type="text" class="form-control"
               id="sexe" name="sexe" disabled value="<?php echo $leUser->getSexe();?>">
        <label for="departement" class="form-label">Département : </label>
        <input type="text" class="form-control"
               id="departement" name="departement" disabled value="<?php echo $leUser->getDepartement();?>">
    </div>
    <form action="Index.php" method ="POST">
        <button type="submit" name="deconnexion" value="deconnexion">Se déconnecter</button>
    </form>
    <!-- Button modal de supression -->
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#supprModal">
        Supprimer
    </button>
    <form action="modifUser.php" >
        <button type="submit" name="modif" value="modif">Modifier ses informations</button>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="supprModal" tabindex="-1" role="dialog" aria-labelledby="supprModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="supprModalLabel">Supprimer votre compte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Voulez vous vraiment supprimer votre compte ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <form method="POST" action="Index.php">
                        <button type="submit" name="supp" value="supp"
                                class="btn btn-danger">Supprimer</button>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <?php
}
    if (!empty($_POST['login'])) /// si le joueur essaye de se loger utiliser la fonction verifUser pour se connecter
        {
        if(empty($_POST['mail']) || empty($_POST['mdp'])) {
            header('Location: login_connect.php');
            exit();}

        else {

            $crudUser = new user_Crud($connexion);
             $leUser = $crudUser->verifUser($_POST['mail'], $_POST['mdp']);
             $_SESSION['user']=$leUser;?>

                         <div class="container">
                <label for="login" class="form-label">Adresse mail : </label>
                <input type="text" class="form-control"
                       id="login" name="login" disabled value="<?php echo $leUser->getEmail();?>">
                <label for="nom" class="form-label">Nom : </label>
                <input type="text" class="form-control"
                       id="nom" name="nom" disabled value="<?php echo $leUser->getNom();?>">
                <label for="prenom" class="form-label">Prénom : </label>
                <input type="text" class="form-control"
                       id="prenom" name="prenom" disabled value="<?php echo $leUser->getPrenom();?>">
            <label for="naissance" class="form-label">Date de naissance : </label>
            <input type="text" class="form-control"
                   id="datedeNaissance" name="datedeNaissance" disabled value="<?php
            $date=$leUser->getDateDeNaissance();
            $dateN = DateTime::createFromFormat('Y-m-d', $date)->format('d/m/Y');;
            echo $dateN;?>">
            <label for="sexe" class="form-label">Sexe : </label>
            <input type="text" class="form-control"
                   id="sexe" name="sexe" disabled value="<?php echo $leUser->getSexe();?>">
            <label for="departement" class="form-label">Département : </label>
            <input type="text" class="form-control"
                   id="departement" name="departement" disabled value="<?php echo $leUser->getDepartement();?>">
                             <form action="Index.php" method ="POST">
                                 <button type="submit" name="deconnexion" value="deconnexion">Se déconnecter</button>
                             </form>
                             <!-- Button modal de supression -->
                             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#supprModal">
                                 Supprimer
                             </button>
                             <!-- Modal -->
                             <div class="modal fade" id="supprModal" tabindex="-1" role="dialog"
                                  aria-labelledby="supprModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="supprModalLabel">Supprimer votre compte</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             Voulez vous vraiment supprimer votre compte ?
                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary"
                                                     data-dismiss="modal">Annuler</button>
                                             <form method="POST" action="Index.php">
                                                 <button type="submit" name="supp" value="supp"
                                                     class="btn btn-danger">Supprimer</button>
                                             </form>
                                         </div>
                                     </div>
                                 </div>
                             </div>

   <?php  }}
    if(!empty($_POST['enregistrer'])) {

        $nouvUser = new User($_POST['nom'],$_POST['prenom'],
            $_POST['mail'],$_POST['dateNaissance'],$_POST['sexe'],$_POST['departement'],$_POST['mdp']);
        $crudUser = new user_Crud($connexion);
        $mail=$nouvUser->getEmail();
        $mdp=$nouvUser->getMotPasse();
        $existUser = $crudUser->controleUser($mail, $mdp);


/// verifier si le user n'existe pas déjà pour se créer un compte et lui afficher un message d'erreur si c'est le cas
                if($existUser==$nouvUser){
                    $nouvUser=NULL;
                    $existUser=NULL;
                    echo "Votre adresse mail est déjà utilisée.";?>

            <form action = "login_connect.php" method="post">
                <button type="submit">Se connecter</button>
            </form>


<?php }
                else { ///si le user se créer un compte et qu'il n'existe pas afficher ses infos
                    $insertUser = $crudUser->insertUser($nouvUser);
                    $leUser= $crudUser->recupUser($mail);
                    $_SESSION['user'] = $leUser; ?>



        <div class="container">
                <label for="login" class="form-label">Adresse mail : </label>
                <input type="text" class="form-control"
                       id="login" name="login" disabled value="<?php echo $leUser->getEmail();?>">
                <label for="nom" class="form-label">Nom : </label>
                <input type="text" class="form-control"
                       id="nom" name="nom" disabled value="<?php echo $leUser->getNom();?>">
                <label for="prenom" class="form-label">Prénom : </label>
                <input type="text" class="form-control"
                       id="prenom" name="prenom" disabled value="<?php echo $leUser->getPrenom();?>">
            <label for="naissance" class="form-label">Date de naissance : </label>
            <input type="text" class="form-control"
                   id="datedeNaissance" name="datedeNaissance" disabled value="<?php
            $date=$leUser->getDateDeNaissance();
            $dateN = DateTime::createFromFormat('Y-m-d', $date)->format('d/m/Y');;
            echo $dateN;?>">
            <label for="sexe" class="form-label">Sexe : </label>
            <input type="text" class="form-control"
                   id="sexe" name="sexe" disabled value="<?php echo $leUser->getSexe();?>">
            <label for="departement" class="form-label">Département : </label>
            <input type="text" class="form-control"
                   id="departement" name="departement" disabled value="<?php echo $leUser->getDepartement();?>">
        </div>
                    <form action="Index.php" method ="POST">
                        <button class ="deco" type="submit" name="deconnexion" value="deconnexion">
                            Se déconnecter</button>
                        <!-- Button modal de supression -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#supprModal">
                            Supprimer
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="supprModal" tabindex="-1" role="dialog"
                             aria-labelledby="supprModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="supprModalLabel">Supprimer votre compte</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Voulez vous vraiment supprimer votre compte ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <form method="POST" action="Index.php">
                                            <button type="submit" name="supp" value="supp"
                                                    class="btn btn-danger">Supprimer</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php } }}

   ?>




</body>



</html>

<!-- Bannière de pied de page -->
<?php include("footerConnect.php")?>


