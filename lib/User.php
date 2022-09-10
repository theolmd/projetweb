<?php

class User
{
    private string $id;
    private string $motPasse;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $dateDeNaissance;
    private string $sexe;
    private string $departement;


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

    /**
     * @param string $id
     * @param string $motPasse
     * @param string $nom
     * @param string $prenom
     * @param string $email
     * @param string $dateDeNaissance
     * @param string $sexe
     * @param string $departement
     */
    public function __construct6(string $id, string $motPasse, string $nom, string $prenom, string $email,
                                 string $dateDeNaissance, string $sexe, string $departement)
    {
        $this->id = $id;
        $this->motPasse = $motPasse;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->sexe = $sexe;
        $this->departement = $departement;
    }
    public function __construct4(string $motpasse, string $nom, string $prenom, string $email)
    {
        $this->motPasse=$motpasse;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
    }

    public function __construct2(string $email, string $motPasse)
    {
        $this->email = $email;
        $this->motPasse = $motPasse;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getDateDeNaissance(): string
    {
        return $this->dateDeNaissance;
    }

    /**
     * @param string $dateDeNaissance
     */
    public function setDateDeNaissance(string $dateDeNaissance): void
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    /**
     * @return string
     */
    public function getSexe(): string
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     */
    public function setSexe(string $sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @return string
     */
    public function getDepartement(): string
    {
        return $this->departement;
    }

    /**
     * @param string $departement
     */
    public function setDepartement(string $departement): void
    {
        $this->departement = $departement;
    }

    /**
     * @return string
     */
    public function getMotPasse(): string
    {
        return $this->motPasse;
    }

    /**
     * @param string $motPasse
     */
    public function setMotPasse(string $motPasse): void
    {
        $this->motPasse = $motPasse;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }
}