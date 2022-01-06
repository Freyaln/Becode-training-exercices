<?php

require 'models/contactsModel.php';
/**
 * Controller of home page.
 */
class ContactsController
{

    public function displayContactsPage($pdo)
    {
        $peoples = new Contacts($pdo);
        $listContacts = $peoples->getPeoples();
        require 'views/contacts.php';
    }

    public function displayInvoicesCompanyClients($pdo)
    {
        $id = $_GET['id'];
        $contact = new Contacts($pdo);
        $detailContactClients = $contact->getInvoicesCompanyClients($id);
        require_once 'views/clientDetails.php';
    }
}
