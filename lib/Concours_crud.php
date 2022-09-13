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

    /// fonction pour recuperer les informations d'un concours avec l'id du jeu
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
///fonction pour récupérer le nb de vote sur un concours
    public function recupNbVote(int $id) : int
    {
        $idConcours = $id;
        $req_prepare = "SELECT COUNT(*)
                FROM t_concours 
                WHERE concours_idjeux = :idConcours
                AND concours_voteiduser IS NOT NULL";
        $requete = $this->db->prepare($req_prepare);
        $requete->bindParam(':idConcours', $idConcours, PDO::PARAM_INT);
        try {
            $requete->execute();
            $result = $requete->fetch(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            $result = null;
        }
        return $result;
    }

    public function ajoutVote(int $id_User, int $id_jeux) : bool
    {
        $idUser=$id_User;
        $idJeux = $id_jeux;
        $req_prepare = "INSERT INTO t_concours (concours_voteiduser, concours_idjeux)
                VALUES (:idUser, :idJeux) 
               ";
        $requete = $this->db->prepare($req_prepare);
        $requete->bindParam(':idUser', $idUser, PDO::PARAM_INT);
        $requete->bindParam(':idJeux', $idJeux, PDO::PARAM_INT);
        try {
            $requete->execute();
            $result = $requete->fetch(PDO::FETCH_OBJ);
            if ($result) {
                $vote=true;
            } else {
                $vote = false;}

        } catch (PDOException $e) {
            $vote=false;
        }
        return $vote;
    }
    public function verifVote(int $id_User) : bool
    {
        $idUser=$id_User;
        $req_prepare = "SELECT *
         FROM t_concours
            WHERE concours_voteiduser= :idUser
               ";
        $requete = $this->db->prepare($req_prepare);
        $requete->bindParam(':idUser', $idUser, PDO::PARAM_INT);
        try {
            $requete->execute();
            $result = $requete->fetch(PDO::FETCH_OBJ);
            if ($result = NULL) {
                $verif=true;
        } else {
                $verif = false;}}
            catch (PDOException $e) {
            $verif=false;
        }
        return $verif;
    }
}