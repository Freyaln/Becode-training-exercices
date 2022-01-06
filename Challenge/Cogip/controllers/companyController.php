<?php

require './models/companyModel.php';
/**
 * Controller of home page.
 */
class CompanyController
{

    public function displayCompanyPage($pdo)
    {
        $company = new Company($pdo);
        $list = $company->getCompanies();
        require 'views/companies.php';
        // return $list;
    }

    public function displayCompanyInvoicesClients($pdo)
    {
        $id = $_GET['id'];
        $company = new Company($pdo);
        $list = $company->getCompanyInvoicesClients($id);
        require 'views/singleSupplier.php';
    }
}
