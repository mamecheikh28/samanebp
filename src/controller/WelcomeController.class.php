<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/

use libs\system\Controller;
use src\model\UserRepository;
class WelcomeController extends Controller{
    public  static  $roles=[
        3 =>"caissiere", 1 => "admin", 2=>"responsable",4=>"Client"
    ];

    public function __construct(){
        parent::__construct();
        session_start();
    }
    /** 
     * use: localhost/projectName/Welcome/
     */
    public function index(){  
       $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
      $user = (new UserRepository())->get($user_id);
        return $this->view->load("Welcome/index");  

    }  
}
?>