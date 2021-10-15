<?php

require_once "./Model/PublicModel.php";
require_once "./View/PublicView.php";

class PublicController{

    private $model;
    private $view;
    private $publisherModel;
    private $bookModel;


    function __construct(){
        $this->model = new PublicModel();
        $this->publicView = new PublicView();
        $this->view = new BookView();
        $this->bookModel = new BookModel();
        $this->publisherModel = new PublisherModel();
    }

    function showHome(){
        $this->publicView->showHome();  
    }

    function showPublicBooks(){
        $books = $this->bookModel->getBooks();
        $publishers = $this->publisherModel->getPublishers();
        $this->publicView->showPublicBooks($books, $publishers);  
    }

    function viewPublicBook($id){
        $book= $this->bookModel->getBook($id);
        $this->publicView->showPublicBook($book);
    }

    function publicViewBooksByCategory($id){
        $books = $this->bookModel->getBooksbyCategory($id);
        $publisher = $this->publisherModel->getPublisherByID($id);
        $this->publicView->showBooksbyCategory($books, $publisher);
    }

    function showPublicCategories(){

        $publishers = $this->publisherModel->getPublishers();
        $this->publicView->showPublicPublishers($publishers);
       
    }


}