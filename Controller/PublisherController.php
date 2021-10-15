<?php

require_once "./Model/PublisherModel.php";
require_once "./View/PublisherView.php";
require_once "./Helpers/AuthHelper.php";


class PublisherController{

    private $model;
    private $view;
    private $AuthHelper;

    function __construct(){
        $this->model = new PublisherModel();
        $this->view = new PublisherView();
        $this->AuthHelper = new AuthHelper();
    }
    function showCategory(){
        $this->AuthHelper->checkLoggedIn();
        $publishers = $this->model->getPublishers();
        $this->view->showPublishers($publishers);
       
    }
    function createPublisher(){
        $this->AuthHelper->checkLoggedIn(); 
        $this->model->insertPublisher($_POST['name'], $_POST['language']);
        $this->view->showCategoryLocation();

    }
    function deletePublisher($id){
        $this->AuthHelper->checkLoggedIn(); 
        $this->model->deletePublisherFromDB($id);
        $this->view->showCategoryLocation();
        
    }

    function viewFormUpdatePublisher($id){
        $this->AuthHelper->checkLoggedIn();
        $this->view->viewFormUpdatePublisher($id);
        
    }
    function updatePublisher($id){
        $this->AuthHelper->checkLoggedIn(); 
        $this->model->updatePublisher($_POST['id_publisher'], $_POST['name'], $_POST['language']);
        $this->view->showCategoryLocation();
        
    }
   
    function viewPublisher($id){
        $this->AuthHelper->checkLoggedIn();
        $publisher= $this->model->getPublisherbyID($id);
        $this->view->showPublisher($publisher);
    }

    
    
    
}