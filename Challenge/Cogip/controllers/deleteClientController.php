<?php
require 'models/deleteClientModel.php';

class DeleteClientController
{
    public function displaySelectedClient($pdo)
    {
        $id = $_GET['id'];
        $client = new DeleteClient($pdo);
        $detailContactClient = $client->getInvoicesCompanyClients($id);
        require_once 'views/deleteClient.php';
    }

    public function deleteClient($pdo)
    {
        if (isset($_POST['formDeleteClient'])) {
            $id = $_GET['id'];

            $deleteClient = new DeleteClient($pdo);
            $deleteClient->deleteClientDB($id);
        }
    }
}
