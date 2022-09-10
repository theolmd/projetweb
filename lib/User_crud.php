<?php
include("user.php");
class user_Crud
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

    public function insertUser(user $unUser): bool
    {
        //récupération des valeurs
        $nom = $unUser->getNom();
        $prenom = $unUser->getPrenom();
        $email = $unUser->getEmail();
        $mdp = $unUser->getMotPasse();
        $sexe = $unUser->getsexe();
        $departement = $unUser->getDepartement();
        $dateDeNaissance = $unUser->getDatedeNaissance();
        //préparation de la requête
        $insert = $this->db->prepare("INSERT INTO NOT EXISTS user
    (user_nom, user_prenom, user_email, user_mdp,user_sexe, user_departement, user_dateDeNaissance) 
     VALUES (:nom, :prenom; :email, SHA1(:mdp), :sexe, :departement, :dateDeNaissance)");
        $insert->bindParam(':nom', $nom, PDO::PARAM_STR);
        $insert->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $insert->bindParam(':email', $email, PDO::PARAM_STR);
        $insert->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $insert->bindParam(':sexe', $sexe, PDO::PARAM_STR);
        $insert->bindParam(':departement', $departement, PDO::PARAM_STR);
        $insert->bindParam(':dateDeNaissance', $dateDeNaissance, PDO::PARAM_STR);

        try {
            $insert->execute();
            $retour = true;
        } catch (PDOException $e) {
            $retour = false;
        }
        return $retour;
    }

    public function deleteUser(user $unUser): bool
    {
        //récupération des valeurs
        $id = $unUser->getID();
        //préparation de la requête
        $delete = $this->db->prepare("DELETE FROM user
     WHERE user_id = :id");
        $delete->bindParam(':id', $id, PDO::PARAM_INT);
        try {
            $delete->execute();
            $retour = true;
        } catch (PDOException $e) {
            $retour = false;
        }
        return $retour;
    }

    public function updateUser(user $unUser, string $unNom, string $unPrenom,  string $unEmail,string $unMotPasse,
                               string $unSexe, string $unDepartement): bool
    {
        //récupération des valeurs
        $id = $unUser->getId();
        $nouvNom = $unNom;
        $nouvPrenom = $unPrenom;
        $nouvMdp = $unMotPasse;
        $nouvEmail = $unEmail;
        $nouvSexe = $unSexe;
        $nouvDepartement = $unDepartement;
        //préparation de la requête
        $update = $this->db->prepare("UPDATE user 
        SET user_nom = :nouvNom, user_prenom = :nouvPrenom, user_mdp = SHA1(:nouvMdp), user_mai = :nouvEmail,
            user_sexe= :nouvSexe, user_departement = :nouvDepartement
        WHERE id_user = :id");
        $update->bindParam(':id', $id, PDO::PARAM_INT);
        $update->bindParam(':nouvNom', $nouvNom, PDO::PARAM_STR);
        $update->bindParam(':nouvPrenom', $nouvPrenom, PDO::PARAM_STR);
        $update->bindParam(':nouvMdp', $nouvMdp, PDO::PARAM_STR);
        $update->bindParam(':nouvEmail', $nouvEmail, PDO::PARAM_STR);
        $update->bindParam(':nouvSexe', $nouvSexe, PDO::PARAM_STR);
        $update->bindParam(':nouvDepartement', $nouvDepartement, PDO::PARAM_STR);

        try {
            $update->execute();
            $retour = true;
        } catch (PDOException $e) {
            $retour = false;
        }
        return $retour;
    }

    public function recupUser(int $unId): ?user
    {
        $id = $unId;
        $req_prepare =
            "SELECT * 
                FROM user 
                WHERE user_id = :id";
        $requete = $this->db->prepare($req_prepare);
        $requete->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $requete->execute();
            $result = $requete->fetch(PDO::FETCH_OBJ);
            if ($result) {
                $user = new user($unId, strval($result->user_nom),
                    strval($result->user_prenom),
                    strval($result->user_mail),
                    strval($result->user_datedenaissance),
                    strval($result->user_sexe),
                    strval($result->user_departement),
                    strval($result->user_mdp)
                );

            } else {
                $user = null;
            }
        } catch (PDOException $e) {
            $user = null;
        }
        return $user;
    }


    public function modifMDP($email, $mdp)
    {
        //Récupération des valeurs
        //$mdp = $unUser->getMotPasse();
        //$login = $unUser->getLogin();
        //Préparation de la requête
        $req_prepare =
            "UPDATE User 
                Set user_mdp = sha1('$mdp')
                where user_email = '$email'";
        $requete = $this->db->prepare($req_prepare);

        try {
            $requete->execute();
            $result = $requete->fetch(PDO::FETCH_OBJ);
            echo "$result";
            $requeteOK = true;

        } catch (PDOException $e) {
            $user = null;
        }
        return $requeteOK;
    }


}