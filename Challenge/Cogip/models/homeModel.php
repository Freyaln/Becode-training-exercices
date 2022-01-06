<?php
require 'connect.php';

class Home
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }

    public function getLastFiveInvoices()
    {
        return $this->connexion->query("SELECT i.id, c.name, i.date, i.number FROM invoices as i
        LEFT JOIN companies as c ON c.id = i.company_id
        ORDER BY i.id DESC LIMIT 5");
    }

    public function getLastFiveClients()
    {
        return $this->connexion->query("SELECT p.id, p.firstname, p.lastname, p.email, p.phone_number, c.name FROM peoples as p
        LEFT JOIN companies as c ON c.id = p.company_id
        ORDER BY p.id DESC LIMIT 5");
    }

    public function getLastFiveCompanies()
    {
        return $this->connexion->query("SELECT * FROM companies as c
        ORDER BY c.id DESC LIMIT 5");
    }
}
