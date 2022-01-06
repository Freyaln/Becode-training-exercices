<?php
require 'views/header.php';
include 'models/connect.php';
?>
<main class="container is-fluid main-container">
    <section class="level">
        <h1 class="level-item has-text-centered">
            COGIP : List of Companies
        </h1>
    </section>
    <article class="level-item has-text-centered">

        <table class='invoicesTable table is-striped'>

            <tr>
                <th>Name</th>
                <th>Country</th>
                <th>TVA</th>
                <th>Type</th>
            </tr>
            <?php
            foreach ($list as $test) {

                echo "
                        <tr>
                            <td>" . "<a href='index.php?route=singleSupplier&id=" . $test['id'] . "'>" . $test['name'] . "</a>" . "</td>
                            <td>" . $test['country'] . "</td>
                            <td>" . $test['VAT_number'] . "</td>
                            <td>" . $test['type'] . "</td>
                        </tr> 
                    ";
            }

            ?>
        </table>

    </article>
</main>

<?php
require 'views/footer.php'; ?>