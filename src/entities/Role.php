<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="role")
 **/
class Roles
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
   
    /** @Column(type="string") **/
    private $libelle;
   
     /**
     * One role has many user. This is the inverse side.
     * @OneToMany(targetEntity="user", mappedBy="role")
     */
    private $user;
   
   
    
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

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($lbelle)
    {
        $this->libelle = $libelle;
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