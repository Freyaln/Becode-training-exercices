<?php
require 'connect.php';

class Contacts
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }

    // List of all companies //
    public function getPeoples()
    {
        return $this->connexion->query("SELECT p.lastname, p.email, p.phone_number, p.firstname, c.name, p.id
        FROM peoples as p
        LEFT JOIN companies as c ON c.id = p.company_id");
    }

    public function getInvoicesCompanyClients($id)
    {
        return $this->connexion->query("SELECT c.name, c.id, i.number, i.date, p.firstname, p.lastname, p.email, p.phone_number         
        FROM companies as c         
        LEFT JOIN invoices as i ON i.id = c.id
        LEFT JOIN peoples as p ON p.id = i.people_id
        WHERE c.id = $id");
    }
}
