<?php
if (!isset($_SESSION)) {
    session_start();
}
require('models/loginModel.php');
class LoginController
{

    public function displayLoginPage($pdo)
    {

        $login = new Login($pdo);

        if (isset($_POST["formLogin"])) {

            $username = htmlspecialchars($_POST["username"]);
            $password = sha1($_POST["password"]);

            if (!empty($username) and !empty($password)) {

                $admin = $login->getAdminCredentials($username, $password);

                if ($username == $admin['username']) {

                    $_SESSION['username'] = $admin['username'];
                    //header("Location: index.php?route=welcomeAdmin.php");

                } else {
                    $message = "Wrong user or password!";
                }
            } else {
                $message = "Complete all fields";
            }

            // si un message existe il y a eu erreur donc affiche la page login
            if ($message == "") {
                require 'views/home.php';
                //remplace break;
                return;
            }
            require('views/login.php');
            return;
        }
        require('views/login.php');
    }
    // public function displayWelcomeAdminPage(){
    //     if(isset($SESSION))
    // }

}
