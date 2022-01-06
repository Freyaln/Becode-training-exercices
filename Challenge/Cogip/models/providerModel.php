 <?php
    require 'connect.php';

    class Providers
    {

        private $connexion;

        // Connexion to DB // 
        public function __construct(\PDO $pdo)
        {
            $this->connexion = $pdo;
        }

        // List of all invoices //
        public function getAllProviders()
        {
            return $this->connexion->query("SELECT c.id, c.name, c.country, c.VAT_number, t.type		
            FROM companies as c
            LEFT JOIN types as t ON t.id = c.type_id 
            WHERE t.type='Provider' 
            ORDER BY c.name ASC  ")->fetchAll();
        }

        public function getProvider($id)
        {
            return $this->connexion->query("SELECT c.id, c.name, c.country, c.VAT_number, i.number, p.firstname, p.lastname, p.email, p.phone_number
            FROM companies as c
            LEFT JOIN invoices as i ON i.company_id = c.id
            LEFT JOIN peoples as p ON p.company_id = c.id
            WHERE c.id = $id");
        }
    }
