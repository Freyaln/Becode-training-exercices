<?php
require('models/newInvoiceModel.php');

class NewInvoiceController
{

    public function displayNewInvoicePage($pdo)
    {
        $newInvoice = new NewInvoice($pdo);

        $company = $newInvoice->showCompanyName();

        if (isset($_POST['formNewInvoice'])) {
            $invoiceNumber = $_POST['invoiceNumber'];
            $invoiceDate = $_POST['invoiceDate'];
            $companyChoice = $_POST['companyType'];

            if (
                !empty($invoiceNumber) and
                !empty($invoiceDate) and
                !empty($companyChoice)

            ) {


                $newInvoice->addNewInvoice($invoiceNumber, $invoiceDate, $companyChoice);
                //header("location: index.php?route=invoices");
                require('views/newInvoice.php');
            } else {
                $message = "Complete all fields";
            }
        }
        require 'views/newInvoice.php';
    }
}
