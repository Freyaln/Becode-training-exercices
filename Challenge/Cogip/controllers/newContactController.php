<?php
require('models/newContactModel.php');
class NewContactController
{
    public function displayNewContactPage($pdo)
    {
        $newContact = new newContact($pdo);
        $company = $newContact->showCompany();

        if (isset($_POST['formNewContact'])) {
            $name = htmlspecialchars($_POST['name']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $companyChoice = htmlspecialchars($_POST['company']);

            if (
                !empty($name) and
                !empty($firstname) and
                !empty($phone) and
                !empty($email) and
                !empty($companyChoice)
            ) {

                $newContact->addNewContact($name, $firstname, $email, $phone, $companyChoice);
                header("location: index.php?route=contacts");
            } else {
                $message = "Complete all fields";
            }
        }
        require('views/newContact.php');
    }
}
