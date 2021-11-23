<?php
include_once 'inc/functions.php';
include_once 'inc/header.php';
require_once 'inc/mainmenu.php';
$text = 'Ornitag AG ist eine Treuhand- und Beratungsfirma in Küsnacht. Sie unterstützen Schweizer KMU und internationale Firmen in Fragen zur Buchführung, Steuerberatung, Personaladministration sowie Unternehmens- und Rechtsberatung.<br><br>Compresso kreiert für Ornitag eine neue ansprechende Online-Präsenz. Mit dem modernen Design schaffen wir eine lockere Atmosphäre rund um das zahlenlastige Finanzthema. Werte wie Vertrauen und Wertschätzung werden durch das Layout, die neuen Bilder und Texte unterstützt.';
?>
<div class="data-scroll">
  <?php
  render_hero( 'Webseite', 'ornitag.ch', 'images/Ornitag.mp4' );
  render_text( $text );
  render_next_project( 'Walder Immobilien AG', 'walim.php' );
  ?>
  </div>
<?php
include_once 'inc/site_footer.php';
include_once 'inc/footer.php';