
<head>
    <link rel="stylesheet" type="text/css" href="navbarre.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>
    <nav>
        <div class="logo">
            <i class="fa-solid fa-gamepad"></i>
        </div>
        <ul class="menu">
            <li> <a href="Index.php">Accueil &ensp;</a></li>
            <li class="deroulant"><a href="#">Les Jeux &ensp;</a>
                <ul class="sous">
                    <li><a href="game_mario_deluxe.php">Mario Kart 8 Deluxe </a></li>
                    <li><a href="game_sims.php">Les Sims 4</a></li>
                    <li><a href="game_strt_fght.php">Street Fighter V</a></li>
                    <li><a href="game_eldenring.php">Elden Ring</a></li>
                </ul>
            </li>
            <li><a href="vote_choices.php">Les votes</a></li>
            <li class="deroulant"><a href="#">Mon profil &ensp;</a>
                <ul class="sous">
                    <li><a href="profile.php">Mes informations</a></li>
                    <li><a href="game_sims.php">Mon vote</a></li>
                    <li> <form action="Index.php" method ="POST">
                            <button class="btn" type="submit" name="deconnexion" value="deconnexion">Se déconnecter</button>
                        </form></li>
                </ul>

        </ul>
    </nav>

</header>

<section class="heroe">



</section></body>