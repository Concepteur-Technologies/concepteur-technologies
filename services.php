<?php

/**
 * Template Name: Services
 */

get_header();
$post_id = get_the_ID();
$services_group = get_field('services', $post_id);

if ($services_group) {
      $field_1 = isset($services_group['1']) ? $services_group['1'] : '';
      $field_2 = isset($services_group['2']) ? $services_group['2'] : '';
      $field_3 = isset($services_group['3']) ? $services_group['3'] : '';
      $field_4 = isset($services_group['4']) ? $services_group['4'] : '';
      $field_5 = isset($services_group['5']) ? $services_group['5'] : '';
      $field_6 = isset($services_group['6']) ? $services_group['6'] : '';
      $field_7 = isset($services_group['7']) ? $services_group['7'] : '';
      $field_8 = isset($services_group['8']) ? $services_group['8'] : '';
}
?>

<section class=" page-title-big-typography cover-background" style="background-color: white">
      <div class="opacity-very-light main-bnr-image"></div>
      <div class="container">
            <div class="row extra-very-small-screen align-items-center justify-content-center">
                  <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="cd-headline slide">
                              <div class="fs-120 lg-fs-100 text-dark-gray lh-100 fw-500 mb-10 alt-font ls-minus-5px fancy-text-style-4" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-100, 0], "staggervalue": 300, "duration": 1000, "easing": "easeOutCubic" }'>
                                    <span class="fw-700 d-inline-block" data-fancy-text='{ "effect": "wave", "string": ["Android", "IOS"], "duration": 4000 }' data-bottom-top="transform: translateX(-70px)" data-top-bottom="transform: translateX(70px)"></span>
                                    <span class="d-inline-block fs-80" data-bottom-top="transform: translateX(70px)" data-top-bottom="transform: translateX(-70px)">Development</span>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <h1 class="mb-20px xs-mb-20px text-black text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Popular services</h1>
                        <h2 class="text-black text-shadow-medium fw-500 ls-minus-2px mb-0">Professional services for <br> <?php echo get_post_meta($post_id, 'name', true); ?></h2>
                  </div>
            </div>
      </div>
</section>



