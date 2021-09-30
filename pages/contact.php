<?php
include($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/inc/dbh.php");
?>

    <div class="container">
      <form class="contact-form" action="index.html" method="post">
        <input class="f-name" type="text" name="first-name" value="First Name">
        <input class="s-name" type="text" name="second-name" value="Second Name ">
        <input class="email" type="email" name="email" value="Email">
        <input class="subject" type="text" name="subject" value="Subject">
        <input class="message" type="text" name="message" value="Message">
      </form>
    </div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php"); ?>
