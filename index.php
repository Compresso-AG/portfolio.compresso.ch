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
          'title' => 'Walim',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => false,
          'media' => 'images/project_overview.jpg'
        ),
        array(
          'category' => 'Webseite',
          'title' => 'Monti Stampa Furrer',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => true,
          'media' => 'images/testvideo.mp4'
        ),
        array(
          'category' => 'Webseite',
          'title' => 'Nestlé LC1',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => false,
          'media' => 'images/project_overview.jpg'
        ),
        array(
          'category' => 'CRM',
          'title' => 'Japan Tobacco International​',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => false,
          'media' => 'images/project_overview.jpg'
        ),
        array(
          'category' => 'Webseite',
          'title' => 'Weisser Immobilien',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => true,
          'media' => 'images/testvideo.mp4'
        ),
        array(
          'category' => 'Newsletter',
          'title' => 'Compresso Lieblingsbrief',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => false,
          'media' => 'images/project_overview.jpg'
        ),
        array(
          'category' => 'Newsletter',
          'title' => 'Nestlé Hirz Regio Thaler',
          'description' => 'This is a modernistic portfolio-style theme with an emphasis on <br> typography and attention to detail.',
          'video' => false,
          'media' => 'images/project_overview.jpg'
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
<?php
require_once 'inc/footer.php';