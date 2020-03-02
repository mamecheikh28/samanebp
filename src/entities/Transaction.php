<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="transaction")
 **/
class Transaction
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $numero;
    /** @Column(type="decimal") **/
    private $montant;
  
   
    /**
     * Many transaction have one compte. This is the owning side.
     * @ManyToOne(targetEntity="Compte", inversedBy="transaction")
     * @JoinColumn(name="compte_id", referencedColumnName="id")
     */
    private $compte;
    
    /**
     * Many transaction have one user. This is the owning side.
     * @ManyToOne(targetEntity="user", inversedBy="transaction")
     */
    private $user;
    
    public function __construct()
    {
       
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
    public function getCompte()
    {
        return $this->compte;
    }
    public function setCompte($compte)
    {
        $this->compte = $compte;
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
    public function setDuree($pwd)
    {
        $this->pwd = $pwd;
    }

    public function getAgence()
    {
        return $this->agence;
    }
    public function setAgence($agence)
    {
        $this->agence = $agence;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
    
}

?>