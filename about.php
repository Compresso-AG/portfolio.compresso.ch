<?php
require_once 'inc/header.php';
require_once 'inc/mainmenu.php';
?>
<div class="data-scroll">

  <!-- PAGE HEADER -->
  <div class="container box-animate">
    <div class="page-header type-one">
      <span class="little-title">Die Lieblingsagentur.</span>
      <h1 class="title">Wir gestalten Beziehungen. Und schaffen Erlebnisse.</h1>
    </div>
  </div>

  <!-- IMAGE WIDGET -->
  <div class="about-image type-one top_120 box-animate image-animate">
    <div class="image" style="background-image:url('images/compresso.jpg'); margin-top: 0px; margin-bottom: 0px;">
    </div>
  </div>

  <!-- SERVICES -->
  <div class="container services top_120 box-animate">
    <div class="row justify-content-center">
      <div class="services-left col-12 col-lg-10">
        <span class="title">Was wir machen</span>
        <h3 class="text-white">Online zu sein ist heute das A und O. In der schnelllebigen digitalen Welt reicht es jedoch nicht, nur im Web oder auf dem Mobile präsent zu sein. Auffallen heisst die Devise – sei es mit einem einzigartigen Webauftritt, einer kreativen Digitalkampagne oder einem angesagten Social-Media-Kanal. Oder am besten: gleich alles zusammen.<br><br>Compresso bietet hierfür seit 1995 alles aus einer Hand. Von Beratung über Projektleitung bis hin zu Design oder Inhouse-Entwicklung – wir setzen Ihre Webprojekte über alle Schritte hinweg kompetent um.</h3>
      </div>
      <div class="services-right top_45 col-12 col-lg-10">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-lg-3 service">
            <div class="text-center bottom_30"><i class="fal fa-copyright"></i></div>
            <h3 class="title">Branding Websites</h3>
            <p>Klassische Schaufensterwebsites</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3 service">
            <div class="text-center bottom_30"><i class="fal fa-code"></i></div>
            <h3 class="title">Funktionale Websites</h3>
            <p>Buchungstools, Reporting-Tools, eCommerce, Immobilien-Management, komplexe CMS und Schnittstellen-Einbindungen</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3 service">
            <div class="text-center bottom_30"><i class="fal fa-fire-alt"></i></div>
            <h3 class="title">Engagement Websites</h3>
            <p>Algorithmus, Lösungen, Gamification</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3 service">
            <div class="text-center bottom_30"><i class="fal fa-mail-bulk"></i></div>
            <h3 class="title">Newsletter</h3>
            <p>Planung und Versand Online-Mailings</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- TEAMMATES -->
  <div class="container teammates top_60 box-animate">

    <div class="block-title">
      <span class="title">Deine Ansprechspersonen</span>
      <h3 class="subtitle">Lerne uns kennen.</h3>
    </div>

    <div class="row">
      <?php
      $team_members = array(
        array(
          'name' => 'Fridolin Stauffacher',
          'job' => 'Founder & CEO',
          'image' => 'fridolin2.jpg',
          'mail' => 'fridolin.stauffacher@compresso.ch',
          'tel' => '+41434888621'
        ),
        array(
          'name' => 'Catherin Matthaei',
          'job' => 'Project Manager',
          'image' => 'catherin2.jpg',
          'mail' => 'catherin.matthaei@compresso.ch',
          'tel' => '+41434888646'
        ),
      );
      foreach( $team_members as $team ) {
        ?>
        <!-- a person-->
        <div class="col-lg-4 team" data-scroll data-scroll-speed="2">
          <figure>
            <div class="image" style="background-image: url('images/<?php echo $team['image']; ?>');"></div>
            <figcaption>
              <span class="number"></span>
              <div class="social-links">
                <a href="mailto:<?php echo $team['mail']; ?>" class="magnetize" data-dist="1" data-cursor-type="medium"> <i class="fas fa-envelope fa-rotate-270 fa-lg"></i> </a>
                <a href="tel:<?php echo $team['tel']; ?>" class="magnetize" data-dist="1" data-cursor-type="medium"> <i class="fas fa-phone fa-rotate-270 fa-lg"></i> </a>
              </div>
              <h3 class="name"><?php echo $team['name']; ?></h3>
              <span class="job"><?php echo $team['job']; ?></span>
            </figcaption>
          </figure>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>
<?php
require_once 'inc/footer.php';