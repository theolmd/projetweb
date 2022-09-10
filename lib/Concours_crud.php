<?php
include_once("Concours.php");
class Concours_crud
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
    public function recupConcours(int $unId): ?concours
    {
        $id = $unId;
        $req_prepare =
            "SELECT * 
                FROM t_concours 
                WHERE concours_idjeux = :id";
        $requete = $this->db->prepare($req_prepare);
        $requete->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $requete->execute();
            $result = $requete->fetch(PDO::FETCH_OBJ);
            if ($result) {
                $unConcours = new concours( intval($result->concours_id),
                    strval($result->concours_objectif),
                    strval($result->concours_modedejeu),
                    strval($result->concours_regles),
                    intval($result->concours_nbmaxjoueur),
                    intval($result->concours_nbgagnant),
                    strval($result->concours_datedebut),
                    strval($result->concours_datefin),
                    intval($result->concours_voteiduser),
                    strval($result->concours_gain), ($id)
                );

            } else {
                $unConcours = null;
            }
        } catch (PDOException $e) {
            $unConcours = null;
        }
        return $unConcours;
    }
}