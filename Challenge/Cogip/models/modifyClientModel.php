<?php
require 'connect.php';

class ModifyClients
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }

    // List of all invoices //
    public function getSelectedClient($id)
    {
        return $this->connexion->query("SELECT * FROM peoples as p
        LEFT JOIN companies as c ON c.id = p.company_id
         WHERE p.id=$id")->fetchAll();
    }

    public function updateClient($id, $firstname, $lastname, $email, $phoneNumber, $company)
    {
        $update = $this->connexion->prepare("UPDATE peoples as p
        LEFT JOIN companies as c ON c.id = p.company_id 
        SET p.firstname = $firstname, p.lastname = $lastname, p.email = $email, p.phone_number = $phoneNumber, c.name = $company
        WHERE p.id = $id");
        $update->execute();
    }
}
