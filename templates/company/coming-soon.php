<?php

/**
 * Template Name: Coming Soon
 */
get_header();

?>
<section class="cover-background overflow-auto full-screen position-relative" style="background-image: url(images/coming-soon-bg.jpg);">
      <div id="particles-style-01" class="position-absolute h-100 top-0 left-0 w-100" data-particle="true" data-particle-options='{"particles":{"number":{"value":10,"density":{"enable":true,"value_area":800}},"color":{"value":"#b0b4e2"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":4,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true}'></div>
      <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100 z-index-2 position-relative">
                  <div class="col-md-12 col-lg-10 col-xl-8 col-xxl-7 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <a class="mb-10 md-mb-50px d-inline-block" href="index.html">
                              <img src="images/logo-black-big.png" data-at2x="images/logo-black-big@2x.png" alt="">
                        </a>
                        <h1 class="fw-700 fs-70 mb-10px text-dark-gray ls-minus-2px">Coming soon!</h1>
                        <h6 class="text-dark-gray mb-0">Page is under development.</h6>
                  </div>
            </div>
      </div>
</section>
<?php include_once(get_template_directory() . '/global/contact-us-section.php'); ?>
<?php get_footer() ?>