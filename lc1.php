<?php
include_once 'inc/functions.php';
include_once 'inc/header.php';
require_once 'inc/mainmenu.php';
$text = 'LC1 ist eine der Schweizer Top-Marken für probiotische Milchprodukte, deren Produktrange sich seit Jahren zwischen Pioniergeist, bewährten Klassikern und innovativen Kreationen bewegt.<br><br>Im stetigen Wandel von aktuellen Food- und Ernährungstrends verhilft Compresso zu neuer visueller und ansprechender Präsenz. Auf der neuen LC1-Branding-Website werden Marke und Produkte in einer Kombination aus statischen und animierten Inhalten im modernen Layout präsentiert.';
?>
<div class="data-scroll">
  <?php
  render_hero( 'Webseite', 'lc1.ch', 'images/lc1.mp4' );
  render_text( $text );
  render_next_project( 'Walder Immobilien AG', 'walim.php' );
  ?>
  </div>
<?php
include_once 'inc/site_footer.php';
include_once 'inc/footer.php';