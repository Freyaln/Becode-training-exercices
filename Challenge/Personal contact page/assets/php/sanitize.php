<?php

$filtering = array(
    'company' => FILTER_SANITIZE_STRING,
    'email' => FILTER_VALIDATE_EMAIL,
    'firstname' => FILTER_SANITIZE_STRING,
    'lastname' => FILTER_SANITIZE_STRING,
    'gender' => FILTER_SANITIZE_STRING,
    'subject' => FILTER_SANITIZE_STRING,
    'message' => FILTER_SANITIZE_STRING
);

$result = filter_input_array(INPUT_POST, $filtering);
