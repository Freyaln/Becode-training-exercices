<?php
require 'models/modifyCompanyModel.php';

class ModifyCompanyController
{
    public function displaySelectedCompany($pdo)
    {
        $id = $_GET['id'];
        $company = new ModifyCompany($pdo);
        $selectedCompany = $company->getSelectedCompany($id);
        require 'views/modifyCompany.php';
    }

    public function updateDBCompany($pdo)
    {
        if (isset($_POST['formModifyCompany'])) {

            $id = $_POST['id'];
            $VATNumber = $_POST['VATNumber'];
            $country = $_POST['country'];
            $company = $_POST['companyName'];

            $modifyCompany = new ModifyCompany($pdo);
            $modifyCompany->updateCompany($id, $company, $country, $VATNumber);
        }
        if (empty($_POST)) {
            echo "vide";
        }
    }
}
