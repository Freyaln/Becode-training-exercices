<?php
//error_reporting(0);
require 'controllers/homeController.php';
require 'controllers/invoiceController.php';
require 'controllers/LoginController.php';
require 'controllers/clientController.php';
require 'controllers/contactsController.php';
require 'controllers/newInvoiceController.php';
require 'controllers/newContactController.php';
require 'controllers/newCompanyController.php';
require 'controllers/ProviderController.php';
require 'controllers/companyController.php';
require 'controllers/logoutController.php';
require 'controllers/modifyInvoiceController.php';
require 'controllers/modifyClientController.php';
require 'controllers/modifyCompanyController.php';
require 'controllers/deleteInvoiceController.php';
require 'controllers/deleteClientController.php';

$modifyInvoiceController = new ModifyInvoiceController();
$modifyCompanyController = new ModifyCompanyController();
$modifyClientController = new ModifyClientController();
$deleteInvoiceController = new DeleteInvoiceController();
$deleteClientController = new DeleteClientController();
$invoiceController = new InvoiceController();
$homeController = new HomeController();
$clientController = new ClientController();
$contactsController = new ContactsController();
$loginController = new LoginController();
$logoutController = new LogoutController();
$newInvoiceController = new NewInvoiceController();
$newContactController = new NewContactController();
$newCompanyController = new NewCompanyController();
$providerController = new ProviderController();
$companyController = new CompanyController();


if (isset($_GET['route']) or isset($_POST['route'])) {
    if ($_GET['route'] == 'home') {
        $homeController->displayLastFiveInvoicesClientsCompanies($pdo);
    }
    if ($_GET['route'] == ' ') {
        $homeController->displayLastFiveInvoicesClientsCompanies($pdo);
    }
    if ($_GET['route'] == 'invoices') {
        $invoiceController->displayAllInvoices($pdo);
    }
    if ($_GET['route'] == 'modifyInvoice') {
        $modifyInvoiceController->displaySelectedInvoice($pdo);
    }
    if ($_POST['route'] == 'modifyInvoice') {
        $modifyInvoiceController->updateDB($pdo);
    }
    if ($_GET['route'] == 'deleteInvoice') {
        $deleteInvoiceController->displaySelectedInvoice($pdo);
    }
    if ($_POST['route'] == 'deleteInvoice') {
        $deleteInvoiceController->deleteInvoice($pdo);
    }
    if ($_GET['route'] == 'deleteClients') {
        $deleteClientController->displaySelectedClient($pdo);
    }
    if ($_POST['route'] == 'deleteClients') {
        $deleteClientController->deleteClient($pdo);
    }
    if ($_GET['route'] == 'modifyClients') {
        $modifyClientController->displaySelectedClient($pdo);
    }
    if ($_POST['route'] == 'modifyClients') {
        $modifyClientController->updateDBClient($pdo);
    }
    if ($_GET['route'] == 'modifyCompanies') {
        $modifyCompanyController->displaySelectedCompany($pdo);
    }
    if ($_POST['route'] == 'modifyCompanies') {
        $modifyCompanyController->updateDBCompany($pdo);
    }
    if ($_GET['route'] == 'invoicesDetails') {
        $invoiceController->displayInvoicesCompanyClients($pdo);
    }
    if ($_GET['route'] == 'login') {
        $loginController->displayLoginPage($pdo);
    }
    if ($_POST['route'] == 'login') {
        $loginController->displayLoginPage($pdo);
    }
    if ($_GET['route'] == 'logout') {
        $logoutController->logout();
    }
    if ($_GET['route'] == 'newInvoice') {
        $newInvoiceController->displayNewInvoicePage($pdo);
    }
    if ($_POST['route'] == 'newInvoice') {
        $newInvoiceController->displayNewInvoicePage($pdo);
    }
    if ($_GET['route'] == 'newContact') {
        $newContactController->displayNewContactPage($pdo);
    }
    if ($_POST['route'] == 'newContact') {
        $newContactController->displayNewContactPage($pdo);
    }
    if ($_GET['route'] == 'newCompany') {
        $newCompanyController->displayNewCompanyPage($pdo);
    }
    if ($_POST['route'] == 'newCompany') {
        $newCompanyController->displayNewCompanyPage($pdo);
    }
    if ($_GET['route'] == 'clients') {
        $clientController->displayClientPage($pdo);
    }
    if ($_GET['route'] == 'clientDetails') {
        $clientController->displayInvoicesCompanyClients($pdo);
    }
    if ($_GET['route'] == 'contacts') {
        $contactsController->displayContactsPage($pdo);
    }
    if ($_GET['route'] == 'clientDetails') {
        $contactsController->displayInvoicesCompanyClients($pdo);
    }
    if ($_GET['route'] == 'providers') {
        $providerController->displayAllProviders($pdo);
    }
    if ($_GET['route'] == 'companies') {
        $companyController->displayCompanyPage($pdo);
    }
    if ($_GET['route'] == 'singleSupplier') {
        $companyController->displayCompanyInvoicesClients($pdo);
    }
}

if (!isset($_GET['route']) and !isset($_POST['route'])) {
    $homeController->displayLastFiveInvoicesClientsCompanies($pdo);
}
