<?php
require 'views/header.php';
include 'models/connect.php';
?>
<main class="container is-fluid main-container">
    <section class="level">
        <h1 class="level-item has-text-centered">
            Company details
        </h1>
    </section>
    <article class="level-item has-text-centered">

        <table class='companyTable table is-striped'>

            <tr>

                <th> Company Name</th>
                <th> Country </th>
                <th> VAT Number</th>
                <th> Invoices</th>
                <th> Contact name</th>
                <th> Contact email</th>
                <th> Contact phone number</th>


            </tr>
            <?php

            foreach ($list as $test) {
                echo "<tr>";
                echo "<td>" . $test['name'] . "</td>";
                echo "<td>" . $test['country'] . "</td>";
                echo "<td>" . $test['VAT_number'] . "</td>";
                echo "<td>" . $test['number'] . "</td>";
                echo "<td>" . $test['lastname'] . "</td>";
                echo "<td>" . $test['email'] . "</td>";
                echo "<td>" . $test['phone_number'] . "</td>";
                echo "</tr>";
            }

            ?>
        </table>

    </article>
</main>
<?php
require 'views/footer.php'; ?>