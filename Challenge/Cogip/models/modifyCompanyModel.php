<?php
require 'connect.php';

class ModifyCompany
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }

    // List of all invoices //
    public function getSelectedCompany($id)
    {
        return $this->connexion->query("SELECT name, VAT_number, country FROM companies
         WHERE id=$id")->fetchAll();
    }

    public function updateCompany($id, $company, $country, $VATNumber)
    {
        $update = $this->connexion->prepare("UPDATE companies
        SET name = $company, country = $country, VAT_number = $VATNumber
        WHERE id = $id");
        $update->execute();
    }
}
