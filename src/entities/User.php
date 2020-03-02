<?php
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Entity @Table(name="user")
 **/

class User
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $email;
    /** @Column(type="string") **/
    private $password;
    /** @Column(type="string") **/
    private $etat;
   /**
     * Many user have one role. This is the owning side.
     * @ManyToOne(targetEntity="agence", inversedBy="user")
     * @JoinColumn(name="role_id", referencedColumnName="id")
     */
     private $role;
     /**
     * One user has many transaction. This is the inverse side.
     * @OneToMany(targetEntity="transaction", mappedBy="user")
     */
    private $transaction;

    
    /**
     * Many user have one agence. This is the owning side.
     * @ManyToOne(targetEntity="agence", inversedBy="user")
     */
    private $agence;


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

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEtat()
    {
        return $this->etat;
    }
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

   

    public function getRole()
    {
        return $this->roles;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }




}

?>