<?php
include_once 'inc/functions.php';
include_once 'inc/header.php';
require_once 'inc/mainmenu.php';
$text = 'Mit unserem Compresso-eigenen Newsletter – dem Lieblingsbrief – schaffen wir regelmässig den Spagat zwischen inspirierenden Trends und spannenden Agentur-Insights.<br><br>Die Leser werden bei jedem Versand mit interessanten Inhalten und ansprechenden Layouts abgeholt.';
?>
<div class="data-scroll">
  <?php
  render_hero( 'Newsletter', 'Compresso Lieblingsbrief', 'images/walim.mp4' );
  render_text( $text );
  render_external_project_link( 'Zur Compresso Agenturwebseite', 'https://compresso.ch', 'Mehr Informationen zu deiner Lieblingsagentur?' );
  ?>
  </div>
<?php
include_once 'inc/site_footer.php';
include_once 'inc/footer.php';