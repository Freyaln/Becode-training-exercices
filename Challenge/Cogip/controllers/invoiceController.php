<?php
require './models/invoiceModel.php';

class InvoiceController
{

    public function displayAllInvoices($pdo)
    {
        $invoice = new Invoice($pdo);
        $list = $invoice->getAllInvoices();
        
        require 'views/invoices.php';
    }

    public function displayInvoicesCompanyClients($pdo)
    {
        $id = $_GET['id'];
        $invoice = new Invoice($pdo);
        $list = $invoice->getInvoicesCompanyClients($id);
        require 'views/invoicesDetails.php';
    }


    public function displayNewInvoicePage($pdo)
    {
        $newInvoice = new newInvoice($pdo);
        
        require 'views/newInvoice.php';
        
    }
    
}
