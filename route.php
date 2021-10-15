<?php
require_once "Controller/BookController.php";
require_once "Controller/PublisherController.php";
require_once "Controller/LoginController.php";
require_once "Controller/PublicController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



    // lee la acción
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; // acción por defecto si no envían
    }

    $params = explode('/', $action);

    $bookController = new BookController();
    $publisherController = new PublisherController();
    $loginController = new LoginController();
    $publicController = new PublicController();

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'login': 
            $loginController->login(); 
            break;
        case 'logout': 
            $loginController->logout(); 
            break;
        case 'verify': 
            $loginController->verifyLogin(); 
            break;
        case 'admHome': 
            $loginController->showAdmHome(); 
            break;
        case 'home': 
            $publicController->showHome(); 
            break;
        case 'books': 
            $bookController->showBooks(); 
            break;
        case 'publicBooks': 
            $publicController->showPublicBooks(); 
            break;
        case 'createBook': 
            $bookController->createBook(); 
            break;
        case 'deleteBook': 
            $bookController->deleteBook($params[1]); 
            break;
        case 'updateBook': 
            $bookController->updateBook($params[1]); 
            break;
        case 'updatePublisher': 
            $publisherController->updatePublisher($params[1]); 
            break;
        case 'formUpdateBook': 
            $bookController->viewFormUpdateBook($params[1]); 
            break;
        case 'formUpdatePublisher': 
            $publisherController->viewFormUpdatePublisher($params[1]); 
            break;
        case 'viewBook': 
            $bookController->viewBook($params[1]); 
            break;
        case 'publicViewBook': 
            $publicController->viewPublicBook($params[1]); 
            break;
        case 'category': 
            $publisherController->showCategory(); 
            break;
        case 'publicCategories': 
            $publicController->showPublicCategories(); 
            break;
        case 'createPublisher': 
            $publisherController->createPublisher(); 
            break;
        case 'deletePublisher': 
            $publisherController->deletePublisher($params[1]); 
            break;
        case 'viewPublisher': 
            $bookController->viewBooksByCategory($params[1]); 
            break;
        case 'viewPublicPublisher': 
            $publicController->publicViewBooksByCategory($params[1]); 
            break;
        default: 
            echo('404 Page not found'); 
            break;
  
        }
