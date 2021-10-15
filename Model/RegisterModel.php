<?php

class RegisterModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_books;charset=utf8','root','');
    }
    
    function insertRegister($email, $password){
        $sentencia = $this->db->prepare("INSERT INTO users(email, clave) VALUES (?, ?)");
        $sentencia->execute(array($email, $password));
    }
}