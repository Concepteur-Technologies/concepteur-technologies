<?php

/**
 * Template Name: Contact Us
 */
get_header();
?>

<section class="pt-0 cover-background ipad-top-space-margin sm-pb-0" style="background-image:url('https://images.pexels.com/photos/5668517/pexels-photo-5668517.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
      <div class="shape-image-animation bottom-0 p-0 w-100 d-none d-md-block">
            <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#ffffff">
                  <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                        <animate attributeName="d" dur="5s" values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                    M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                    M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250" repeatCount="indefinite" />
                  </path>
            </svg>
      </div>
      <div class="container">
            <div class="row align-items-center justify-content-center h-500px sm-h-300px">
                  <div class="col-12 col-md-6 position-relative text-center page-title-extra-large d-flex flex-wrap flex-column align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="ps-25px pe-25px pt-5px pb-5px mb-15px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex"><i class="bi bi-megaphone text-white icon-small me-10px"></i>Grow your business with us</span>
                        <h1 class="mb-20px text-white fw-600 ls-minus-1px">Contact us</h1>
                  </div>
            </div>
      </div>
</section>
<?php include_once(get_template_directory() . '/global/contact-us-section.php'); ?>


<section>
      <div class="container">
            <div class="row justify-content-center">
                  <div class="col-lg-12 col-md-12 col-sm-12 text-center elements-social social-icon-style-06">
                        <div class="fs-22 mb-30px text-dark-gray">Connect with <span class="fw-600">social media</span></div>
                        <ul class="extra-large-icon fw-600 appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [10, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 300, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                              <li><a class="facebook" href="https://www.facebook.com" target="_blank"><span class="brand-label text-dark-gray">Fb</span><span class="brand-icon fa-brands fa-facebook-f"></span></a></li>
                              <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><span class="brand-label text-dark-gray">Db</span><span class="brand-icon fa-brands fa-dribbble"></span></a></li>
                              <li><a class="twitter" href="http://www.twitter.com" target="_blank"><span class="brand-label text-dark-gray">Tw</span><span class="brand-icon fa-brands fa-twitter"></span></a></li>
                              <li><a class="behance" href="http://www.behance.com" target="_blank"><span class="brand-label text-dark-gray">Be</span><span class="brand-icon fa-brands fa-behance"></span></a></li>
                              <li><a class="pinterest" href="https://in.pinterest.com" target="_blank"><span class="brand-label text-dark-gray">Pt</span><span class="brand-icon fa-brands fa-pinterest-p"></span></a></li>
                        </ul>
                  </div>
            </div>
      </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
      $(document).ready(function() {
            $('#submitBtn').on('click', function() {

                  $.ajax({
                        url: '<?= admin_url("admin-ajax.php"); ?>',
                        type: 'POST',
                        data: $('#myForm').serialize() + '&action=contact_form_submit',
                        success: function(response) {
                              $('.form-results').html(response).removeClass('d-none');
                        },
                        error: function(xhr, status, error) {
                              $('.form-results').html('Error: ' + error).removeClass('d-none');
                        }
                  });
            });
      });
</script>
<?php get_footer('footer.php') ?>