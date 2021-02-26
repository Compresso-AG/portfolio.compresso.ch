<?php
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
          'title' => 'C Walim',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => false,
          'media' => 'images/project_overview.jpg'
        ),
        array(
          'category' => 'Webseite',
          'title' => 'O Monti Stampa Furrer',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => true,
          'media' => 'images/testvideo.mp4'
        ),
        array(
          'category' => 'Webseite',
          'title' => 'M Nestlé LC1',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => false,
          'media' => 'images/project_overview.jpg'
        ),
        array(
          'category' => 'CRM',
          'title' => 'P Japan Tobacco International​',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => false,
          'media' => 'images/project_overview.jpg'
        ),
        array(
          'category' => 'Webseite',
          'title' => 'R Weisser Immobilien',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => true,
          'media' => 'images/testvideo.mp4'
        ),
        array(
          'category' => 'Webseite',
          'title' => 'E Weisser Immobilien',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => true,
          'media' => 'images/testvideo.mp4'
        ),
        array(
          'category' => 'Newsletter',
          'title' => 'S Compresso Lieblingsbrief',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => false,
          'media' => 'images/project_overview.jpg'
        ),
        array(
          'category' => 'Newsletter',
          'title' => 'Sag uns hallo!',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => false,
          'media' => 'images/project_overview.jpg'
        ),
        array(
          'category' => 'Über unsere Agentur',
          'title' => 'Oh? Du willst mehr über uns erfahren?',
          'description' => 'Wir machen Kommunikation und sind die Lieblingsagentur vieler spannender kleiner und ganz grosser Kunden aus der ganzen Schweiz. Folge dem Link auf unsere Agenturwebseite.',
          'video' => false,
          'media' => 'images/agenturhaus.jpg'
        )
      );
      foreach( $slides as $slide ) {
        ?>
        <!-- slide -->
        <div class="swiper-slide">
          <div class="slide-content">
            <span class="category"><?php echo $slide['category']; ?></span>
            <h2 class="title"><?php echo $slide['title']; ?></h2>
            <p><?php echo $slide['description']; ?></p>
          </div>
          <a href="#" data-type="ajax-load" class="slide-arrow magnetize" >
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
        foreach( $slides as $slide ) {
          if( !$slide['video'] ) {
            echo '<li style="background-image: url(' . $slide['media'] . ');"></li>';
          } else {
            ?>
            <li>
              <div class="video-wrapper">
                <video loop muted playsinline class="video-bg">
                  <source src="<?php echo $slide['media']; ?>" type="video/mp4">
                </video>
              </div>
            </li>
            <?php
          }
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