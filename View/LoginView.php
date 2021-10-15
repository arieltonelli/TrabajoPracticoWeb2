<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class LoginView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();


    }

    function ShowLogin($error = ""){
        $this->smarty->assign('titulo','Log In');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
       
    }
    
    function showAdmHome($error = ""){
        $this->smarty->assign('titulo','Bienvenido administrador/a');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/admHome.tpl');

    }
    
}