<?php
require 'connect.php';

class NewContact
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }
    public function showCompany()
    {
        return $this->connexion->query('SELECT id, `name` FROM companies')->fetchAll();
    }
    public function addNewContact($name, $firstname, $email, $phone, $companyChoice)
    {
        $request = $this->connexion->prepare('INSERT INTO peoples(firstname, lastname, email, phone_number, company_id)
        VALUES(?, ?, ?, ?, ?)');
        $request->execute(array(
            $name,
            $firstname,
            $email,
            $phone,
            $companyChoice
        ));

        return $request;
    }
}
