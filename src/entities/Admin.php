<?php
//use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Entity @Table(name="administrateur")
 **/

class Administrateur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    
    /** @Column(type="string") **/
    private $email;
    /** @Column(type="string") **/
    private $password;
   

    public function __construct()
    {
        //$this->users = new ArrayCollection();

    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
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


   





}

?>