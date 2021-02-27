<?php
include_once 'inc/functions.php';
include_once 'inc/header.php';
require_once 'inc/mainmenu.php';
$text = 'Valora gilt als einer der stärksten Convenience- und Food-Service-Anbieter der Schweiz mit einer Multiformat-Strategie (u.A. k kiosk, avec, Press & Books). Als Teil des Loyalty-Programms werden regelmässig nationale Loskampagnen lanciert.<br><br>Dabei ist Compresso für die technische Umsetzung eines auf die Kampagne abgestimmten Webauftritts zuständig. Die an den Verkaufsstellen abgegebenen Lose beinhalten attraktive Sofortpreise und können zusätzlich auf der Engagement-Website für den Hauptpreis eingelöst werden.<br><br>Dadurch erhalten Konsumenten wie auch Industriepartner eine attraktive Interaktionsmöglichkeit, die direkt ans Valora-eigene CRM angeschlossen ist.';
?>
<div class="data-scroll">
  <?php
  render_hero( 'Online Game', 'Valore OK Goal', 'images/walim.mp4' );
  render_text( $text );
  render_next_project( 'Weisser Immobilien', 'wms.php' );
  ?>
  </div>
<?php
include_once 'inc/site_footer.php';
include_once 'inc/footer.php';