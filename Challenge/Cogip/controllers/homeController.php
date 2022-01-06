<?php
require 'models/homeModel.php';
/**
 * Controller of home page.
 */
class HomeController
{

    public function displayHomePage()
    {
        require 'views/home.php';
    }

    public function displayLastFiveInvoicesClientsCompanies($pdo)
    {

        $invoice = new Home($pdo);
        $list = $invoice->getLastFiveInvoices();
        $client = new Home($pdo);
        $listClients = $client->getLastFiveClients();
        $companies = new Home($pdo);
        $listCompanies = $companies->getLastFiveCompanies();
        require './views/home.php';
    }
}
