<?php

namespace src\model; 

use libs\system\Model; 
	
class UserRepository extends Model{
	

	public function __construct(){
        
		parent::__construct();
    }
    public function login($email,$pass)
    {
    return    $this->db->createQuery(" SELECT u FROM src\\entities\\User u  WHERE u.email = '$email' AND u.password ='$pass' ")->getResult();
    }
    public function getAll(){
        return $this->db->getRepository("User")->findAll();
    }
    public function get($id){
        return $this->db->getRepository("User")->find(array("id"=>$id));
    }
    public function getRoles($id){
        return $this->db->getRepository("Roles")->find(array("id"=>$id));
    }
    public function getAgences($id){
        return $this->db->getRepository("Agence")->find(array("id"=>$id));
    }
    public function insert($employer){
        $this->db->persist($employer);
        $this->db->flush();

    }
    public function update($employe){
        $e=$this->get($employe->getId());
        $e->setId($employe->getId());
        $e->setNom($employe->getNom());
        $e->setPrenom($employe->getPrenom());
        $e->setLgin($employe->getLogin());
        $e->setPwd($employe->getPwd());
        $e->setRole($employe->getRole());
        $e->setAgence($employe->getAgence());
        
        
        $this->db->flush();

    }
    public function delete($id)
    {
        $e=$this->get($id);
        $this->db->remove($e);
        $this->db->flush();
    }

}
?>