<?php
require 'views/header.php';
include 'models/connect.php';
?>
<main class="container is-fluid main-container">
    <section class="level">
        <h1 class="level-item has-text-centered">
            COGIP : Invoice n° <?php foreach ($list as $test) {
                                    echo $test['number']; ?> details
        </h1>
    </section>
    <article class="level-item has-text-centered">

        <table class='invoicesTable table is-striped'>

            <tr>

                <th>Company</th>
                <th>Type of company</th>
                <th>Date</th>
                <th>Number</th>
                <th>Client name</th>
                <th>Client email</th>
                <th>Client phone number</th>

            </tr>
        <?php

                                    echo "<tr>";
                                    echo "<td>" . $test['name'] . "</td>";
                                    echo "<td>" . $test['type'] . "</td>";
                                    echo "<td>" . $test['date'] . "</td>";
                                    echo "<td>" . $test['number'] . "</td>";
                                    echo "<td>" . $test['lastname'] . "</td>";
                                    echo "<td>" . $test['email'] . "</td>";
                                    echo "<td>" . $test['phone_number'] . "</td>";
                                    echo "</tr>";
                                } ?>
        </table>

    </article>
</main>
<?php
require 'views/footer.php'; ?>