
<html>

<?php
if(!empty($_SESSION['user']))
{

?>
<img id="banniere" src="img/banniere_16.png">

    <!-- Création de la barre de navigation avec une liste et une sous liste -->
    <nav>
        <ul>
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
            <li><a href="Contact.php">Contact</a></li>
        </ul>
    </nav>
<?php } else {
?>
    <img id="banniere" src="img/banniere_16.png">
    <nav>
        <ul>
            <li> <a href="Index.php">Accueil &ensp;</a></li>
            <li class="deroulant"><a href="#">Les Jeux &ensp;</a>
                <ul class="sous">
                    <li><a href="game_mario_deluxe.php">Mario Kart 8 Deluxe </a></li>
                    <li><a href="game_sims.php">Les Sims 4</a></li>
                    <li><a href="game_strt_fght.php">Street Fighter V</a></li>
                    <li><a href="game_eldenring.php">Elden Ring</a></li>
                </ul>
            </li>
            <li><a href="profile.php">Mon profil</a></li>
            <li><a href="vote_choices.php">Les votes</a></li>
            <li><a href="Contact.php">Contact</a></li>
        </ul>
    </nav>




<?php }?>
</html>