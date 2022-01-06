<?php

require 'header.php';
?>

<main class="container is-fluid main-container">
    <section class="level">
        <h1 class="level-item has-text-centered">
            COGIP : List of Clients
        </h1>
    </section>
    <article class="level-item has-text-centered">

        <table class='invoicesTable table is-striped'>

            <tr>
                <th>Name</th>
                <th>Country</th>
                <th>VAT</th>
            </tr>
            <?php
            foreach ($listClient as $client) {
                echo "<tr>
                        <td>" . "<a href='index.php?route=clientDetails&id=" . $client['id'] . "'>" . $client['name'] . "</a>" . "</td>
                        <td>" . $client['country'] . "</td>
                        <td>" . $client['VAT_number'] . "</td>
                    </tr>";
            }
            ?>
        </table>

    </article>
</main>



<?php
require 'footer.php';
?>