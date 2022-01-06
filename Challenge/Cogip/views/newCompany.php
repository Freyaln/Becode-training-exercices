<?php
include 'models/connect.php';
require 'views/header.php';

?>

<main class="container is-fluid main-container">
  <section class="level">
    <h1 class="level-item has-text-centered">
      COGIP : Create a new company
    </h1>

  </section>
  <form action="index.php?route=companies" method="post" class="form">
    <input type="hidden" name="route" value="newCompany">
    <div class="field">
      <label class="label" name="companyName">Company Name : </label>
      <div class="control">
        <input class="input" type="text" name="companyName">
      </div>
    </div>
    <div class="field">
      <label class="label" name="TVANumber">TVA Number : </label>
      <div class="control">
        <input class="input" type="text" name="TVANumber">
      </div>
    </div>
    <div class="field">
      <label class="label" name="country">Country : </label>
      <div class="control">
        <input class="input" type="text" name="country">
      </div>
    </div>

    <div class="field">
      <label class="label">Company type : </label>
      <div class="control">
        <div class="select">
          <select name="companyType">
            <?php
            foreach ($companyTypeList as $list) {
              echo '<option value="' . $list['id'] . '">' . $list['type'] . '</option>';
            }

            ?>
          </select>
        </div>
      </div>
    </div>

    <div class="field is-grouped">
      <div class="control">
        <button type="submit" class="button is-link" name="formNewCompany">Submit</button>
      </div>
    </div>
    <?php
        if (isset($message)) {
          echo '<font color="red">' . $message . '</font>';
        }
        ?>
  </form>

</main>
<?php
require 'views/footer.php';
