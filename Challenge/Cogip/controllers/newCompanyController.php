<?php
require('models/newCompanyModel.php');
class NewCompanyController
{

    public function displayNewCompanyPage($pdo)
    {
        $newCompany = new NewCompany($pdo);
        $companyTypeList = $newCompany->showCompanyType($pdo);



        $companyName = $_POST['companyName'];
        $TVANumber = $_POST['TVANumber'];
        $country = $_POST['country'];
        $companyType = $_POST['companyType'];
        //$companyTypeId = $_POST['id'];
        if (
            !empty($companyName) and
            !empty($TVANumber) and
            !empty($country) and
            !empty($companyType)
        ) {

            $newCompany->addNewCompany($companyName, $country, $TVANumber, $companyType);
            header("location: index.php?route=companies");
            require('views/newCompany.php');
        } else {
            $message = "Complete all fields";
        }

        require('views/newCompany.php');
    }
}
