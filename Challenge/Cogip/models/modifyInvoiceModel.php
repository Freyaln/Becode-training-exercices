<?php
require 'connect.php';

class ModifyInvoice
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

    public function updateDatabase($id, $number, $date, $company)
    {
        $update = $this->connexion->prepare("UPDATE invoices as i
        LEFT JOIN companies as c ON c.id = i.company_id 
        SET i.number = $number, i.date = $date, c.name = $company
        WHERE i.id = $id");
        $update->execute();
    }

    public function deleteInvoiceDB($id)
    {
        $delete = $this->connexion->prepare('DELETE FROM invoices 
        WHERE id = ?');
        $delete->execute($id);
        require 'views/deleteInvoice.php';
    }
}
