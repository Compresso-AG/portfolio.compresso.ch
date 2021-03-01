<?php
include_once 'inc/functions.php';
include_once 'inc/header.php';
require_once 'inc/mainmenu.php';
$text = 'Valora gilt als einer der stärksten Convenience- und Food-Service-Anbieter der Schweiz mit einer Multiformat-Strategie (u.A. k kiosk, avec, Press & Books). Um das EM-Feeling an den POS und zu den Kunden zu bringen, konzipiert Compresso für die Valora Eigenmarke ok.- ein AR-Game (Augmented Reality).<br><br>Beim Kauf eines Energy Drinks erhalten Kunden einen QR-Code, mit dem sie das interaktive AR-Spiel via ok-goal.ch per Smartphone zum Leben erwecken können. Mit der Handykamera wird eine virtuelle Umgebung aktiviert, wo ein Tor und Torhüter in den realen Raum eingebettet werden und zum Toreschiessen animieren.<br><br>Als Gewinn winken attraktive Sofortpreise und sowie eine Reise an das EM-Finale als Hauptgewinn.';
?>
<div class="data-scroll">
  <?php
  render_hero( 'Online Game', 'Valore OK Goal', 'images/valora.mp4' );
  render_text( $text );
  render_next_project( 'Weisser Immobilien', 'wms.php' );
  ?>
  </div>
<?php
include_once 'inc/site_footer.php';
include_once 'inc/footer.php';