<?php
require 'connect.php';

class Login
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }
    // List of all invoices //
    public function getAdminCredentials($username, $password)
    {

        return $this->connexion->query("SELECT * FROM user WHERE username = '$username' AND pass_word = '$password'")->fetch();
    }
}
