<?php
require 'header.php';
require 'models/connect.php';

?>

<main class="container is-fluid main-container">
    <section class="level has-text-centered">
        <h1>
            Client Detail
        </h1>
    </section>
    <article class="level-item has-text-centered">

        <table class='invoicesTable table is-striped'>

            <tr>

                <th>company</th>
                <th>contact</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Invoices</th>
                <th>Date</th>

            </tr>
            <?php foreach ($detailContactClient as $detail) {
                echo "<tr>";
                echo "<td>" . $detail['name'] . "</td>";
                echo "<td>" . $detail['firstname'] . " " . $detail['lastname'] . "</td>";
                echo "<td>" . $detail['phone_number'] . "</td>";
                echo "<td>" . $detail['email'] . "</td>";
                echo "<td>" . $detail['number'] . "</td>";
                echo "<td>" . $detail['date'] . "</td>";
                echo "</tr>";
            } ?>
        </table>
    </article>
</main>
<?php
require 'footer.php';
?>