<section id="down-section" style="padding-top: 60px;">
      <h2 style="text-align: center; margin-bottom: 50px">Our <?php echo get_post_meta($post_id, 'name', true); ?> Services</h2>
      <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-4 row-cols-sm-2 clients-style-04 appear anime-child anime-complete" data-anime="{&quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                  <!-- start client item -->
                  <div class="col text-center border-end border-bottom border-color-light-medium-gray xs-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                        <div class="client-box">
                              <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/web-development.png" class=" md-h-30px sm-h-40px mb-20px d-block m-auto" alt="" data-no-retina=""></a> -->
                              <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_1; ?></span>
                        </div>
                  </div>
                  <!-- end client item -->
                  <!-- start client item -->
                  <div class="col text-center border-end border-bottom border-color-light-medium-gray sm-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                        <div class="client-box">
                              <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/technology.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                              <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_2; ?></span>
                        </div>
                  </div>
                  <!-- end client item -->
                  <!-- start client item -->
                  <div class="col text-center border-end border-bottom border-color-light-medium-gray xs-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                        <div class="client-box">
                              <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/mobile-app.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                              <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_3; ?></span>
                        </div>
                  </div>
                  <!-- end client item -->
                  <!-- start client item -->
                  <div class="col text-center border-bottom border-color-light-medium-gray sm-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                        <div class="client-box">
                              <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/ecommerce.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                              <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_4; ?></span>
                        </div>
                  </div>
                  <!-- end client item -->
                  <!-- start client item -->
                  <div class="col text-center border-end border-color-light-medium-gray xs-border-end-0 sm-border-bottom transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                        <div class="client-box">
                              <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/api-development.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                              <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_5; ?></span>
                        </div>
                  </div>
                  <!-- end client item -->
                  <!-- start client item -->
                  <div class="col text-center border-end border-color-light-medium-gray sm-border-end-0 sm-border-bottom transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                        <div class="client-box">
                              <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/bug.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                              <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_6; ?></span>
                        </div>
                  </div>
                  <!-- end client item -->
                  <!-- start client item -->
                  <div class="col text-center border-end border-color-light-medium-gray xs-border-end-0 xs-border-bottom transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                        <div class="client-box">
                              <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/website.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                              <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_7; ?></span>
                        </div>
                  </div>
                  <!-- end client item -->
                  <!-- start client item -->
                  <div class="col text-center transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                        <div class="client-box">
                              <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/migrating.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                              <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_8; ?></span>
                        </div>
                  </div>
                  <!-- end client item -->
            </div>
            <div class="row mt-7 sm-mt-9 appear anime-complete" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 250, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                  <div class="col-12 text-center">
                        <div class="d-inline-block bg-dark-gray fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px">trust</div>
                        <div class="d-inline-block align-middle"><span class="fs-24 alt-font text-dark-gray d-block fw-600 ls-minus-1px mb-0">Join the 100+ companies trusting Fakerbrains.</span></div>
                  </div>
            </div>
      </div>
</section>

<section class="bg-very-light-gray" style="background-color: #071d37;">
      <div class="container">
            <div class="row justify-content-center mb-3">
                  <div class="col-xl-7 col-lg-8 col-md-9 text-center appear anime-complete" data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <h3 class="fw-700 text-white ls-minus-2px sm-ls-minus-1px">Why Choose Fakerbrains for <br><?php echo get_post_meta($post_id, 'name', true); ?></h3>
                  </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                  <!-- start features box item -->
                  <div class="col icon-with-text-style-07 transition-inner-all mb-30px">
                        <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                              <div class="feature-box-icon">
                                    <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon01.svg" class="h-95px" alt="" data-no-retina=""></a>
                              </div>
                              <div class="feature-box-content">
                                    <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Business process</a>
                                    <p class="mb-30px">An activity or set of activities that can accomplish a specific organizational goal.</p>
                              </div>
                        </div>
                  </div>
                  <!-- end features box item -->
                  <!-- start features box item -->
                  <div class="col icon-with-text-style-07 transition-inner-all mb-30px">
                        <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                              <div class="feature-box-icon">
                                    <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon02.svg" class="h-95px" alt="" data-no-retina=""></a>
                              </div>
                              <div class="feature-box-content">
                                    <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Corporate finance</a>
                                    <p class="mb-30px">We combine deep financial expertise with exclusive tools to help the maximize value.</p>
                              </div>
                        </div>
                  </div>
                  <!-- end features box item -->
                  <!-- start features box item -->
                  <div class="col icon-with-text-style-07 transition-inner-all mb-30px">
                        <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                              <div class="feature-box-icon">
                                    <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon03.svg" class="h-95px" alt="" data-no-retina=""></a>
                              </div>
                              <div class="feature-box-content">
                                    <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Financial services</a>
                                    <p class="mb-30px">Financial services are the economic services provided by the finance industry.</p>
                              </div>
                        </div>
                  </div>
                  <!-- end features box item -->
                  <!-- start features box item -->
                  <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                              <div class="feature-box-icon">
                                    <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon-04.svg" class="h-95px" alt="" data-no-retina=""></a>
                              </div>
                              <div class="feature-box-content">
                                    <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Online consulting</a>
                                    <p class="mb-30px">An activity or set of activities that can accomplish a specific organizational goal.</p>
                              </div>
                        </div>
                  </div>
                  <!-- end features box item -->
                  <!-- start features box item -->
                  <div class="col icon-with-text-style-07 transition-inner-all sm-mb-30px">
                        <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                              <div class="feature-box-icon">
                                    <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon-05.svg" class="h-95px" alt="" data-no-retina=""></a>
                              </div>
                              <div class="feature-box-content">
                                    <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Investment consulting</a>
                                    <p class="mb-30px">We combine deep financial expertise with exclusive tools to help the maximize value.</p>
                              </div>
                        </div>
                  </div>
                  <!-- end features box item -->
                  <!-- start features box item -->
                  <div class="col icon-with-text-style-07 transition-inner-all">
                        <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                              <div class="feature-box-icon">
                                    <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon-06.svg" class="h-95px" alt="" data-no-retina=""></a>
                              </div>
                              <div class="feature-box-content">
                                    <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Banking &amp; financing</a>
                                    <p class="mb-30px">Financial services are the economic services provided by the finance industry.</p>
                              </div>
                        </div>
                  </div>
                  <!-- end features box item -->
            </div>


      </div>
</section>

<section class="py-0">
      <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center align-items-center border-top border-color-light-medium-gray appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [-20, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                  <!-- start fancy text box item -->
                  <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0">
                        <div class="text-box-wrapper align-items-center d-flex">
                              <div class="position-relative text-center w-100">
                                    <div class="text-box last-paragraph-no-margin p-14">
                                          <!-- <i class="fas fa-desktop icon-extra-large d-block mb-20px text-base-color"></i> -->
                                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backend.png" alt="" class="icon-extra-large d-block mb-20px" style="width: 20%; margin: auto;">
                                          <span class="text-dark-gray fw-600 fs-22 lg-fs-20">Frontend Development</span>
                                    </div>
                                    <div class="text-box-hover p-16 lg-p-12 md-p-17 sm-p-12 xs-p-17">
                                          <p class="mb-15px"><?php echo get_post_meta($post_id, 'frontend_lang', true); ?></p>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- end fancy text box item -->
                  <!-- start fancy text box item -->
                  <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0 md-border-end-0">
                        <div class="text-box-wrapper align-items-center d-flex">
                              <div class="position-relative text-center w-100">
                                    <div class="text-box last-paragraph-no-margin p-14">
                                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skill.png" alt="" class="icon-extra-large d-block mb-20px" style="width: 20%; margin: auto;">
                                          <span class="text-dark-gray fw-600 fs-22 lg-fs-20">Backend Development</span>
                                    </div>
                                    <div class="text-box-hover p-16 lg-p-12 md-p-17 sm-p-12 xs-p-17">
                                          <p class="mb-15px"><?php echo get_post_meta($post_id, 'backend_lang', true); ?></p>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- end fancy text box item -->
                  <!-- start fancy text box item -->
                  <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0">
                        <div class="text-box-wrapper align-items-center d-flex">
                              <div class="position-relative text-center w-100">
                                    <div class="text-box last-paragraph-no-margin p-14">
                                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-database-rotation.png" alt="" class="icon-extra-large d-block mb-20px" style="width: 20%; margin: auto;">
                                          <span class="text-dark-gray fw-600 fs-22 lg-fs-20">Database</span>
                                    </div>
                                    <div class="text-box-hover p-16 lg-p-12 md-p-17 sm-p-12 xs-p-17">
                                          <p class="mb-15px"><?php echo get_post_meta($post_id, 'database', true); ?></p>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- end fancy text box item -->
                  <!-- start fancy text box item -->
                  <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0">
                        <div class="text-box-wrapper align-items-center d-flex">
                              <div class="position-relative text-center w-100">
                                    <div class="text-box last-paragraph-no-margin p-14">
                                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-database.png" alt="" class="icon-extra-large d-block mb-20px" style="width: 20%; margin: auto;">
                                          <span class="text-dark-gray fw-600 fs-22 lg-fs-20">Cloud</span>
                                    </div>
                                    <div class="text-box-hover p-16 lg-p-12 md-p-17 sm-p-12 xs-p-17">
                                          <p class="mb-15px"><?php echo get_post_meta($post_id, 'cloud', true); ?></p>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- end fancy text box item -->
            </div>
      </div>
</section>

<section class="position-relative fix-background" style="background-image: url('https://images.pexels.com/photos/7135037/pexels-photo-7135037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
      <div class="opacity-full bg-dark-slate-blue"></div>
      <div class="container position-relative">
            <!-- start dropcaps item -->
            <div class="row justify-content-center">
                  <div class="col-12 col-xxl-6 col-xl-7 col-lg-8 col-md-10 position-relative dropcap-style-05 last-paragraph-no-margin">
                        <p><span class="alt-font first-letter first-letter-big text-white">I</span><span class="text-white opacity-5">f you're interested in our IT solutions or want to discuss how we can help with your technology needs, we'd love to connect! Visit our Contact Us page to get in touch. Whether you have questions about our services, need technical support, or want to explore a potential partnership, we're here to assist. Fill out the form, and our team of experts will reach out to you shortly. Let's work together to bring your ideas to life with innovative IT solutions!</span></p>
                  </div>
            </div>
            <a href="<?php echo home_url() . '/contact-us' ?>" class="btn btn-extra-large btn-transparent-white btn-rounded btn-slide-right d-table d-lg-inline-block lg-mb-15px md-mx-auto f-right">Contact Us<i class="feather icon-feather-phone"></i><span class="bg-white"></span></a>
            <!-- end dropcaps item -->
      </div>
</section>

<section class="bg-very-light-gray position-relative">
      <div class="container">
            <div class="row mb-8">
                  <div class="col-xl-5 col-lg-6 md-mb-50px" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="bg-white border-radius-6px box-shadow-quadruple-large p-10 ps-12 lg-ps-8 lg-pe-8 h-100 d-flex flex-wrap flex-column justify-content-center" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                              <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex align-self-start"><i class="bi bi-chat-square-dots fs-16 me-5px"></i>Lets's work together</span>
                              <h4 class="text-dark-gray ls-minus-1px fw-700 mb-15px">Start a Conversation</h4>
                              <p class="w-85 sm-w-100">We're here to assist with any questions or project inquiries you may have.</p>
                              <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col last-paragraph-no-margin mb-25px">
                                          <p>Call us directly?</p>
                                          <a href="tel:12345678910" class="text-dark-gray fw-600">+1 234 567 8910</a>
                                    </div>
                                    <div class="col last-paragraph-no-margin mb-25px">
                                          <p>Need live support?</p>
                                          <a href="mailto:letsampit@gmail.com" class="text-dark-gray fw-600">letsampit@gmail.com</a>
                                    </div>
                                    <div class="col last-paragraph-no-margin sm-mb-25px">
                                          <p>Join growing team?</p>
                                          <a href="mailto:join@domain.com" class="text-dark-gray fw-600">letsampit@gmail.com</a>
                                    </div>
                                    <div class="col last-paragraph-no-margin">
                                          <p>Visit headquarters?</p>
                                          <a href="https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449" target="_blank" class="text-dark-gray fw-600">View on google map</a>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-6 offset-xl-1 md-mb-50px sm-mb-0" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray ls-minus-2px fw-700">Looking for any help?</h3>
                        <form id="myForm" method="post" class="contact-form-style-03">
                              <label for="exampleInputEmail1" class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Enter your name*</label>
                              <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-emoji-smile text-dark-gray"></i></span>
                                    <input class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail1" type="text" name="name" placeholder="What's your good name" required>
                              </div>
                              <label for="exampleInputEmail2" class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Email address*</label>
                              <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-envelope text-dark-gray"></i></span>
                                    <input class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail2" type="email" name="email" placeholder="Enter your email address" required>
                              </div>
                              <label for="exampleInputEmail3" class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Your message</label>
                              <div class="position-relative form-group form-textarea mb-0">
                                    <textarea class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" id="exampleInputEmail3" name="comment" placeholder="Describe about your project" rows="3"></textarea>
                                    <span class="form-icon"><i class="bi bi-chat-square-dots text-dark-gray"></i></span>
                              </div>
                              <div class="row mt-25px align-items-center">
                                    <div class="col-xl-5 col-lg-12 col-sm-5 text-center text-sm-end text-lg-start xs-mt-25px">
                                          <button class="btn btn-dark-gray btn-medium btn-round-edge btn-box-shadow submit" type="submit" onclick="" id="submitBtn">Send message</button>
                                    </div>
                                    <div class="col-12 mt-20px mb-0 text-center text-md-start">
                                          <div class="form-results d-none"></div>
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
      <div class="shape-image-animation p-0 w-100 bottom-minus-40px xl-bottom-0px d-none d-md-block">
            <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#ffffff">
                  <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                        <animate attributeName="d" dur="5s" values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250" repeatCount="indefinite" />
                  </path>
            </svg>
      </div>
</section>

<script>
      function submitForm() {
            event.preventDefault(); // Prevent default form submission
            console.log('Submitting the form...');

            var formData = $('#myForm').serialize() + '&action=contact_form_submit'; // Serialize form data with action

            $.ajax({
                  url: '<?= admin_url("admin-ajax.php"); ?>', // WordPress AJAX handler
                  type: 'POST',
                  data: formData,
                  success: function(response) {
                        console.log('Success:', response);
                        $('.form-results').html(response); // Show success response

                        // Trigger the modal to show
                        $('#success_tic').modal('show');
                  },
                  error: function(xhr, status, error) {
                        console.log('Error:', error);
                        $('.form-results').html('Error: ' + error); // Show error response
                  }
            });
      }
</script>

<?php get_footer('footer.php');
