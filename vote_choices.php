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
        Page de vote
    </title>
</head>
<?php
include("header.php");
session_start();

$connexion = connexion();
if (is_a($connexion,  "PDO")) {
    if (empty($_POST['login']) || empty($_POST['mdp'])) {
        header('Location: login_connect.php');
        exit();
    }
    if (!empty($_POST['login']) && !empty($_POST['mdp'])) {
        $crudUser = new user_Crud($connexion);
        $leUser = $crudUser->verifUser($_POST['login'], $_POST['mdp']);
        if (!($leUser == null)) {
            $_SESSION["user"] = $leUser;
        }
    }
}
?>

<body>

    <container>

        <img>
    </container>

</body>
</html>
