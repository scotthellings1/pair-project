<?php
include($_SERVER['DOCUMENT_ROOT'] . "/pair-project/inc/header.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/pair-project/inc/dbh.php");
?>

  <div class="container form-container">
    <div class="form-wrapper">

      <form class="contact-form" action="index.html" method="post">
        <div class="name-inputs">
          <input class="f-name" type="text" name="first-name" value="First Name">
          <input class="s-name" type="text" name="second-name" value="Second Name">
        </div>
        <input class="email" type="email" name="email" value="Email">
        <input class="subject" type="text" name="subject" value="Subject">
        <input class="message" type="text" name="message" value="Message">
      </form>

    </div>
  </div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/pair-project/inc/footer.php"); ?>
