<?php
require 'connect.php';

class Client
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }

    // List of all companies //
    public function getCompanies()
    {
        return $this->connexion->query("SELECT * FROM companies WHERE type_id = 2 ORDER BY name ASC")->fetchAll();
    }

    public function getInvoicesCompanyClients($id)
    {
        return $this->connexion->query("SELECT c.name, i.number, i.date, p.firstname, p.lastname, p.email, p.phone_number         
        FROM companies as c         
        LEFT JOIN invoices as i ON i.company_id = c.id       
        LEFT JOIN peoples as p ON p.company_id = c.id
        WHERE c.id = $id");
    }
}
