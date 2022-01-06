<?php
require 'models/modifyClientModel.php';

class ModifyClientController
{
    public function displaySelectedClient($pdo)
    {
        $id = $_GET['id'];
        $client = new ModifyClients($pdo);
        $selectedClient = $client->getSelectedClient($id);
        require 'views/modifyClients.php';
    }

    public function updateDBClient($pdo)
    {

        if (isset($_POST['formModifyClient'])) {
            $id = $_POST['id'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phoneNumber = $_POST['phoneNumber'];
            $company = $_POST['companyName'];

            $modifyClient = new Modifyclients($pdo);
            $setClient = $modifyClient->updateClient($id, $firstname, $lastname, $email, $phoneNumber, $company);
        }
        require 'views/home.php';
    }
}
