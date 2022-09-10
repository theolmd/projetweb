<?php
include_once("Jeux_CRUD.php");
class Jeux
{
    private int $Idjeux;
    private string $nomjeu;
    private string $slogan;
    private string $description;
    private string $categorie;
    private string $dateSortie;
    private string $developpeur;
    private string $plateforme;
    private string $pegi;
    private string $nbJeuxVendus;
    private string $mode;

    /**
     * @param int $Idjeux
     * @param string $nomjeux
     * @param string $slogan
     * @param string $description
     * @param string $categorie
     * @param string $dateSortie
     * @param string $developpeur
     * @param string $plateforme
     * @param string $pegi
     * @param string $nbJeuxVendus
     * @param string $mode
     */

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
    public function __construct11(int $Idjeux, string $nomjeux, string $slogan,string $description, string $categorie,
                                string $dateSortie, string $developpeur, string $plateforme, string $pegi,
                                string $nbJeuxVendus, string $mode)
    {
        $this->Idjeux = $Idjeux;
        $this->nomjeux = $nomjeux;
        $this->slogan=$slogan;
        $this->description = $description;
        $this->categorie = $categorie;
        $this->dateSortie = $dateSortie;
        $this->developpeur = $developpeur;
        $this->plateforme = $plateforme;
        $this->pegi = $pegi;
        $this->nbJeuxVendus = $nbJeuxVendus;
        $this->mode = $mode;
    }


    /**
     * @return int
     */
    public function getIdjeux(): int
    {
        return $this->Idjeux;
    }

    /**
     * @param int $Idjeux
     */
    public function setIdjeux(int $Idjeux): void
    {
        $this->Idjeux = $Idjeux;
    }

    /**
     * @return string
     */
    public function getNomjeu(): string
    {
        return $this->nomjeux;
    }

    /**
     * @param string $nomjeu
     */
    public function setNomjeu(string $nomjeux): void
    {
        $this->nomjeux = $nomjeux;
    }

    /**
     * @return string
     */
    public function getSlogan(): string
    {
        return $this->slogan;
    }

    /**
     * @param string $slogan
     */
    public function setSlogan(string $slogan): void
    {
        $this->slogan = $slogan;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCategorie(): string
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string
     */
    public function getDateSortie(): string
    {
        return $this->dateSortie;
    }

    /**
     * @param string $dateSortie
     */
    public function setDateSortie(string $dateSortie): void
    {
        $this->dateSortie = $dateSortie;
    }

    /**
     * @return string
     */
    public function getDeveloppeur(): string
    {
        return $this->developpeur;
    }

    /**
     * @param string $developpeur
     */
    public function setDeveloppeur(string $developpeur): void
    {
        $this->developpeur = $developpeur;
    }

    /**
     * @return string
     */
    public function getPlateforme(): string
    {
        return $this->plateforme;
    }

    /**
     * @param string $plateforme
     */
    public function setPlateforme(string $plateforme): void
    {
        $this->plateforme = $plateforme;
    }

    /**
     * @return string
     */
    public function getPegi(): string
    {
        return $this->pegi;
    }

    /**
     * @param string $pegi
     */
    public function setPegi(string $pegi): void
    {
        $this->pegi = $pegi;
    }

    /**
     * @return string
     */
    public function getNbJeuxVendus(): string
    {
        return $this->nbJeuxVendus;
    }

    /**
     * @param int $nbJeuxVendus
     */
    public function setNbJeuxVendus(string $nbJeuxVendus): void
    {
        $this->nbJeuxVendus = $nbJeuxVendus;
    }

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     */
    public function setMode(string $mode): void
    {
        $this->mode = $mode;
    }
}