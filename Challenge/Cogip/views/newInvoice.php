<?php
include 'models/connect.php';
require 'views/header.php';
?>

<main class="container is-fluid main-container">
  <section class="level">
    <h1 class="level-item has-text-centered">
      COGIP : Create new invoice
    </h1>
  </section>

  <form action="index.php?route=invoices" method="post" class="form">
    <input type="hidden" name="route" value="newInvoice">
    <div class="field">
      <label class="label" name="invoiceNumber">Invoice Number : </label>
      <div class="control">
        <input class="input" type="text" name="invoiceNumber">
      </div>
    </div>
    <div class="field">
      <label class="label" name="invoiceDate">Invoice Date : </label>
      <div class="control">
        <input class="input" type="text" name="invoiceDate">
      </div>
    </div>

    <div class="field">
      <label class="label">Company : </label>
      <div class="control">
        <div class="select">
          <select name="company">
            <?php
            foreach ($company as $list) {
              echo '<option value="' . $list['id'] . '">' . $list['name'] . '</option>';
            }
            ?>
          </select>
        </div>
      </div>
    </div>


    <div class="field is-grouped">
      <div class="control">
        <button class="button is-link" name="formNewInvoice">Submit</button>
      </div>
    </div>
  </form>

</main>
<?php
require 'views/footer.php';
