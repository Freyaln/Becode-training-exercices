<?php
require 'views/header.php';
?>

<main class="container is-fluid main-container">

    <article class="level">
        <h1 class="level-item has-text-centered">
            Modify the fields and submit to modify the Client
        </h1>
        <section>
            <form action="index.php?route=home" method="post" class="form">
                <input type="hidden" name="route" value="modifyClients">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class=" field">
                    <label class="label" name="firstname">Firstname :<?php foreach ($selectedClient as $selected) {
                                                                            echo $selected['firstname']; ?>
                    </label>
                    <div class="control">
                        <input class="input" type="text" name="firstname">
                    </div>
                </div>
                <div class="field">
                    <label class="label" name="lastname">Lastname :<?php echo $selected['lastname']; ?> </label>
                    <div class="control">
                        <input class="input" type="text" name="lastname">
                    </div>
                </div>
                <div class="field">
                    <label class="label" name="email">Email :<?php echo $selected['email']; ?> </label>
                    <div class="control">
                        <input class="input" type="text" name="email">
                    </div>
                </div>
                <div class="field">
                    <label class="label" name="phoneNumber">Phone number :<?php echo $selected['phone_number']; ?> </label>
                    <div class="control">
                        <input class="input" type="text" name="phoneNumber">
                    </div>
                </div>
                <div class="field">
                    <label class="label" name="companyName">Company :<?php echo $selected['name'];
                                                                        } ?> </label>
                    <div class="control">
                        <input class="input" type="text" name="companyName">
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" name="formModifyClient">Submit</button>
                    </div>
                </div>
        </section>
    </article>
</main>

<?php
require 'views/footer.php'; ?>