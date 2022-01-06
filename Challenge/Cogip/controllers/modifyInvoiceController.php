<?php
require 'models/modifyInvoiceModel.php';

class ModifyInvoiceController
{
    public function displaySelectedInvoice($pdo)
    {
        $id = $_GET['id'];
        $invoice = new ModifyInvoice($pdo);
        $selectedInvoice = $invoice->getSelectedInvoice($id);
        require 'views/modifyInvoice.php';
    }

    public function updateDB($pdo)
    {
        if (isset($_POST['formModifyInvoice'])) {
            $id = $_POST['id'];
            $number = $_POST['invoiceNumber'];
            $date = $_POST['invoiceDate'];
            $company = $_POST['companyName'];

            $modifyInvoice = new ModifyInvoice($pdo);
            $modifyInvoice->updateDatabase($id, $number, $date, $company);
        }
        require 'views/home.php';
    }
}
