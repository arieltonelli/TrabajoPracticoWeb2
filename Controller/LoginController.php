<?php

require_once "./Model/LoginModel.php";
require_once "./View/LoginView.php";
require_once "./Helpers/AuthHelper.php";

class LoginController{

    private $model;
    private $view;
    private $AuthHelper;

    function __construct(){
        $this->model = new LoginModel();

        $this->view = new LoginView();
        $this->AuthHelper = new AuthHelper();
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->ShowLogin("Te deslogueaste!");
    }

    function login(){
        $this->view->ShowLogin();

    }
    
    function showAdmHome(){
        $this->AuthHelper->checkLoggedIn();
        $this->view->ShowAdmHome();

    }
    function verifyLogin(){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];
     
            //Obtengo el usuario de la base de datos
            $user = $this->model->getUser($userEmail);
     
            //Si el usuario existe y las contraseñas coinciden
            if($user && password_verify($userPassword, $user->password)){
                session_start();
                $_SESSION["email"] = $userEmail;
                $this->view->showAdmHome();
            }else{
                $this->view->showLogin("Acceso denegado");
            }
        }
    }

    
}