<?php
include_once 'inc/functions.php';
include_once 'inc/header.php';
require_once 'inc/mainmenu.php';
$text = 'Weisser Immobilien ist ein unabhängiges, inhabergeführtes Immobilienunternehmen aus Zollikon, an der Goldküste Zürichs.<br><br>Auf der Basis eines neuen Webauftritts kreiert Compresso eine informative Branding-Website mit ansprechendem und ästhetischem Inhalt. Dadurch soll der Kundenpool aus Privatpersonen und Gemeinschaften gleichermassen abgeholt und ein Überblick über die vier Kernkompetenzen Projektentwicklung, Kauf & Verkauf, Investment und Bewirtschaftung gegeben werden.';
?>
<div class="data-scroll">
  <?php
  render_hero( 'Webseite', 'Weisser Immobilien', 'images/wms.mp4' );
  render_text( $text );
  render_next_project( 'Compresso Lieblingsbrief', 'newsletter.php' );
  ?>
  </div>
<?php
include_once 'inc/site_footer.php';
include_once 'inc/footer.php';