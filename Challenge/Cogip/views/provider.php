<?php
require 'views/header.php';
include 'models/connect.php';
?>
<main class="container is-fluid main-container">
    <section class="level">
        <h1 class="level-item has-text-centered">
            COGIP : List of Providers
        </h1>
    </section>
    <article class="level-item has-text-centered">

        <table class='invoicesTable table is-striped'>

            <tr>

                <th> Company Name</th>
                <th> Country </th>
                <th> VAT Number</th>

            </tr>
            <?php
            foreach ($list as $test) {
                echo "<tr>";
                echo "<td>" . "<a href='index.php?route=singleSupplier&id=" . $test['id'] . "'>" . $test['name'] . "</a>" . "</td>";
                echo "<td>" . $test['country'] . "</td>";
                echo "<td>" . $test['VAT_number'] . "</td>";
                echo "</tr>";
            }

            ?>
        </table>

    </article>
</main>
<?php
require 'views/footer.php'; ?>