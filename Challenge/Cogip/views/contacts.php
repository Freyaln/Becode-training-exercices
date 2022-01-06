<?php

require 'header.php';
?>

<main class="container is-fluid main-container">
    <section class="level">
        <h1 class="level-item has-text-centered">
            COGIP : List of contacts
        </h1>
    </section>
    <article class="level-item has-text-centered">

        <table class='invoicesTable table is-striped'>

            <tr>
                <th>Name</th>
                <th>Telephone</th>
                <th>E-mail</th>
                <th>Company</th>
            </tr>
            <?php
            foreach ($listContacts as $contact) {
                echo "<tr>
                        <td>" . "<a href='index.php?route=clientDetails&id=" . $contact['id'] . "'>" . $contact['firstname'] . " " . $contact['lastname'] . "</a>" . "</td>
                        <td>" . $contact['phone_number'] . "</td>
                        <td>" . $contact['email'] . "</td>
                        <td>" . $contact['name'] . "</td>
                    </tr>";
            } ?>
        </table>

    </article>
</main>

<?php
require 'footer.php';
?>