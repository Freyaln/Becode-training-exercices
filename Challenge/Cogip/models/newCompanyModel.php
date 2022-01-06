<?php
require 'connect.php';

class NewCompany
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }
    public function showCompanyType($pdo)
    {
        return $this->connexion->query('SELECT id, type FROM types')->fetchAll();
    }

    public function addNewCompany($companyName, $country, $TVANumber, $companyType)
    {
        $request = $this->connexion->prepare('INSERT INTO companies(name, country, VAT_number, `type_id`)
        VALUES(?, ?, ?, ?)');
        $request->execute(array(
            $companyName,
            $country,
            $TVANumber,
            $companyType
        ));
    }
}
