<?php
include_once 'inc/functions.php';
include_once 'inc/header.php';
require_once 'inc/mainmenu.php';
$text = 'Japan Tobacco International (JTI) ist weltweit der drittgrösste Tabakhersteller mit Schweizer Hauptsitz in Genf. Für die Vergrösserung der Markenreichweite setzt Compresso seit 2012 schweizweite 1:1-Promotionen um.<br><br>Zur Digitalisierung bislang manueller Prozesse entwickeln wir ein für den Kunden personalisiertes Reporting-Tool. Durch unterschiedliche Logins können Promoter Daten erfassen, wir als Agentur interne Auswertungen vornehmen und der Kunde Reportings exportieren.<br><br>Alle Daten werden in Echtzeit ausgespielt und in standardisierten und benutzerdefinierten Reportings auf der funktionalen Website kumuliert.';
?>
<div class="data-scroll">
  <?php
  render_hero( 'Customer-Relationship-Management', 'JTI Reporting Tool', 'images/jti.mp4' );
  render_text( $text );
  render_next_project( 'Gamification mit Valora', 'valora.php' );
  ?>
  </div>
<?php
include_once 'inc/site_footer.php';
include_once 'inc/footer.php';