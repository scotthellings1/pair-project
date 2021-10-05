<?php
include($_SERVER['DOCUMENT_ROOT'] . "/pair-project/inc/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "/pair-project/inc/dbh.php");
?>

<div class="contact-page-header">
  <div class="overlay">
    <div class="content">
      <h1>Contact Us</h1>
    </div>
  </div>
</div>

<div class="container contact-pg-container">
  <div class="map-wrapper">
    <h1 class="map-title">Find Us:</h1>
    <div id="mapid"></div>
    <div class="map-info">
      <p class="map-p">
        <a href="">
          <b>Tel:</b>  12345 678910 <br>
        </a>
      </p>
      <p class="map-p">
        <a href="">
          <b>Mob:</b>  098097 3768<br>
        </a>
      </p>
      <p class="map-p">
        <a href="">
          <b>Email:</b>  sharon-wray@fake.com <br>
        </a>
      </p>
      <address class="map-address">
                                         <br><br>
        Sharon Wray Accountancy Services <br><br>
        38a Barnham Broom Road           <br><br>
        Wymondham                        <br><br>
        Norfolk                          <br><br>
        NR18 0DF
      </address>
    </div>
  </div>

  <div class=" container form-wrapper">

    <div class="txt-box">
      <h1 class="contact-h1">
        Contact Us!
      </h1>
      <p class="contact-p">
        To get in touch with us Please fill out the contact form. Any field with
        an asterisk ( * ) must be filled out.<br><br> Lorem ipsum dolor sit amet,
        consectetur adipisicing elit. Dicta sint alias voluptatem.
      </p>
    </div>

    <form class="contact-form" action="/pair-project/inc/submit.php" method="POST">
      <div class="flex-form form-top">
        <input required class="first-name input" type="text" name="first"
        placeholder="First Name*">
        <input required class="last-name input" type="text" name="last"
        placeholder="Last Name*">
      </div>
      <div class="flex-form">
        <input required  class="input" type="email" name="email"
        placeholder="Email*">
      </div>
      <div class="flex-form">
        <input class="input" type="number" name="phone"
        placeholder="Phone Number">
      </div>
      <div class="flex-form">
        <input class="input" type="text" name="subject" placeholder="Subject">
      </div>
      <div class="flex-form form-bottom">
        <input class="input" type="text" name="message" placeholder="Message">
      </div>
      <div class="btn-tickbox-wrapper">
        <button class="form-button" type="submit" name="submit">Send</button>
        <div class="tickbox-wrapper">
          <input type="checkbox" id="gdpr" name="gdpr">
          <div class="tb-txt-wrapper">
            <label class="tb-label" for="gdpr">
              By ticking this box, you wish to be <br> contacted with the
              information<br> you provided here.
            </label>
          </div>
        </div>

      </div>

    </form>

  </div>
</div>

<script src="https://www.google.com/recaptcha/enterprise.js?render=6LdBI6ocAAAAAMuVVpHs-kpcA1w8bzRs_QT0y9X4"></script>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/pair-project/inc/footer-captcha.php"); ?>
