<?php
include_once 'inc/functions.php';
include_once 'inc/header.php';
require_once 'inc/mainmenu.php';
$text = 'Sportaktiv ist eine private Non-Profit-Organisation und fördert mit einem vielfältigen Kursangebot von über 30 Sportarten den Breitensport in der Stadt Zürich.<br><br>Mit einer integrierten Kurssuche sowie verschiedenen Filteroptionen ermöglicht Compresso eine optimierte funktionale Website mit einfacher und kundenfreundlicher Suchfunktion.<br><br>Das Kursbuchungssystem ist zudem direkt an das CRM des Kunden angebunden, sodass gebuchte Kurse zeitgleich im Backend ersichtlich sind.';
?>
<div class="data-scroll">
  <?php
  render_hero( 'Webseite', 'sportaktiv.ch', 'images/sportaktiv.mp4' );
  render_text( $text );
  render_next_project( 'LC1.ch', 'lc1.php' );
  ?>
  </div>
<?php
include_once 'inc/site_footer.php';
include_once 'inc/footer.php';