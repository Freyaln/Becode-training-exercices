<?php

function unlog()
{
    if (isset($_POST['deconnexion'])) {

        session_unset();
        session_destroy();
        header('location: index.php');
    }
};
echo unlog();
