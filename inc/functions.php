<?php
function render_hero( $category, $title, $video ) {
  echo '
  <!-- hero -->
  <div class="full-image hero me">
        <div class="full-text box-animate">
            <div class="outer">
                <div class="inner">
                    <span>' . $category . '</span>
                    <h1>' . $title . '</h1>
                </div>
            </div>
        </div>
        <div class="image overlays"></div>
        <div class="video-wrapper">
          <video autoplay loop muted class="video-bg">
            <source src="' . $video . '" type="video/mp4">
          </video>
        </div>
        <div class="down-link no-border">
          <a href="#" class="section-down-arrow" data-cursor-type="big" data-cursor-text="CLICK">
              <svg data-cursor-type="big" data-cursor-text="CLICK" class="scroll-icon" viewBox="0 0 30 45" enable-background="new 0 0 30 45">
                  <path data-cursor-type="big" data-cursor-text="CLICK" class="scroll-icon-path" fill="none" stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" d="M15,1.118c12.352,0,13.967,12.88,13.967,12.88v18.76  c0,0-1.514,11.204-13.967,11.204S0.931,32.966,0.931,32.966V14.05C0.931,14.05,2.648,1.118,15,1.118z">
                  </path>
              </svg>
          </a>
      </div>
  </div> 
  ';
}

function render_text( $text_1 ) {
  echo '
  <!-- About Text -->
  <div class="container text-widget works type_one top_120 box-animate">
    <div class="row justify-content-center">
        <h3 class="col-12 col-xl-10">' . $text_1 . '</h3>
    </div>
  </div>
  ';
}

function render_next_project( $project, $link ) {
  echo '
  <!-- Next post link -->
   <div class="container text-center top_60 box-animate">
    <div class="row top_30">
      <div class="col-xl-12">
        <a data-type="ajax-load" data-cursor-type="medium" class="next-link" href="' . $link . '">
          <div data-cursor-type="medium" class="nav-title">Next project</div>
          <div data-cursor-type="medium" class="next-title">' . $project . '</div>
        </a>
      </div>
    </div>
  ';
}

function render_external_project_link( $project, $link, $title ) {
  echo '
  <!-- Next post link -->
   <div class="container text-center top_60 box-animate">
    <div class="row top_30">
      <div class="col-xl-12">
        <a target="_blank" data-cursor-type="medium" class="next-link" href="' . $link . '">
          <div data-cursor-type="medium" class="nav-title">' . $title . '</div>
          <div data-cursor-type="medium" class="next-title">' . $project . '</div>
        </a>
      </div>
    </div>
  ';
}