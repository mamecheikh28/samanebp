<?php
use libs\system\Controller;
use src\model\UserRepository;
use src\model\RolesRepository;
use src\model\AgenceRepository;
 class UserController extends Controller
 {
     public  static  $roles=[
         3 =>"caissiere", 1 => "admin", 2=>"responsable",4=>"Client"
     ];
     public function __construct()
     {
        parent:: __construct();
        session_start();
     }
      /** 
     * localhost/ville/localisation/
     */
    
 
     public function liste(){
       
/*
       $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
      $user = (new UserRepository())->get($user_id);
     // if(!$user || $user->getUser()->getId() == 1){
       

      return $this->view->load("User/index");*/
     
     
        /*$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
        $user = (new UserRepository())->get($user_id);
        if(!$user || $user->getRole()->getId() == 1){
            header('location: '.base_url());
            exit();*/
        
    /*   $employerdb =new UserRepository();
        
        $data['User'] = $employerdb->getAll();
       
        
        $data['listeRoles'] = self::$roles;
       // $agencedb=new AgenceRepository();
        
        $data['listUser'] = $employerdb->getAll();
     
      
     
        return $this->view->load("User/liste",$data);*/
        if(isset($_POST['enregistrer']))
         $moddl= new UserRepository();
        {
            $email = $_POST["email"];
           
            $pass  = $_POST["password"];
            $user = $model->login($email,$pass); 
           if($user){
               $_SESSION['user_id']=$user->getId();
           }
  
        }
        
        
    }
    public function insert(){
        $employedb =new EmployerRepository();
        extract($_POST);
       
        $employe = new Employer();
        $employe->setNom($nom);
       
        
        $employe->setPrenom($prenom);
        $employe->setLogin($login);
        $employe->setPwd($pwd);
        $employe->setRole($employedb->getRoles($idRole));
        $employe->setAgence($employedb->getAgences($idAgence));
      
        $employedb->insert($employe);
        return $this->liste();

    }
    public function edit($id)

    {
        $employedb =new EmployerRepository();
        $data["Employe"] =$employedb->get($id);
        $data["listeEmployer"] =$employedb->getAll();
       
        $data['listeRoles'] = self::$roles;
        $agencedb=new AgenceRepository();
        
        $data['listAgence'] = $agencedb->getAll();
     
        return $this->view->load("Employer/edit",$data);

    }
    public function update()
    {
        $employedb =new  EmployerRepository();
        extract($_POST);
       
        $employe =new Employer();
        $employe->setId($id);
        $employe->setNom($nom);
        $employe->setPrenom($prenom);
        $employe->setLogin($login);
        $employe->setPwd($pwd);
        $employe->setRole($employedb->getRoles($idRole));
        $employe->setAgence($employedb->getAgences($idAgence));
        $employedb->update($employe);
        return $this->liste();


    }
    public function delete($id)
    {
        $employedb =new EmployerRepository();
        $employedb->delete($id);
        return $this->liste();

    }
 }

?>-

