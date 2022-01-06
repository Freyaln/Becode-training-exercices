

<?php
require 'connect.php';

class DeleteInvoice
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }

    // List of all invoices //
    public function getSelectedInvoice($id)
    {
        return $this->connexion->query("SELECT * FROM invoices as i
        LEFT JOIN companies as c ON c.id = i.company_id
         WHERE i.id=$id")->fetchAll();
    }

    public function deleteInvoiceDB($id)
    {
        $delete = $this->connexion->prepare("DELETE FROM invoices 
        WHERE id = $id");
        $delete->execute();
        require 'views/deleteInvoice.php';
    }

    public function getInvoicesCompanyClients($id)
    {
        return $this->connexion->query("SELECT i.id, c.name, i.number, i.date, t.type, p.lastname, p.email, p.phone_number
        FROM invoices as i
        LEFT JOIN companies as c ON c.id = i.company_id
        LEFT JOIN types as t ON t.id = c.type_id
        LEFT JOIN  peoples as p ON p.id = i.people_id
        WHERE i.id = $id");
    }
}
