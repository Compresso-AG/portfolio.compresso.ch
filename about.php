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

  <!-- SERVICES -->
  <div class="container services top_120 box-animate">
    <div class="row justify-content-center">
      <div class="services-left col-12 col-lg-10">
        <span class="title">Was wir machen</span>
        <h3 class="text-white">Online zu sein ist heute das A und O. In der schnelllebigen digitalen Welt reicht es jedoch nicht, nur im Web oder auf dem Mobile präsent zu sein. Auffallen heisst die Devise – sei es mit einem einzigartigen Webauftritt, einer kreativen Digitalkampagne oder einem angesagten Social-Media-Kanal. Oder am besten: gleich alles zusammen.<br><br>Compresso bietet hierfür seit 1995 alles aus einer Hand. Von Beratung über Projektleitung bis hin zu Design oder Inhouse-Entwicklung – wir setzen Ihre Webprojekte über alle Schritte hinweg kompetent um.</h3>
      </div>
      <div class="services-right top_60 col-12 col-lg-10">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-lg-3 service">
            <div class="bottom_45"><i class="fal fa-code"></i></div>
            <h3 class="title">Funktionale Websites</h3>
            <p>Buchungstools, Reporting-Tools, eCommerce, Immobilien-Management, komplexe CMS und Schnittstellen-Einbindungen</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3 service">
            <div class="bottom_45"><i class="fal fa-copyright"></i></div>
            <h3 class="title">Branding Websites</h3>
            <p>Klassische Schaufensterwebsites</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3 service">
            <div class="bottom_45"><i class="fal fa-fire-alt"></i></div>
            <h3 class="title">Engagement Websites</h3>
            <p>Algorithmus, Lösungen, Gamification</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3 service">
            <div class="bottom_45"><i class="fal fa-mail-bulk"></i></div>
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
          'tel' => '+41 43 488 86 21'
        ),
        array(
          'name' => 'Catherin Matthaei',
          'job' => 'Project Manager',
          'image' => 'catherin2.jpg',
          'mail' => 'catherin.matthaei@compresso.ch',
          'tel' => '+41 43 488 86 46'
        ),
        array(
          'name' => 'Nina Bärtsch',
          'job' => 'Project Manager',
          'image' => 'nina.jpg',
          'mail' => 'nina.baertsch@compresso.ch',
          'tel' => '+41 43 488 86 45'
        ),
        array(
          'name' => 'Daniela Rizzuto',
          'job' => 'Project Manager',
          'image' => 'daniela.jpg',
          'mail' => 'daniela.rizzuto@compresso.ch',
          'tel' => '+41 43 488 86 19'
        ),
        array(
          'name' => 'Luisa Weidmann',
          'job' => 'Project Manager',
          'image' => 'luisa.jpg',
          'mail' => 'luisa.weidmann@compresso.ch',
          'tel' => '+41 43 488 86 47'
        ),
        array(
          'name' => 'Alexandra Nadtochiy',
          'job' => 'Project Manager',
          'image' => 'sascha.jpg',
          'mail' => 'alexandra.nadtochiy@compresso.ch',
          'tel' => '+41 43 488 86 41'
        )
      );
      foreach( $team_members as $team ) {
        ?>
        <!-- a person-->
        <div class="col-lg-4 team" data-scroll data-scroll-speed="2">
          <figure>
            <div class="image" style="background-image: url('images/<?php echo $team['image']; ?>');"></div>
            <figcaption>
              <span class="number"></span>
              <div class="name">
                <h3><?php echo $team['name']; ?></h3>
                <p class="mail mb-0"><i class="fal fa-envelope text-white mr-1 d-none d-lg-inline-block"></i><a class="text-white" href="mailto:<?php echo $team['mail']; ?>"><?php echo $team['mail']; ?></a></p>
                <p class="tel text-white"><i class="fal fa-phone mr-1 d-none d-lg-inline-block"></i><?php echo $team['tel']; ?></p>
              </div>
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