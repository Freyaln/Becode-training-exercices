<?php
include './models/connect.php';
require 'views/header.php';
?>

<main class="container is-fluid main-container">
  <section class="level">
    <h1 class="level-item has-text-centered">
      COGIP : Welcome to the COGIP
    </h1>
  </section>
  <article class="level-item has-text-centered form">


    <form action="index.php" method="post">
      <input type="hidden" name="route" value="login">
      <div class="field">
        <label class="label" name="username">username : </label>
        <div class="control">
          <input class="input" type="text" name="username">
        </div>
      </div>
      <div class="field">
        <label class="label" name="password">password : </label>
        <div class="control">
          <input class="input" type="password" name="password">
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <button type="submit" class="button is-link" name="formLogin">Submit</button>
        </div>
      </div>
      <?php
      if (isset($message)) {
        echo '<font color="red">' . $message . '</font>';
      }
      ?>
    </form>
  </article>
</main>
<?php
require 'views/footer.php';
