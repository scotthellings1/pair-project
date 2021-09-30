<?php
include($_SERVER['DOCUMENT_ROOT'] . "/pair-project/inc/header.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/pair-project/inc/dbh.php");
?>

<div class="container form-container">
  <div class="form-wrapper">

    <form class="contact-form" action="/pair-project/inc/submit.php" method="POST">
      <div class="name-inputs">
        <input class="f-name" type="text" name="first" placeholder="First Name">
        <input class="s-name" type="text" name="last" placeholder="Second Name">
      </div>
      <input class="email" type="email" name="email" placeholder="Email">
      <input class="subject" type="text" name="subject" placeholder="Subject">
      <input class="message" type="text" name="message" placeholder="Message">
      <button type="submit" name="submit"></button>
    </form>
    <?php var_dump(mail($to, $subject, $msg)); ?>

  </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/pair-project/inc/footer.php"); ?>
