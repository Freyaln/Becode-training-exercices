<?php

//Takes data from the input
$json = file_get_contents('php://input');

//Decode json and transform it to php
$values = json_decode($json, true);

//Preping variable for filtering
$company = filter_var($values['company'], FILTER_SANITIZE_STRING);
$email = filter_var($values['email'], FILTER_VALIDATE_EMAIL);
$firstname = filter_var($values['firstname'], FILTER_SANITIZE_STRING);
$lastname = filter_var($values['lastname'], FILTER_SANITIZE_STRING);
$gender = filter_var($values['gender'], FILTER_SANITIZE_STRING);
$subject = filter_var($values['subject'], FILTER_SANITIZE_STRING);
$message = filter_var($values['message'], FILTER_SANITIZE_STRING);

//creating the exporting array
$valuesSanitized = [];

//Checking with condition if input values are good and pushing them into $valuesSanitized array
if (strlen($company) > 2) {
    $valuesSanitized['company'] = $company;
} else {
    $valuesSanitized['company'] = "";
}

if ($email == true) {
    $valuesSanitized['email'] = $email;
} else {
    $valuesSanitized['email'] = false;
}

if (strlen($firstname) > 2) {
    $valuesSanitized['firstname'] = $firstname;
} else {
    $valuesSanitized['firstname'] = "";
}

if (strlen($lastname) > 2) {
    $valuesSanitized['lastname'] = $lastname;
} else {
    $valuesSanitized['lastname'] = "";
}

if ($gender == 'Other' or $gender == 'Ms' or $gender == 'Mr') {
    $valuesSanitized['gender'] = $gender;
} else {
    $valuesSanitized['gender'] = false;
}

if ($subject == 'Other' or $subject == 'Job' or $subject == 'Internship') {
    $valuesSanitized['subject'] = $subject;
} else {
    $valuesSanitized['subject'] = false;
}

if (strlen($message) >= 20) {
    $valuesSanitized['message'] = $message;
} else {
    $valuesSanitized['message'] = "";
}

//Creating the object to encode the array into a JSON format
class arrayValue implements JsonSerializable
{
    public function __construct(array $valuesSanitized)
    {
        $this->array = $valuesSanitized;
    }
    public function jsonSerialize()
    {
        return $this->array;
    }
}
print_r(json_encode(new arrayValue($valuesSanitized), JSON_UNESCAPED_UNICODE));
