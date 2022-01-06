<?php

function login()
{
    session_start();

    if (isset($_SESSION['login']) && isset($_SESSION['password'])) {

        echo "Vous êtes dorénavant log à votre compte.";
        echo "<form action=\"read.php\" method=\"post\">
         <input type=\"submit\" name=\"deconnexion\" value=\"Déconnexion\">
        </form>";
    } else {
        header('location: index.php');
    }
};
echo login();


$login_valide = "abs0lut";
$psw_valide = "test";

if (isset($_POST['login']) && isset($_POST['password'])) {

    if ($login_valide == $_POST['login'] && $psw_valide == $_POST['password']) {

        session_start();

        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];

        header('location: read.php');
    } else {
        echo '<body onLoad = "alert(\'Membre inexistant\')>';
        echo '<meta http-equiv="refresh" content="0;URL=read.php">';
    }
} else {
    echo "Variables non déclarées.";
}
