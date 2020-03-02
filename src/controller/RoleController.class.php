<?php
use libs\system\Controller;
use src\model\RolesRepository;
 class RolesController extends Controller
 {
    public function __construct(){
        parent::__construct();
    }
    public function liste()
    {
        $rolesdb =new RolesRepository();
        $data["listeRoles"] =$rolesdb->getAll();
        return $this->view->load("Role/liste",$data);
    }
    public function insert(){
        extract($_POST);
        $roles =new Roles();
        $roles->setLibelle($libelle);
        
        $rolesdb =new RolesRepository();
        $rolesdb->insert($roles);
        return $this->liste();

    }
    public function edit($id)

    {
        $rolesdb =new RolesRepository();
        $data["Roles"] =$rolesdb->get($id);
        $data["listeRoles"] =$rolesdb->getAll();
        return $this->view->load("Role/edit",$data);

    }
    public function update()
    {
        extract($_POST);
        $roles =new Role();
        $roles->setId($id);
        $roles->setLibelle($libelle);
        
        $rolesdb =new RolesRepository();
        $rolesdb->update($roles);
        return $this->liste();


    }
    public function delete($id)
    {
        $rolesdb =new RolesRepository();
        $rolesdb->delete($id);
        return $this->liste();

    }
}
?>