<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

$json = file_get_contents('php://input');
//Decode json and transform it to php
$valuesSanitized = json_decode($json, true);

//Preping variable for filtering
$company = filter_var($valuesSanitized['company'], FILTER_SANITIZE_STRING);
$email = filter_var($valuesSanitized['email'], FILTER_VALIDATE_EMAIL);
$firstname = filter_var($valuesSanitized['firstname'], FILTER_SANITIZE_STRING);
$lastname = filter_var($valuesSanitized['lastname'], FILTER_SANITIZE_STRING);
$gender = filter_var($valuesSanitized['gender'], FILTER_SANITIZE_STRING);
$subject = filter_var($valuesSanitized['subject'], FILTER_SANITIZE_STRING);
$message = filter_var($valuesSanitized['message'], FILTER_SANITIZE_STRING);
$full = 'Mail from : ' . $gender . ' ' . $lastname . ' ' . $firstname . ', Email : ' . $email;


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mailout.one.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@freyling-aurelien.be';                     //SMTP username
    $mail->Password   = '**';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@freyling-aurelien.be', 'Mailer');     //Add a recipient
    $mail->addAddress('info@freyling-aurelien.be', 'Information');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = utf8_decode($subject);
    $mail->Body    =  utf8_decode($message) . '<br>' . ' -------- ' . '<br>' . utf8_decode($full);
    $mail->AltBody =  utf8_decode($message) . '<br>' . ' -------- ' . '<br>' . utf8_decode($full);

    //$mail->SMTPDebug = true;
    $mail->send();
    echo 'message send';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
