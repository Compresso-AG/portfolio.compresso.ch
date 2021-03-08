<?php
require_once 'vendor/autoload.php';
require_once 'inc/header.php';
require_once 'inc/mainmenu.php';
?>
<!-- SHOWCASE -->
<div id="letter-slider">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php
      /* Slides aufbereits */
      $slides = array(
        array(
          'category' => 'Webseite',
          'title' => 'Personal Trainer ade, dank Sportaktiv',
          'description' => 'Wie bringt man verschiedene Sportarten und Interessengruppe unter einen Hut?',
          'video' => true,
          'media' => 'images/sportaktiv.mp4',
          'link' => 'sportaktiv.php',
          'link_target' => '_self',
        ),
        array(
          'category' => 'Webseite',
          'title' => 'Rundum stimmig mit LC1',
          'description' => 'Warum harmonieren alte Klassiker und innovative Neulinge im Web besonders gut?',
          'video' => true,
          'media' => 'images/lc1.mp4',
          'link' => 'lc1.php',
          'link_target' => '_self'
        ),
        array(
          'category' => 'Webseite',
          'title' => 'Objekte online inserieren für Walim',
          'description' => 'Wer bringt Branding und Funktionalität auf einer Plattform zusammen?',
          'video' => true,
          'media' => 'images/walim.mp4',
          'link' => 'walim.php',
          'link_target' => '_self'
        ),
        array(
          'category' => 'CRM',
          'title' => 'Japan-Reise mit JT International',
          'description' => 'Was braucht es, um das Zahlenchaos übersichtlich zu digitalisieren?',
          'video' => false,
          'media' => 'images/project_overview.jpg',
          'link' => 'jti.php',
          'link_target' => '_self'
        ),
        array(
          'category' => 'Online Game',
          'title' => 'Ein hoch auf Gamification mit Valora',
          'description' => 'Wo treffen off- und online Kampagnen spielerisch aufeinander?',
          'video' => true,
          'media' => 'images/valora.mp4',
          'link' => 'valora.php',
          'link_target' => '_self'
        ),
        array(
          'category' => 'Webseite',
          'title' => 'Computer als Sprachrohr für Weisser Immobilien',
          'description' => 'Wie erschaffen wir einen ästhetischen und informativen Webauftritt?',
          'video' => true,
          'media' => 'images/testvideo.mp4',
          'link' => 'wms.php',
          'link_target' => '_self'
        ),
        array(
          'category' => 'Newsletter',
          'title' => 'The news online dank Newsletter',
          'description' => 'Warum wecken spannende Inhalte mit durchdachter Aufbereitung Interesse?',
          'video' => true,
          'media' => 'images/newsletter.mp4',
          'link' => 'newsletter.php',
          'link_target' => '_self'
        ),
        array(
          'category' => 'Compresso - Deine Lieblingsagentur',
          'title' => 'So, Interesse geweckt?',
          'description' => 'Wir machen Kommunikation und sind die Lieblingsagentur vieler spannender kleiner und ganz grosser Kunden aus der gesamten Schweiz. Tritt mit uns in Kontakt!',
          'video' => true,
          'media' => 'images/compresso_desktop.mp4',
          'media_mobile' => 'images/compresso_mobile.mp4',
          'link' => 'https://compresso.ch',
          'link_target' => '_blank'
        )
      );
      foreach( $slides as $slide ) {
        if( $slide['link_target'] === '_self' ) {
          $data_type = 'ajax-load';
        } else {
          $data_type = '';
        }
        ?>
        <!-- slide -->
        <div class="swiper-slide">
          <div class="slide-content">
            <span class="category"><?php echo $slide['category']; ?></span>
            <h2 class="title"><?php echo $slide['title']; ?></h2>
            <p><?php echo $slide['description']; ?></p>
          </div>
          <a href="<?php echo $slide['link']; ?>" target="<?php echo $slide['link_target']; ?>" data-type="<?php echo $data_type; ?>" class="slide-arrow magnetize">
            <div class="circle" data-cursor-type="medium"></div><i class="fas fa-chevron-right"></i>
            <div class="spine" data-cursor-type="medium"></div>
          </a>
        </div>
        <?php
      }
      ?>
    </div>

    <div class="bullets">
      <ul> </ul>
    </div>

    <!-- SLIDE IMAGES -->
    <div class="slider-images overlays">
      <ul>
        <?php
        $counter = 1;
        foreach( $slides as $slide ) {
          if( !$slide['video'] ) {
            echo '<li style="background-image: url(' . $slide['media'] . ');"></li>';
          } else {
            $add_autoplay = '';
            if($counter = 1) {
              /* Autoplay hinzufügen */
              $add_autoplay = ' autoplay';
            }
            ?>
            <li>
              <div class="video-wrapper">
                <video loop muted playsinline<?php echo $add_autoplay; ?> class="video-bg">
                  <?php
                  if( array_key_exists( 'media_mobile', $slide ) ) {
                    $detect = new Mobile_Detect;
                    if ( $detect->isMobile() ) {
                      echo '<source src="' . $slide['media_mobile'] . '" type="video/mp4">';
                    } else {
                      echo '<source src="' . $slide['media'] . '" type="video/mp4">';
                    }
                    
                  } else {
                    echo '<source src="' . $slide['media'] . '" type="video/mp4">';
                  }
                  ?>
                </video>
              </div>
            </li>
            <?php
          }
          $counter++;
        }
        ?>
      </ul>
    </div>
  </div>
</div>
<!-- SHOWCASE BOTTOM -->
<div class="showcase-bottom">
  <div class="row">
      <div class="col-xl-6 col-md-6 text-left">
        <a data-cursor-type="medium" class="allworks-link magnetize" href="contact.php" data-type="ajax-load" data-dist="1">Contact us</a>
      </div>
      <div class="col-xl-6 col-md-6">
        <div class="sliding-social">
          <div class="follow-us">Follow us <i class="fas fa-heart text-danger"></i></div>
            <ul class="social">
              <li class="magnetize" data-dist="1"><a data-cursor-type="medium" href="https://www.facebook.com/compresso" target="_blank"><i class="fab fa-facebook fa-2x"></i></a></li>
              <li class="magnetize" data-dist="1"><a data-cursor-type="medium" href="https://www.instagram.com/compressozurich/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a></li>
              <li class="magnetize" data-dist="1"><a data-cursor-type="medium" href="https://www.linkedin.com/company/compresso-ag/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a></li>
            </ul>
        </div>
      </div>
  </div>
</div>
</main>
<?php
require_once 'inc/footer.php';