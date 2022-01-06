<?php
require 'views/header.php';
?>

<main class="container is-fluid main-container">

    <?php
    if ($_SESSION['username'] == 'Jean-Christian') {
        echo "<section class='level'>" .
            "<h1 class='level-item has-text-centered'>" . "Hello Jean-Christian ! What do you want to do ?" . "</h1>" .
            "</section>"
            . "<section class='columns is-mobile level-item has-text-centered'>"
            . "<div class='buttons column is-2 mt-5'>" .
            '<a class="button is-primary" href="index.php?route=newContact">'
            . 'New Contact' .
            '</a>' .
            '</div>'
            . "<div class='buttons column is-2 mt-5'>" .
            '<a class="button is-primary" href="index.php?route=newInvoice">'
            . 'New Invoice' .
            '</a>' .
            '</div>'
            . "<div class='buttons column is-2'>" .
            '<a class="button is-primary" href="index.php?route=newCompany">'
            . 'New Company' .
            '</a>' .
            '</div>' .
            "</section>";
    }
    if ($_SESSION['username'] !== 'Jean-Christian') {
        echo "<section class='level'>" .
            "<h1 class='level-item has-text-centered'>" .
            "Welcome to COGIP Admin Tool" .
            "</h1>" .
            "</section>";
    }
    ?>

    <article class="level-item has-text-centered">

        <h2>Last Invoices</h2>

        <table class='invoicesTable table is-striped'>
            <tr>
                <th>Date</th>
                <th>Number</th>
                <th>Company</th>

                <?php
                if ($_SESSION['username'] == 'Jean-Christian') {

                    echo "<th>Actions</th>";
                    echo "</tr>";
                    foreach ($list as $invoice) {
                        echo "<tr>";
                        echo "<td>" . $invoice['date'] . '</a>' . "</td>";
                        echo "<td>" . $invoice['number'] . "</a>" . "</td>";
                        echo "<td>" . $invoice['name'] . "</a>" . "</td>";
                        echo "<td>" . "<a href='index.php?route=modifyInvoice&id=" . $invoice['id'] . "'><img src='assets/img/edit.svg' width='28px'; height='28px';>" . "</a>" . "<a href='index.php?route=deleteInvoice&id=" . $invoice['id'] . "'><img src='assets/img/bin.svg' width='28px'; height='28px';>" . "</td>" . "</a>";
                        echo "</tr>";
                    }
                }
                if ($_SESSION['username'] !== 'Jean-Christian') {
                    echo "</tr>";
                    foreach ($list as $invoice) {
                        echo "<tr>";
                        echo "<td>" . $invoice['date'] . '</a>' . "</td>";
                        echo "<td>" . $invoice['number'] . "</a>" . "</td>";
                        echo "<td>" . $invoice['name'] . "</a>" . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
        </table>
        <br>
        <h2>Last Clients</h2>

        <table class='invoicesTable table is-striped'>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Company</th>

                <?php
                if ($_SESSION['username'] == 'Jean-Christian') {
                    echo "<th>Actions</th>";
                    echo "</tr>";
                    foreach ($listClients as $clients) {
                        echo "<tr>";
                        echo "<td>" . $clients['firstname'] . '</a>' . "</td>";
                        echo "<td>" . $clients['lastname'] . "</a>" . "</td>";
                        echo "<td>" . $clients['email'] . "</a>" . "</td>";
                        echo "<td>" . $clients['phone_number'] . "</a>" . "</td>";
                        echo "<td>" . $clients['name'] . "</a>" . "</td>";
                        echo "<td>" . "<a href='index.php?route=modifyClients&id=" . $clients['id'] . "'><img src='assets/img/edit.svg' width='28px'; height='28px';>" . "</a>" . "<a href='index.php?route=deleteClients&id=" . $clients['id'] . "'><img src='assets/img/bin.svg' width='28px'; height='28px';>" . "</td>" . "</a>";
                        echo "</tr>";
                    }
                }
                if ($_SESSION['username'] !== 'Jean-Christian') {
                    foreach ($listClients as $clients) {
                        echo "<tr>";
                        echo "<td>" . $clients['firstname'] . '</a>' . "</td>";
                        echo "<td>" . $clients['lastname'] . "</a>" . "</td>";
                        echo "<td>" . $clients['email'] . "</a>" . "</td>";
                        echo "<td>" . $clients['phone_number'] . "</a>" . "</td>";
                        echo "<td>" . $clients['name'] . "</a>" . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
        </table><br>
        <h2>Last Companies</h2>

        <table class='invoicesTable table is-striped'>
            <tr>
                <th>Company name</th>
                <th>Country</th>
                <th>VAT</th>

                <?php
                if ($_SESSION['username'] == 'Jean-Christian') {
                    echo "<th>Actions</th>";
                    echo "</tr>";
                    foreach ($listCompanies as $companies) {
                        echo "<tr>";
                        echo "<td>" . $companies['name'] . '</a>' . "</td>";
                        echo "<td>" . $companies['country'] . "</a>" . "</td>";
                        echo "<td>" . $companies['VAT_number'] . "</a>" . "</td>";
                        echo "<td>" . "<a href='index.php?route=modifyCompanies&id=" . $companies['id'] . "'><img src='assets/img/edit.svg' width='28px'; height='28px';>" . "</a>" . "<a href='index.php?route=deleteCompanies&id=" . $companies['id'] . "'><img src='assets/img/bin.svg' width='28px'; height='28px';>" . "</td>" . "</a>";
                        echo "</tr>";
                    }
                }
                if ($_SESSION['username'] !== 'Jean-Christian') {
                    foreach ($listCompanies as $companies) {
                        echo "<tr>";
                        echo "<td>" . $companies['name'] . '</a>' . "</td>";
                        echo "<td>" . $companies['country'] . "</a>" . "</td>";
                        echo "<td>" . $companies['VAT_number'] . "</a>" . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
        </table>
    </article>
</main>

<?php
require 'views/footer.php'; ?>