<?php
require 'views/header.php';
include 'models/connect.php';
?>

<main class="container is-fluid main-container">
    <section class="level">
        <h1 class="level-item has-text-centered">
            COGIP : List of invoices
        </h1>
    </section>
    <article class="level-item has-text-centered">

        <table class='invoicesTable table is-striped'>

            <tr>
                <th>Date</th>

                <th>Number</th>

            </tr>
            <?php
            foreach ($list as $invoice) {
                echo "<tr>";
                echo "<td>" . $invoice['date'] . '</a>' . "</td>";
                echo "<td>" . "<a href='index.php?route=invoicesDetails&id=" . $invoice['id'] . "'>" . $invoice['number'] . "</a>" . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </article>
</main>
<?php
require 'views/footer.php'; ?>