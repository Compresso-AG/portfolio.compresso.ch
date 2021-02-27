<?php
include_once 'inc/functions.php';
include_once 'inc/header.php';
require_once 'inc/mainmenu.php';
$text = 'Die Walim AG – Walder Immobilien AG – ist eine Zürcher Immobilienverwaltung mit Hauptsitz auf dem geschichtsträchtigen Walder Areal. Durch die Zusammenführung zweier vormals separat geführter Online-Umgebungen ermöglicht Compresso einen neuen einheitlichen Gesamtauftritt, der Funktionalität und Branding in einem abdeckt.<br><br>Dank der klar strukturierten Plattform für Wohnungs- und Gewerbemieter erschaffen wir einen rundum stimmigen Webauftritt.<br><br>Der Prozess der Immobilienverwaltung und -vermarktung wird durch die Anbindung an Homegate optimiert.';
?>
<div class="data-scroll">
  <?php
  render_hero( 'Webseite', 'Walder Immobilien AG', 'images/walim.mp4' );
  render_text( $text );
  render_next_project( 'JTI Reporting Tool', 'jti.php' );
  ?>
  </div>
<?php
include_once 'inc/site_footer.php';
include_once 'inc/footer.php';