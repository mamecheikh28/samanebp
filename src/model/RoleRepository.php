<?php

namespace src\model; 

use libs\system\Model; 
	
class RolesRepository extends Model{
	

	public function __construct(){
		parent::__construct();
    }
    public function getAll(){
        return $this->db->getRepository("Role")->findAll();
    }
    public function get($id){
        return $this->db->getRepository("Role")->find(array("id"=>$id));
    }
    public function insert($role){
        $this->db->persist($role);
        $this->db->flush();

    }
    public function update($agence){
        $a=$this->get($agence->getId());
        $a->setId($agence->getId());
        $a->setNumero($agence->getNumero());
        $a->setAdresse($agence->getAdresse());
     
        $this->db->flush();

    }
    public function delete($id)
    {
        $a=$this->get($id);
        $this->db->remove($a);
        $this->db->flush();
    }

}
?>