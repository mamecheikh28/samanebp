<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="client")
 **/
class Client
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
     /** @Column(type="string") **/
     private $telephone;
    /** @Column(type="integer") **/
    private $salaire;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="integer") **/
    private $cni;
    /** @Column(type="string") **/
    private $login;
    /** @Column(type="string") **/
    private $pwd;
    /**
     * Many client have one agence. This is the owning side.
     * @ManyToOne(targetEntity="agence", inversedBy="agence")
     * @JoinColumn(name="agence_id", referencedColumnName="id")
     */
    private $agence;
    
    /**
     * One client has many compte. This is the inverse side.
     * @OneToMany(targetEntity="Agence", mappedBy="compte")
     */
    private $compte;
    
    public function __construct()
    {
        $this->compte = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPwd()
    {
        return $this->pwd;
    }
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    public function getCompe()
    {
        return $this->compte;
    }
    public function setCompte($compte)
    {
        $this->compte = $compte;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    public function getTel()
    {
        return $this->telephone;
    }
    public function setTel($telephone)
    {
        $this->telephone = $telephone;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }
    public function getCni()
    {
        return $this->cni;
    }
    public function setCni($cni)
    {
        $this->cni = $cni;
    }
    public function getAgence()
    {
        return $this->agence;
    }
    public function setAgence($agence)
    {
        $this->agence = $agence;
    }
    
}

?>