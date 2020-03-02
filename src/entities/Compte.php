<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="compte")
 **/
class Compte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    
    private $numero;
     /** @Column(type="integer") **/
    
     private $solde;
     /** @Column(type="string") **/
     private $clerip;
     /** @Column(type="date") **/
    
     private $date;
     /** @Column(type="integer") **/
    
     private $etat;
  
    /**
     * Many compte have one client. This is the owning side.
     * @ManyToOne(targetEntity="Client", inversedBy="compte")
     * @JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;
     
    /**
     * Many compte have one user. This is the owning side.
     * @ManyToOne(targetEntity="user", inversedBy="compte")
     */
    private $user;

    /**
     * One compte has many transaction. This is the inverse side.
     * @OneToMany(targetEntity="transaction", mappedBy="compte")
     */
    private $transaction;
    
    public function __construct()
    {
        $this->transaction = new ArrayCollection();
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

    public function getClient()
    {
        return $this->client;
    }
    public function setClient($client)
    {
        $this->client = $client;
    }
    public function getEtat()
    {
        return $this->etat;
    }
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getSolde()
    {
        return $this->solde;
    }
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }
    public function getCle()
    {
        return $this->clerip;
    }
    public function setCle($clerip)
    {
        $this->clerip = $clerip;
    }
}

?>