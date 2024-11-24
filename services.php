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

<section class=" page-title-big-typography cover-background" style="background-color: rgb(7, 29, 55);">
    <div class="container">
        <div class="row extra-very-small-screen align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium" style=""><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Popular services</h1>
                <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0" style="">Professional services for <br> <?php echo get_post_meta($post_id, 'name', true); ?></h2>
            </div>
        </div>
    </div>
</section>

<!-- // -->

<section id="down-section" style="padding-top: 60px;">
    <h2 style="text-align: center; margin-bottom: 50px">Our <?php echo get_post_meta($post_id, 'name', true); ?> Services</h2>
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-4 row-cols-sm-2 clients-style-04 appear anime-child anime-complete" data-anime="{&quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <!-- start client item -->
            <div class="col text-center border-end border-bottom border-color-light-medium-gray xs-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12" style="">
                <div class="client-box">
                    <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/web-development.png" class=" md-h-30px sm-h-40px mb-20px d-block m-auto" alt="" data-no-retina=""></a> -->
                    <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_1; ?></span>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-end border-bottom border-color-light-medium-gray sm-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12" style="">
                <div class="client-box">
                    <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/technology.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                    <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_2; ?></span>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-end border-bottom border-color-light-medium-gray xs-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12" style="">
                <div class="client-box">
                    <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/mobile-app.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                    <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_3; ?></span>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-bottom border-color-light-medium-gray sm-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12" style="">
                <div class="client-box">
                    <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/ecommerce.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                    <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_4; ?></span>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-end border-color-light-medium-gray xs-border-end-0 sm-border-bottom transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12" style="">
                <div class="client-box">
                    <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/api-development.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                    <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_5; ?></span>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-end border-color-light-medium-gray sm-border-end-0 sm-border-bottom transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12" style="">
                <div class="client-box">
                    <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/bug.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                    <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_6; ?></span>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-end border-color-light-medium-gray xs-border-end-0 xs-border-bottom transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12" style="">
                <div class="client-box">
                    <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/website.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                    <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_7; ?></span>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12" style="">
                <div class="client-box">
                    <!-- <a href="#"><img src="</?php echo get_template_directory_uri(); ?>/assets/images/migrating.png" class="md-h-30px m-auto sm-h-40px mb-20px d-block" alt="" data-no-retina=""></a> -->
                    <span class="text-dark-gray fw-600 fs-22 lg-fs-20"><?php echo $field_8; ?></span>
                </div>
            </div>
            <!-- end client item -->
        </div>
        <div class="row mt-7 sm-mt-9 appear anime-complete" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 250, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
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
            <div class="col-xl-7 col-lg-8 col-md-9 text-center appear anime-complete" data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                <h3 class="fw-700 text-white ls-minus-2px sm-ls-minus-1px">Why Choose Fakerbrains for <br><?php echo get_post_meta($post_id, 'name', true); ?></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all mb-30px" style="">
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
            <div class="col icon-with-text-style-07 transition-inner-all mb-30px" style="">
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
            <div class="col icon-with-text-style-07 transition-inner-all mb-30px" style="">
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
            <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px" style="">
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
            <div class="col icon-with-text-style-07 transition-inner-all sm-mb-30px" style="">
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
            <div class="col icon-with-text-style-07 transition-inner-all" style="">
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
            <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0" style="">
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
            <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0 md-border-end-0" style="">
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
            <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0" style="">
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
            <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0" style="">
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


<section class="bg-gradient-very-light-gray position-relative">
    <h3 class="fw-700 text-dark-gray ls-minus-2px sm-ls-minus-1px center" style="margin-bottom: 3%;">Need a skilled developer for your project?</h3>
    <div class="container">
        <div class="row">
            <div class="col tab-style-01">
                <ul class="nav nav-tabs justify-content-center border-0 text-center fs-18 alt-font fw-600 mb-3" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="tab" href="#tab_sec1" aria-selected="false" role="tab" tabindex="-1">Fixed Cost Hiring</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#tab_sec2" aria-selected="false" role="tab" tabindex="-1">Hourly Hiring</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#tab_sec3" aria-selected="false" role="tab" tabindex="-1">Dedicated Developer Hiring</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#tab_sec4" aria-selected="true" role="tab">Project-based Hiring</a></li>
                </ul>
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane fade in  active show" id="tab_sec1" role="tabpanel">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-6 animation-float sm-mb-50px appear anime-complete" data-anime="{ &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                                <img src="https://via.placeholder.com/580x535" alt="" data-no-retina="">
                            </div>
                            <div class="col-lg-5 offset-lg-1 col-md-6 text-center text-md-start appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;willchange&quot;: &quot;transform&quot;, &quot;opacity&quot;: [0, 1], &quot;rotateY&quot;: [-90, 0], &quot;rotateZ&quot;: [-10, 0], &quot;translateY&quot;: [80, 0], &quot;translateZ&quot;: [50, 0], &quot;staggervalue&quot;: 200, &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;easing&quot;: &quot;easeOutCirc&quot; }" style="will-change: transform;">
                                <span class="ps-20px pe-20px mb-25px md-mb-20px text-uppercase text-cornflower-blue fs-13 lh-40 border-radius-100px md-lh-50 alt-font fw-700 bg-solitude-blue d-inline-block" style="will-change: transform;">Working process</span>
                                <h3 class="alt-font text-dark-gray fw-700 ls-minus-1px" style="will-change: transform;">Fixed Cost Hiring</h3>
                                <p class="w-80 xl-w-85 lg-w-90 md-w-100 mb-30px" style="will-change: transform;">Fixed Cost Hiring is an ideal model for projects with clearly defined goals, deliverables, and timelines. In this model, the entire project scope is agreed upon upfront, and a fixed budget is set before the work begins. This eliminates any cost overruns and allows for precise financial planning.</p>
                                <a href="<?php echo home_url() . '/contact-us' ?>" class="btn btn-medium btn-switch-text btn-rounded btn-base-color btn-box-shadow" style="will-change: transform;">
                                    <span>
                                        <span class="btn-double-text" data-text="Let's go">Let's go</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_sec2" role="tabpanel">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-6 animation-float sm-mb-50px">
                                <img src="https://via.placeholder.com/580x535" alt="" data-no-retina="">
                            </div>
                            <div class="col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                <span class="ps-20px pe-20px mb-25px md-mb-20px text-uppercase text-cornflower-blue fs-13 lh-40 border-radius-100px md-lh-50 alt-font fw-700 bg-solitude-blue d-inline-block">Seo analysis rate</span>
                                <h3 class="alt-font text-dark-gray fw-700 ls-minus-1px">Hourly Hiring</h3>
                                <p class="w-80 xl-w-85 lg-w-90 md-w-100 mb-30px">Hourly Hiring is a flexible model where you hire a developer and pay based on the number of hours they work on your project. This approach is ideal for projects with evolving requirements, ongoing updates, or tasks that don’t have a clearly defined scope at the outset.</p>
                                <a href="<?php echo home_url() . '/contact-us' ?>" class="btn btn-medium btn-switch-text btn-rounded btn-base-color btn-box-shadow">
                                    <span>
                                        <span class="btn-double-text" data-text="Let's go">Let's go</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_sec3" role="tabpanel">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-6 animation-float sm-mb-50px">
                                <img src="https://via.placeholder.com/580x535" alt="" data-no-retina="">
                            </div>
                            <div class="col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                <span class="ps-20px pe-20px mb-25px md-mb-20px text-uppercase text-cornflower-blue fs-13 lh-40 border-radius-100px md-lh-50 alt-font fw-700 bg-solitude-blue d-inline-block">Working process</span>
                                <h3 class="alt-font text-dark-gray fw-700 ls-minus-1px">Dedicated Developer Hiring</h3>
                                <p class="w-80 xl-w-85 lg-w-90 md-w-100 mb-30px">Dedicated Developer Hiring is a model where you hire a developer (or a team) to work exclusively on your project for a set duration, whether it's full-time, part-time, or for a specific period. This developer becomes an extended part of your team, working solely on your project needs and goals.</p>
                                <a href="<?php echo home_url() . '/contact-us' ?>" class="btn btn-medium btn-switch-text btn-rounded btn-base-color btn-box-shadow">
                                    <span>
                                        <span class="btn-double-text" data-text="Let's go">Let's go</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_sec4" role="tabpanel">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-6 animation-float sm-mb-50px">
                                <img src="https://via.placeholder.com/580x535" alt="" data-no-retina="">
                            </div>
                            <div class="col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                                <span class="ps-20px pe-20px mb-25px md-mb-20px text-uppercase text-cornflower-blue fs-13 lh-40 border-radius-100px md-lh-50 alt-font fw-700 bg-solitude-blue d-inline-block">Optimize your website</span>
                                <h3 class="alt-font text-dark-gray fw-700 ls-minus-1px">Project-based Hiring</h3>
                                <p class="w-80 xl-w-85 lg-w-90 md-w-100 mb-30px">Project-based Hiring is a model where you hire a developer or team to complete a specific project with a clear set of deliverables. Once the project is finished, the engagement ends. This model is ideal for one-time tasks like building a website, creating a plugin, or developing a custom feature.</p>
                                <a href="<?php echo home_url() . '/contact-us' ?>" class="btn btn-medium btn-switch-text btn-rounded btn-base-color btn-box-shadow">
                                    <span>
                                        <span class="btn-double-text" data-text="Let's go">Let's go</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- form -->
<section class="" style="background-color: #071d37;">
    <div class="opacity-extra-medium"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 md-mb-40px">
                <h3 class="text-white fw-500 ls-minus-1px">Project in mind? Get in touch!</h3>
                <p class="text-white opacity-7">Please complete the form, and our team will reach out to you shortly.</p>
                <div class="row row-cols-1 justify-content-center mt-30px">
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div class="feature-box-icon feature-box-icon-rounded bg-white w-80px h-80px rounded-circle me-20px">
                                <i class="bi bi-envelope text-dark icon-very-medium"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-white opacity-7 d-block">Join our growing team?</span>
                                <span class="d-block fs-22 text-white"><a href="mailto:letsampit@gmail.com" class="text-white text-decoration-line-bottom">letsampit@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
            <div class="col-lg-7 offset-xl-1">
                <form method="post" class="row row-cols-1 row-cols-md-2 justify-content-center" id="myForm">
                    <input class="border-color-transparent-white-very-light placeholder-light form-control" type="hidden" name="service_type" value="<?php echo get_post_meta($post_id, 'name', true); ?>">
                    <div class="col mb-30px">
                        <input class="border-color-transparent-white-very-light bg-transparent placeholder-light form-control required" type="text" name="name" placeholder="Your name*">
                    </div>
                    <div class="col mb-30px">
                        <input class="border-color-transparent-white-very-light bg-transparent placeholder-light form-control" type="tel" name="phone" placeholder="Your phone">
                    </div>
                    <div class="col mb-30px">
                        <input class="border-color-transparent-white-very-light bg-transparent placeholder-light form-control required" type="email" name="email" placeholder="Your email address*">
                    </div>
                    <div class="col sm-mb-30px">
                        <input class="border-color-transparent-white-very-light bg-transparent placeholder-light form-control" type="text" name="subject" placeholder="Your subject">
                    </div>
                    <div class="col-md-12">
                        <textarea class="border-color-transparent-white-very-light bg-transparent placeholder-light form-control" cols="40" rows="4" name="comment" placeholder="Your message"></textarea>
                        <input type="hidden" name="redirect" value="">
                        <button class="btn btn-medium btn-white mt-30px btn-round-edge submit fw-700" id="submitBtn" onclick="submitForm()">Send message</button>
                        <div class=" mt-20px d-none">
                            <div id="success_tic" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <a class="close" href="#" data-dismiss="modal">&times;</a>
                                        <div class="page-body">
                                            <div class="head">
                                                <h3 style="margin-top:5px;">Lorem ipsum dolor sit amet</h3>
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                            </div>
                                            <h1 style="text-align:center;">
                                                <div class="checkmark-circle">
                                                    <div class="background"></div>
                                                    <div class="checkmark draw"></div>
                                                </div>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
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
