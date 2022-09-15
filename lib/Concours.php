<?php
include_once("jeux.php");
class Concours
{
    private int $idConcours;
    private string $objectif;
    private string $modeDeJeu;
    private string $regles;
    private int $nbMaxJoueur;
    private int $nbGagnant;
    private string $dateDeDebut;
    private string $dateDeFin;
    private int $voteIdUser;
    private string $gain;
    private int $idJeu;



    public function __construct()
    {
        $parametres = func_get_args();
        $nbParametres = func_num_args();

        if (method_exists($this, $function =
            '__construct' . $nbParametres)) {
            call_user_func_array(
                array($this, $function), $parametres);
        }
    }
    public function __construct11(int $idConcours, string $objectif,string $modeDeJeu, string $regles, int $nbMaxJoueur,
                                 int $nbGagnant, string $dateDeDebut, string $dateDeFin,
                                 int $voteIdUser,string $gain,  int$idJeu)
    {
        $this->idConcours = $idConcours;
        $this->objectif = $objectif;
        $this->modeDeJeu = $modeDeJeu;
        $this->regles = $regles;
        $this->nbMaxJoueur = $nbMaxJoueur;
        $this->nbGagnant = $nbGagnant;
        $this->dateDeDebut = $dateDeDebut;
        $this->dateDeFin = $dateDeFin;
        $this->voteIdUser = $voteIdUser;
        $this->gain=$gain;
        $this->idJeu=$idJeu;
    }

    public function __construct2(int $idConcours, int $voteIdUser)
    {
        $this->idJeu = $idConcours;
        $this->voteIdUser = $voteIdUser;

    }

    /**
     * @return int $idConcours
     */
    public function getIdConcours(): int
    {
        return $this->idConcours;
    }

    /**
     * @param int $idConcours
     */
    public function setIdConcours(int $idConcours): void
    {
        $this->idJeu = $idConcours;
    }

    /**
     * @return string
     */
    public function getObjectif(): string
    {
        return $this->objectif;
    }

    /**
     * @param string $objectif
     */
    public function setObjectif(string $objectif): void
    {
        $this->objectif = $objectif;
    }

    /**
     * @return string
     */
    public function getDateDeDebut(): string
    {
        return $this->dateDeDebut;
    }

    /**
     * @param string $dateDeDebut
     */
    public function setDateDeDebut(string $dateDeDebut): void
    {
        $this->dateDeDebut = $dateDeDebut;
    }

    /**
     * @return string
     */
    public function getDateDeFin(): string
    {
        return $this->dateDeFin;
    }

    /**
     * @param string $dateDeFin
     */
    public function setDateDeFin(string $dateDeFin): void
    {
        $this->dateDeFin = $dateDeFin;
    }

    /**
     * @return string
     */
    public function getModeDeJeu(): string
    {
        return $this->modeDeJeu;
    }

    /**
     * @param string $modeDeJeu
     */
    public function setModeDeJeu(string $modeDeJeu): void
    {
        $this->modeDeJeu = $modeDeJeu;
    }

    /**
     * @return int
     */
    public function getVoteIdUser(): int
    {
        return $this->voteIdUser;
    }

    /**
     * @param int $voteIdUser
     */
    public function setVoteIdUser(int $voteIdUser): void
    {
        $this->voteIdUser = $voteIdUser;
    }

    /**
     * @return string
     */
    public function getRegles(): string
    {
        return $this->regles;
    }

    /**
     * @param string $regles
     */
    public function setRegles(string $regles): void
    {
        $this->regles = $regles;
    }

    /**
     * @return int
     */
    public function getNbMaxJoueur(): int
    {
        return $this->nbMaxJoueur;
    }

    /**
     * @param int $nbMaxJoueur
     */
    public function setNbMaxJoueur(int $nbMaxJoueur): void
    {
        $this->nbMaxJoueur = $nbMaxJoueur;
    }

    /**
     * @return int
     */
    public function getNbGagnant(): int
    {
        return $this->nbGagnant;
    }

    /**
     * @param int $nbGagnant
     */
    public function setNbGagnant(int $nbGagnant): void
    {
        $this->nbGagnant = $nbGagnant;
    }

    /**
     * @return string
     */
    public function getGain(): string
    {
        return $this->gain;
    }

    /**
     * @param string $gain
     */
    public function setGain(string $gain): void
    {
        $this->gain = $gain;
    }
    /**
     * @return int
     */
    public function getIdJeu(): int
    {
        return $this->idJeu;
    }

    /**
     * @param int $idJeu
     */
    public function setIdJeu(int $idJeu): void
    {
        $this->idJeu = $idJeu;
    }
}