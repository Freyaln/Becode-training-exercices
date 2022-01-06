<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Cogip</title>
</head>

<body>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php?route=home">
                    <img src="assets/img/logo.svg" alt="logo cogip">
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="index.php?route=home">
                        Home
                    </a>
                    <a class="navbar-item" href="index.php?route=invoices">
                        Invoices
                    </a>
                    <a class="navbar-item" href="index.php?route=providers">
                        Providers
                    </a>
                    <a class="navbar-item" href="index.php?route=companies">
                        Companies
                    </a>
                    <a class="navbar-item" href="index.php?route=clients">
                        Clients
                    </a>
                    <a class="navbar-item" href="index.php?route=contacts">
                        Contacts
                    </a>
                    <div class="navbar-item">
                        <?php
                        if ($_SESSION['username'] !== 'Jean-Christian') {
                            echo "<div class='buttons'>" .
                                '<a class="button is-primary is-outlined" href="index.php?route=login">'
                                . 'Login' .
                                '</a>' .
                                '</div>';
                        }

                        if ($_SESSION['username'] == 'Jean-Christian') {
                            echo "<div class='buttons'>" .
                                '<a class="button is-primary is-outlined" href="index.php?route=home">'
                                . 'Logout' .
                                '</a>' .
                                '</div>';
                        }

                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>