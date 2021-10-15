<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class PublisherView{
    private $smarty;
    function __construct(){
    $this->smarty = new Smarty();
    }

    function ShowPublishers($publishers){
    $this->smarty->assign('nombre','Lista de Editoriales');
    $this->smarty->assign('publishers',$publishers);
    $this->smarty->display('templates/publisherList.tpl');
   
    }

   function showPublisher($editorial){
        $this->smarty->assign('editorial', $editorial);
        $this->smarty->display('templates/publisherDetail.tpl');
    
    }

    function showCategoryLocation(){
        header("Location: ".BASE_URL."category");

    }

    function viewFormUpdatePublisher($id){
        $this->smarty->assign('titulo', 'Modificar Editorial de la BBDD');
        $this->smarty->assign('id', $id);
        $this->smarty->display('templates/formUpdatePublisher.tpl');

    }

    
}
