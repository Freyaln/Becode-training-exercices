<?php
require 'connect.php';

class Invoice
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }

    // List of all invoices //
    public function getAllInvoices()
    {
        return $this->connexion->query("SELECT * FROM invoices ORDER BY date ASC")->fetchAll();
    }

    public function getLastFiveInvoices()
    {
        return $this->connexion->query("SELECT * FROM invoices as i
        LEFT JOIN companies as c ON c.id = i.company_id
        ORDER BY i.id DESC LIMIT 5");
    }

    public function getInvoicesCompanyClients($id)
    {
        return $this->connexion->query("SELECT c.name, i.number, i.date, t.type, p.lastname, p.email, p.phone_number
        FROM invoices as i
        LEFT JOIN companies as c ON c.id = i.company_id
        LEFT JOIN types as t ON t.id = c.type_id
        LEFT JOIN  peoples as p ON p.id = i.people_id
        WHERE i.id = $id");
    }
}
