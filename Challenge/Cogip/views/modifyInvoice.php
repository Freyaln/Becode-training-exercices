<?php
require 'views/header.php';
?>

<main class="container is-fluid main-container">

    <article class="level">
        <h1 class="level-item has-text-centered">
            Modify the fields and submit to modify the invoice
        </h1>
        <section>
            <form action="index.php?route=home" method="post" class="form">
                <input type="hidden" name="route" value="modifyInvoice">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class=" field">
                    <label class="label" name="invoiceNumber">Invoice Number :<?php foreach ($selectedInvoice as $selected) {
                                                                                    echo $selected['number']; ?>
                    </label>
                    <div class="control">
                        <input class="input" type="text" name="invoiceNumber">
                    </div>
                </div>
                <div class="field">
                    <label class="label" name="invoiceDate">Invoice Date :<?php echo $selected['date']; ?> </label>
                    <div class="control">
                        <input class="input" type="text" name="invoiceDate">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Company :<?php echo $selected['name'];
                                                                                }
                                                    ?> </label>
                    <div class="control">
                        <input class="input" type="text" name="companyName">
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" name="formModifyInvoice">Submit</button>
                    </div>
                </div>
                </div>
        </section>
    </article>
</main>

<?php
require 'views/footer.php'; ?>