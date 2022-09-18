<?php
include_once("Jeux.php");
class Jeux_CRUD
{
    private PDO $db;

    function __construct($Connexion)
    {
        $this->db = $Connexion;
    }
    public function deconnexion(): void
    {
        $this->db = null;
    }
    public function recupJeux(int $unId): ?Jeux
    {
        $id = $unId;
        $req_prepare =
            "SELECT * 
                FROM t_jeux
                WHERE jeu_id = :id";
        $requete = $this->db->prepare($req_prepare);
        $requete->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $requete->execute();
            $result = $requete->fetch(PDO::FETCH_OBJ);
            if ($result) {
                $unJeu = new Jeux($id,strval($result->jeu_nom),
                    strval($result->jeu_slogan),
                    strval($result->jeu_description),
                    strval($result->jeu_categorie),
                    strval($result->jeu_datesortie),
                    strval($result->jeu_developpeur),
                    strval($result->jeu_plateforme),
                    strval($result->jeu_pegi),
                    strval($result->jeu_nbvendu),
                    strval($result->jeu_mode)
                );

            } else {
                $unJeu = null;
            }
        } catch (PDOException $e) {
            $unJeu = null;
        }
        return $unJeu;
    }
}