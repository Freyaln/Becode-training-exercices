<?php
require 'connect.php';

class NewInvoice
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }
    public function showCompanyName()
    {
        return $this->connexion->query('SELECT id, name FROM companies')->fetchAll();
    }
    // public function referenceCompanyName($id)
    // {
    //     return $this->connexion->query("SELECT lastname FROM peoples as p
    //     LEFT JOIN companies as c ON c.id = p.company_id
    //     WHERE c.id = $id")->fetchAll();
    // }
    public function addNewInvoice($invoiceNumber, $invoiceDate, $companyChoice)
    {


        $request = $this->connexion->prepare('INSERT INTO invoices(`number`, `date`, company_id)
        VALUES(?, ?,?)');
        $request->execute(array(
            $invoiceNumber,
            $invoiceDate,
            $companyChoice
        ));
    }
}
