<?php

require 'models/clientModel.php';
/**
 * Controller of home page.
 */
class ClientController
{
    public function displayClientPage($pdo)
    {
        $client = new Client($pdo);
        $listClient = $client->getCompanies();
        require 'views/client.php';
    }

    public function displayInvoicesCompanyClients($pdo)
    {
        $id = $_GET['id'];
        $client = new Client($pdo);
        $detailContactClient = $client->getInvoicesCompanyClients($id);
        require_once 'views/clientDetails.php';
    }
}
