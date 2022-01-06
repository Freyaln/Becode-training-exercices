<?php
include 'models/connect.php';
require 'views/header.php';

?>

<main class="container is-fluid main-container">
  <section class="level">
    <h1 class="level-item has-text-centered">
      COGIP : Create a new contact
    </h1>

  </section>
  <form action="index.php?route=newContact" method="post" class="form">

    <input type="hidden" name="route" value="contacts">
    <div class="field">
      <label class="label" name="name">Name : </label>
      <div class="control">
        <input class="input" type="text" name="name">
      </div>
    </div>
    <div class="field">
      <label class="label" name="firstname">Firstname : </label>
      <div class="control">
        <input class="input" type="text" name="firstname">
      </div>
    </div>
    
    <div class="field">
      <label class="label" name="email">Email : </label>
      <div class="control">
        <input class="input" type="email" name="email">
      </div>
    </div><div class="field">
      <label class="label" name="phone">Phone : </label>
      <div class="control">
        <input class="input" type="text" name="phone">
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
            <button class="button is-link" name="formNewContact">Submit</button>
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
