

<?php
require 'connect.php';

class DeleteClient
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
        return $this->connexion->query("SELECT * FROM invoices as i
        LEFT JOIN companies as c ON c.id = i.company_id
         WHERE i.id=$id")->fetchAll();
    }

    public function deleteClientDB($id)
    {
        $delete = $this->connexion->prepare("DELETE FROM peoples
        WHERE id = ?");
        $delete->execute($id);
        require 'views/deleteClient.php';
    }

    public function getInvoicesCompanyClients($id)
    {
        return $this->connexion->query("SELECT c.name, i.number, i.date, p.firstname, p.lastname, p.email, p.phone_number, p.id         
        FROM peoples as p         
        LEFT JOIN invoices as i ON i.company_id = p.company_id       
        LEFT JOIN companies as c ON c.id = p.company_id
        WHERE p.id = $id");
    }
}
