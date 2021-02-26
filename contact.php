<?php
require_once 'inc/header.php';
require_once 'inc/mainmenu.php';
?>

    <div class="data-scroll">

    <!-- PAGE HEADER -->
    <div class="page-header type-two box-animate">
      <span class="little-title">Contact us</span>
      <h1 class="title">Let's Talk</h1>
    </div>

    <div class="container text-center top_60 box-animate">
      <div class="subtext">
        <h2>Like what you see? Have a project you’d like to talk about? <br />
          Want to ask us a personal question?</h2>
      </div>
    </div>

    <!-- CONTACT FORM -->
    <div class="container top_45 box-animate">
      <div id="contact-formular" class="contact-form">
        <div id="message"></div>
        <form method="post" action="contact_form_action.php" name="contactform" id="contactform" class="row">
          <!-- name -->
          <div class="col-xl-6">
            <input class="inp" placeholder="Dein Name" name="name" type="text" id="name">
          </div>
          <!-- email -->
          <div class="col-xl-6">
            <input class="inp" placeholder="Deine E-Mail Adresse" name="email" type="text" id="email">
          </div>
          <!-- about project -->
          <div class="col-xl-12">
            <textarea class="inp-text" name="comments" id="comments" rows="4" placeholder="Deine Nachricht"></textarea>
          </div>
          <!-- button -->
          <div class="col-xl-12 form-btn text-center top_45">
            <input class="site-btn magnetize" data-dist="2" data-cursor-type="medium" type="submit" value="Nachricht senden">
          </div>
        </form>
      </div>
    </div>

    <!-- CONTACT INFOS -->
    <div class="container top_120 box-animate">
      <div class="contact-infos text-center row">
        <!-- Email -->
        <div class="col-xl-4 col-lg-4 col-md-6 contact-info">
          <i class="fas fa-paper-plane"></i> <br>
          <a href="mailto:info@compresso.ch">info@compresso.ch</a><br>
          <span>E-Mail</span>
        </div>
        <!-- Address -->
        <div class="col-xl-4 col-lg-4 col-md-6 contact-info">
          <i class="fas fa-map-marker-alt"></i><br>
          <div >Seestrasse 49<br>8702 Zollikon</div>
          <span>Adresse</span>
        </div>
        <!-- Phone -->
        <div class="col-xl-4 col-lg-4 col-md-12 contact-info">
          <i class="fas fa-phone"></i><br>
          <a href="tel:0041434888600">+41 43 488 86 00</a><br>
          <span>Telefon</span>
        </div>
      </div>
    </div>


    <!-- Map-->
    <div class="compresso_map box-animate" data-zoom="13">
      <div class="marker" data-lat="47.339440" data-lng="8.568040"></div>
    </div>
    <!-- BG SIGNATURE FONT -->
    <div class="fixed-signature" data-scroll data-scroll-sticky data-scroll-target="main">Wir sind Compresso</div>
<?php
include_once 'inc/footer-contact.php';