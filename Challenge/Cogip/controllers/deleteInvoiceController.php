<?php
require 'models/deleteInvoiceModel.php';

class DeleteInvoiceController
{
    public function displaySelectedInvoice($pdo)
    {
        $id = $_GET['id'];
        $invoice = new DeleteInvoice($pdo);
        $list = $invoice->getInvoicesCompanyClients($id);
        require 'views/deleteInvoice.php';
    }

    public function deleteInvoice($pdo)
    {
        if (isset($_POST['formDeleteInvoice'])) {
            $id = $_POST['id'];

            $deleteInvoice = new DeleteInvoice($pdo);
            $deleteInvoice->deleteInvoiceDB($id);
        }
    }
}
