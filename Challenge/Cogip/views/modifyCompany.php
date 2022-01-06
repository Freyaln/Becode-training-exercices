<?php
require 'views/header.php';
?>

<main class="container is-fluid main-container">

    <article class="level">
        <h1 class="level-item has-text-centered">
            Modify the fields and submit to modify the Company
        </h1>
        <section>
            <form action="index.php?route=home" method="post" class="form">
                <input type="hidden" name="route" value="modifyCompanies">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class=" field">
                    <label class="label" name="companyName">Company :<?php foreach ($selectedCompany as $company) {
                                                                            echo $company['name']; ?>
                    </label>
                    <div class="control">
                        <input class="input" type="text" name="companyName">
                    </div>
                </div>
                <div class="field">
                    <label class="label" name="country">Country :<?php echo $company['country']; ?> </label>
                    <div class="control">
                        <input class="input" type="text" name="country">
                    </div>
                </div>
                <div class="field">
                    <label class="label" name="VATNumber">VAT number :<?php echo $company['VAT_number'];
                                                                        } ?> </label>
                    <div class="control">
                        <input class="input" type="text" name="VATNumber">
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" name="formModifyCompany">Submit</button>
                    </div>
                </div>
        </section>
    </article>
</main>

<?php
require 'views/footer.php'; ?>