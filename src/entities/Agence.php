<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="agence")
 **/
class Agence
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $numero;
    /** @Column(type="string") **/
    private $adresse;
   
     /**
     * One agence has many user. This is the inverse side.
     * @OneToMany(targetEntity="user", mappedBy="agence")
     */
    private $user;
     /**
     * One agence has many client. This is the inverse side.
     * @OneToMany(targetEntity="client", mappedBy="agence")
     */
    private $client;
   
    
    public function __construct()
    {
        $this->user = new ArrayCollection();
       // $this->compte = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

   
    
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
    public function getCompte()
    {
        return $this->compte;
    }
    public function setCompte($compte)
    {
        $this->compte = $compte;
    }
    
}

?>