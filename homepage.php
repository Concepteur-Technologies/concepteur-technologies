<?php
/*
Template Name: HomePage
*/
get_header();
?>
<!-- start hero section -->
<section class="top-space-padding pb-0 bg-gradient-very-light-gray overflow-hidden position-relative lg-pb-30px"> 
    <div class="container h-100">
        <div class="position-absolute top-120px left-40 animation-rotation d-none d-xl-block">
            <img src="<?php echo get_template_directory_uri().'/assets/images/demo-data-analysis-bg-01.webp';?>" data-bottom-top="transform: rotate(-50deg) translateY(-50px)" data-top-bottom="transform:rotate(10deg) translateY(50px)" alt="">
        </div> 
        <div class="position-absolute top-20 right-10 animation-rotation d-none d-sm-block">
            <img src="<?php echo get_template_directory_uri().'/assets/images/demo-data-analysis-bg-03.webp';?>" data-bottom-top="transform: rotate(-50deg) translateY(-50px)" data-top-bottom="transform:rotate(10deg) translateY(50px)" alt="">
        </div> 
        <div class="position-absolute bottom-50px left-0px animation-float d-none d-xl-block">
            <img src="<?php echo get_template_directory_uri().'/assets/images/demo-data-analysis-bg-02.webp';?>" data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt="">
        </div> 
        <div class="row align-items-center h-100 md-mt-50px">
            <div class="col-xl-6 col-lg-6 mb-9 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>  
                <div class="d-flex align-items-start align-items-sm-center alt-font mb-30px">
                    <div class="flex-shrink-0 bg-cabaret-red fw-600 text-white text-uppercase ps-20px pe-20px fs-12 me-15px border-radius-100px">Get started</div>
                    <span class="fs-18 fw-500" data-fancy-text='{ "effect": "rotate", "string": ["Real-time data score analysis", "Exploratory data analysis", "Tailored pricing plans"], "speed": 50, "duration": 3500 }'></span> 
                </div>
                <h1 class="alt-font text-dark-gray fw-700 ls-minus-2px mb-20px">Analytics solutions for new <span class="text-highlight">business.<span class="bg-cabaret-red opacity-3 h-12px bottom-15px"></span></span></h1> 
                <div class="alt-font fw-500 fs-19 w-85 sm-w-100 mb-35px xs-mb-25px">Data analytics is the set of qualitative and quantitative approach to derive valuable insights of data.</div>
                <a href="#" class="btn btn-extra-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow btn-icon-left me-25px">
                    <span> 
                        <span class="btn-text">How it works</span>
                        <span class="btn-icon"><i class="feather icon-feather-youtube"></i></span>
                        <span class="btn-icon"><i class="feather icon-feather-youtube"></i></span>
                    </span>
                </a>
                <a href="mailto:start@domain.com" class="btn btn-link btn-hover-animation-switch btn-extra-large text-dark-gray btn-icon-left align-middle p-0 xs-mt-20px xs-mb-20px">
                    <span>
                        <span class="btn-text">start@domain.com</span>
                        <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                        <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                    </span> 
                </a>
            </div> 
            <div class="col-xl-6 col-lg-6 align-self-end">
                <div class="position-absolute right-0px bottom-20px md-bottom-5 lg-w-65 md-w-100">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/demo-data-analysis-bg-05.webp';?>" class="" alt="">
                </div>
                <div class="outside-box-right-20 text-end position-relative z-index-9 animation-float">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/demo-data-analysis-bg-04.webp';?>" alt=""> 
                </div>
            </div>
        </div> 
    </div>
</section>
<!-- end hero section -->  
<!-- start section -->
<section class="p-0 position-relative">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/demo-data-analysis-bg-06.png" class="position-absolute top-20 left-0px" data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt=""/>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/demo-data-analysis-bg-07.png" class="position-absolute top-10 right-0px lg-w-30 lg-bottom-0px" data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt=""/>
    <div class="container">
        <div class="row justify-content-center mb-2" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 text-center">
                <div class="bg-base-color fw-600 text-white text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px">About company</div>
                <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px">Data <span class="text-highlight">analytics<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span> and business model solution</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 justify-content-center mb-2" data-anime='{ "el": "childs", "perspective": [1200,1200], "translateY": [30, 0], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box feature-box-left-icon text-start bg-ghost-white border-radius-4px ps-10 pe-10 pt-8 pb-8 overflow-hidden last-paragraph-no-margin xs-pe-5 xs-ps-5">
                    <div class="feature-box-icon">
                        <img src="https://via.placeholder.com/60x60" alt=""/>
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600 mb-5px">Real-time segmentation</span>
                        <p class="w-90 xl-w-100">This model is idea-driven as it involves daily engagement activities with clients.</p>
                    </div>
                </div>  
            </div>
            <!-- end features box item -->                    
            <!-- start features box item -->
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box feature-box-left-icon text-start bg-cosmic-latte-white border-radius-4px ps-10 pe-10 pt-8 pb-8 overflow-hidden last-paragraph-no-margin xs-pe-5 xs-ps-5">
                    <div class="feature-box-icon">
                        <img src="https://via.placeholder.com/60x60" alt=""/>
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600 mb-5px">Exploratory data analysis</span>
                        <p class="w-90 xl-w-100">This model is idea-driven as it involves daily engagement activities with clients.</p>
                    </div>
                </div>  
            </div>
            <!-- end features box item -->                    
            <!-- start features box item -->
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box feature-box-left-icon text-start bg-chablis-red border-radius-4px ps-10 pe-10 pt-8 pb-8 overflow-hidden last-paragraph-no-margin position-relative xs-pe-5 xs-ps-5">
                    <div class="feature-box-icon">
                        <img src="https://via.placeholder.com/60x60" alt=""/>
                    </div>
                    <div class="feature-box-content">
                        <div class="bg-white fw-600 text-dark-gray text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-10px position-absolute right-25px top-25px box-shadow-medium-bottom xs-position-relative xs-right-0px xs-top-0px">Popular</div>
                        <span class="d-block alt-font text-dark-gray fs-20 fw-600 mb-5px">Business intelligence</span>
                        <p class="w-90 xl-w-100">This model is idea-driven as it involves daily engagement activities with clients.</p>
                    </div>
                </div>  
            </div>
            <!-- end features box item -->                    
            <!-- start features box item -->
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box feature-box-left-icon text-start bg-lavender-violet border-radius-4px ps-10 pe-10 pt-8 pb-8 overflow-hidden last-paragraph-no-margin xs-pe-5 xs-ps-5">
                    <div class="feature-box-icon">
                        <img src="https://via.placeholder.com/60x60" alt=""/>
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600 mb-5px">Prescriptive analytics</span>
                        <p class="w-90 xl-w-100">This model is idea-driven as it involves daily engagement activities with clients.</p>
                    </div>
                </div>  
            </div>
            <!-- end features box item -->                    
        </div>
        <div class="row justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-auto text-center">
                <div class="d-inline-block"><img src="https://via.placeholder.com/60x50" alt=""></div>
                <div class="d-inline-block text-dark-gray fs-22 alt-font fw-500">World-class <span class="fw-700">30,000+ companies</span> are already work with crafto.</div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section --> 
<section class="position-relative pb-0">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/demo-data-analysis-bg-08.png" class="position-absolute top-50px lg-top-120px left-0px lg-w-50" data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt=""/>
    <div class="container position-relative">
        <div class="row align-items-center mb-4 sm-mb-25px">
            <div class="col-xl-6 col-lg-6 text-center text-lg-start md-mb-30px" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                <img src="https://via.placeholder.com/580x740" class="md-w-70 sm-w-100" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="bg-base-color fw-600 text-white text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-25px">Effective benefits</div>
                <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px w-95">Target audience for your <span class="text-highlight">business.<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span></h2>
                <p>Data analysis also provides researchers with a selection of different tools, such as descriptive statistics, inferential analysis and quantitative analysis.</p>
                <div class="icon-with-text-style-08 mb-10px">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                        <div class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                            <i class="fa-solid fa-check fs-14 text-dark-gray"></i> 
                        </div>
                        <div class="feature-box-content"> 
                            <span class="text-dark-gray fw-500">Personalization of products and services.</span>
                        </div>
                    </div>
                </div>
                <div class="icon-with-text-style-08 mb-10px">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                        <div class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                            <i class="fa-solid fa-check fs-14 text-dark-gray"></i> 
                        </div>
                        <div class="feature-box-content"> 
                            <span class="text-dark-gray fw-500">Improving quality of products and services.</span>
                        </div>
                    </div>
                </div>
                <div class="icon-with-text-style-08 mb-10px">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                        <div class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                            <i class="fa-solid fa-check fs-14 text-dark-gray"></i> 
                        </div>
                        <div class="feature-box-content"> 
                            <span class="text-dark-gray fw-500">Increase the efficiency of the work.</span>
                        </div>
                    </div>
                </div>
                <div class="mt-35px">
                    <a href="#" class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow btn-icon-left me-30px">
                        <span> 
                            <span class="btn-text">How it works</span>
                            <span class="btn-icon"><i class="feather icon-feather-youtube"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-youtube"></i></span>
                        </span>
                    </a>
                    <a href="#" class="btn btn-link btn-hover-animation-switch btn-extra-large text-dark-gray btn-icon-left align-middle p-0 xs-mt-20px xs-mb-20px">
                        <span>
                            <span class="btn-text">Explore services</span>
                            <span class="btn-icon"><i class="feather icon-feather-briefcase"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-briefcase"></i></span>
                        </span> 
                    </a>
                </div>
            </div> 
        </div>
    </div>
    <div class="container-fluid">
        <div class="row position-relative">
            <div class="col swiper text-cente" data-slider-options='{ "slidesPerView": "auto", "spaceBetween":0, "centeredSlides": true, "speed": 10000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":1, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                <div class="swiper-wrapper swiper-width-auto pb-60px sm-pb-30px marquee-slide">
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700"><span class="w-20px h-20px border border-radius-100 border-2 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>predictive analytics</div>
                    </div>
                    <!-- end client item --> 
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700"><span class="w-20px h-20px border border-radius-100 border-2 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>data engineers</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700"><span class="w-20px h-20px border border-radius-100 border-2 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>statistical modeling</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700"><span class="w-20px h-20px border border-radius-100 border-2 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>predictive analytics</div>
                    </div>
                    <!-- end client item --> 
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700"><span class="w-20px h-20px border border-radius-100 border-2 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>data engineers</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700"><span class="w-20px h-20px border border-radius-100 border-2 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>statistical modeling</div>
                    </div>
                    <!-- end client item --> 
                </div> 
            </div>  
        </div> 
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="position-relative overflow-hidden p-0">
    <div class="container">
        <div class="row">
            <div class="col-12 position-relative" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="outside-box-right-40 sm-outside-box-right-0">
                    <div class="swiper magic-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper pt-20px">
                            <!-- start slider item --> 
                            <div class="swiper-slide">
                                <div class="p-11 bg-gradient-very-ghost-white position-relative overflow-hidden border-radius-6px xl-p-8">
                                    <img src="https://via.placeholder.com/540x545" class="position-absolute right-0px top-0px lg-w-60 lg-right-minus-70px xs-position-relative xs-w-100 xs-right-minus-40px xs-top-minus-40px" alt="">
                                    <div class="w-45 position-relative lg-w-65 xs-w-100 xs-mt-minus-40px">
                                        <div class="bg-white fw-700 text-dark-gray text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px box-shadow-medium-bottom">our services</div>
                                        <h3 class="alt-font mb-15px text-dark-gray fw-700 ls-minus-1px">Data <span class="text-highlight">engineers<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span></h3>
                                        <p class="w-95">Data analysis also provides researchers with a selection of different tools, such as descriptive statistics.</p>
                                        <a href="demo-data-analysis-what-we-do.html" class="btn btn-medium btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow">
                                            <span> 
                                                <span class="btn-text">Learn more</span>
                                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="p-11 bg-gradient-very-ghost-white position-relative overflow-hidden border-radius-6px xl-p-8">
                                    <img src="https://via.placeholder.com/540x545" class="position-absolute right-0px top-0px lg-w-60 lg-right-minus-70px xs-position-relative xs-w-100 xs-right-minus-40px xs-top-minus-40px" alt="">
                                    <div class="w-45 position-relative lg-w-65 xs-w-100 xs-mt-minus-40px">
                                        <div class="bg-white fw-700 text-dark-gray text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px box-shadow-medium-bottom">our services</div>
                                        <h3 class="alt-font mb-15px text-dark-gray fw-700 ls-minus-1px">Data <span class="text-highlight">mining<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span></h3>
                                        <p class="w-95">Data analysis also provides researchers with a selection of different tools, such as descriptive statistics.</p>
                                        <a href="demo-data-analysis-what-we-do.html" class="btn btn-medium btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow">
                                            <span> 
                                                <span class="btn-text">Learn more</span>
                                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="p-11 bg-gradient-very-ghost-white position-relative overflow-hidden border-radius-6px xl-p-8">
                                    <img src="https://via.placeholder.com/540x545" class="position-absolute right-0px top-0px lg-w-60 lg-right-minus-70px xs-position-relative xs-w-100 xs-right-minus-40px xs-top-minus-40px" alt="">
                                    <div class="w-45 position-relative lg-w-65 xs-w-100 xs-mt-minus-40px">
                                        <div class="bg-white fw-700 text-dark-gray text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px box-shadow-medium-bottom">our services</div>
                                        <h3 class="alt-font mb-15px text-dark-gray fw-700 ls-minus-1px">Data <span class="text-highlight">analysis<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span></h3>
                                        <p class="w-95">Data analysis also provides researchers with a selection of different tools, such as descriptive statistics.</p>
                                        <a href="demo-data-analysis-what-we-do.html" class="btn btn-medium btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow">
                                            <span> 
                                                <span class="btn-text">Learn more</span>
                                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="p-11 bg-gradient-very-ghost-white position-relative overflow-hidden border-radius-6px xl-p-8">
                                    <img src="https://via.placeholder.com/540x545" class="position-absolute right-0px top-0px lg-w-60 lg-right-minus-70px xs-position-relative xs-w-100 xs-right-minus-40px xs-top-minus-40px" alt="">
                                    <div class="w-45 position-relative lg-w-65 xs-w-100 xs-mt-minus-40px">
                                        <div class="bg-white fw-700 text-dark-gray text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px box-shadow-medium-bottom">our services</div>
                                        <h3 class="alt-font mb-15px text-dark-gray fw-700 ls-minus-1px">Data <span class="text-highlight">mining<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span></h3>
                                        <p class="w-95">Data analysis also provides researchers with a selection of different tools, such as descriptive statistics.</p>
                                        <a href="demo-data-analysis-what-we-do.html" class="btn btn-medium btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow">
                                            <span> 
                                                <span class="btn-text">Learn more</span>
                                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                        </div>
                    </div>
                </div>
                <!-- start slider pagination -->
                <!--<div class="swiper-pagination slider-three-slide-pagination swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                <!-- end slider pagination --> 
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="position-relative overflow-hidden pb-4">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/demo-data-analysis-bg-07.png" class="position-absolute top-minus-100px lg-top-0px right-0px lg-w-25" data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt=""/> 
    <div class="position-absolute top-20 right-minus-50px sm-right-15px animation-rotation d-none d-sm-block">
        <img class="lg-w-120px" src="https://via.placeholder.com/150x129"  data-bottom-top="transform: rotate(-10deg) translateX(-80px)" data-top-bottom="transform:rotate(10deg) translateX(80px)" alt="">
    </div> 
    <div class="container position-relative">
        <div class="position-absolute top-minus-50px left-0px sm-top-minus-30px left-15px animation-rotation d-none d-sm-block">
            <img class="lg-w-140px" src="https://via.placeholder.com/165x140" data-bottom-top="transform: rotate(-50deg) translateY(-50px)" data-top-bottom="transform:rotate(10deg) translateY(50px)" alt="">
        </div>
        <div class="row justify-content-center mb-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-lg-6 text-center position-relative">
                <div class="bg-base-color fw-600 text-white text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px">How it works</div>
                <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px">Simple <span class="text-highlight">process<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span></h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center position-relative" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start process step item -->
            <div class="col process-step-style-10 last-paragraph-no-margin ps-5 pe-5 pt-6 pb-6 position-relative lg-ps-4 lg-pe-4 lg-pt-8 sm-pt-60px">
                <div class="process-step-icon-box position-absolute top-0px left-20px xs-left-10px">
                    <div class="number d-inline-block fs-110 fw-700 text-outline text-outline-color-extra-medium-gray">01</div>
                </div>
                <h6 class="alt-font fw-700 text-dark-gray mb-10px position-relative">Data collecting</h6>
                <p class="w-85 xl-w-100">Data can be collected through several sources including the online community.</p>
            </div>
            <!-- end process step item --> 
            <!-- start process step item -->
            <div class="col process-step-style-10 last-paragraph-no-margin ps-5 pe-5 pt-6 pb-6 position-relative lg-ps-4 lg-pe-4 lg-pt-8 sm-pt-60px">
                <div class="process-step-icon-box position-absolute top-0px left-20px xs-left-10px">
                    <div class="number d-inline-block fs-110 fw-700 text-outline text-outline-color-extra-medium-gray">02</div>
                </div>
                <h6 class="alt-font fw-700 text-dark-gray mb-10px position-relative">Data organizing</h6>
                <p class="w-85 xl-w-100">The data must be organized after it is collected so that it can be examined.</p>
            </div>
            <!-- end process step item --> 
            <!-- start process step item -->
            <div class="col process-step-style-10 last-paragraph-no-margin ps-5 pe-5 pt-6 pb-6 position-relative lg-ps-4 lg-pe-4 lg-pt-8 sm-pt-60px">
                <div class="process-step-icon-box position-absolute top-0px left-20px xs-left-10px">
                    <div class="number d-inline-block fs-110 fw-700 text-outline text-outline-color-extra-medium-gray">03</div>
                </div>
                <h6 class="alt-font fw-700 text-dark-gray mb-10px position-relative">Data cleaning</h6>
                <p class="w-80 xl-w-100">The data is first cleaned up to ensure that there is no overlap or mistake. </p>
            </div>
            <!-- end process step item --> 
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="p-0 position-relative">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/demo-data-analysis-bg-08.png" class="position-absolute top-50px left-0px lg-w-50"  data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt=""/>
    <!-- start marquees -->
    <div class="w-100 overflow-hidden d-block position-absolute top-minus-80px sm-top-minus-50px">
        <div class="alt-font fw-600 fs-225 ls-minus-7px text-gradient-orange-sky-blue text-nowrap opacity-3 text-center" data-bottom-top="transform: translate3d(100px, 0px, 0px);" data-top-bottom="transform: translate3d(-100px, 0px, 0px);">we love data analytics</div> 
    </div>
    <!-- end marquees -->
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-xl-6 col-lg-6 animation-float text-center text-lg-start" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                <img src="https://via.placeholder.com/580x840" class="md-w-70 sm-w-100" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="bg-base-color fw-600 text-white text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-20px">Flexible pricing</div>
                <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px mb-50px sm-mb-35px">Tailored <span class="text-highlight">pricing<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span> plans for everyone.</h2> 
                <div class="accordion pricing-table-style-04 mb-50px" id="accordion-style-01" data-active-icon="fa-angle-up" data-inactive-icon="fa-angle-down">
                    <!-- start accordion item -->
                    <div class="accordion-item bg-white active-accordion box-shadow-quadruple-large mb-25px">
                        <div class="accordion-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-01-01" aria-expanded="true" data-bs-parent="#accordion-style-01"> 
                                <div class="accordion-title position-relative d-flex align-items-center pe-20px mb-0 text-dark-gray fw-600 fs-20 alt-font ls-05px">Standard plan<span class="icon-round bg-extra-medium-gray text-dark-gray w-25px h-25px"><i class="fa-solid fa-angle-up"></i></span></div>
                            </a>
                        </div>
                        <div id="accordion-style-01-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-01">
                            <div class="accordion-body last-paragraph-no-margin">
                                <p class="opacity-4 alt-font ls-05px w-80 xl-w-90">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
                                <div class="d-sm-flex align-items-end mt-25px">
                                    <h5 class="text-white mb-0 alt-font ls-05px fw-500 xs-mb-20px">$29.99 <span class="fs-17 opacity-4 fw-400">/ Monthly</span></h5>
                                    <a href="demo-data-analysis-pricing.html" class="btn btn-transparent-white-light btn-round-edge btn-small border-1 ms-auto fw-500">Get started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="accordion-item bg-white box-shadow-quadruple-large mb-25px">
                        <div class="accordion-header">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-01-02" aria-expanded="false" data-bs-parent="#accordion-style-01">
                                <div class="accordion-title position-relative d-flex align-items-center pe-20px mb-0 text-dark-gray fw-600 fs-20 alt-font ls-05px">Premium plan<span class="icon-round bg-extra-medium-gray text-dark-gray w-25px h-25px"><i class="fa-solid fa-angle-down"></i></span></div>
                            </a>
                        </div>
                        <div id="accordion-style-01-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-01">
                            <div class="accordion-body last-paragraph-no-margin">
                                <p class="opacity-4 alt-font ls-05px w-80 xl-w-90">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
                                <div class="d-sm-flex align-items-end mt-25px">
                                    <h5 class="text-white mb-0 alt-font ls-05px fw-500 xs-mb-20px">$39.99 <span class="fs-17 opacity-4 fw-400">/ Monthly</span></h5>
                                    <a href="demo-data-analysis-pricing.html" class="btn btn-transparent-white-light btn-round-edge btn-small border-1 ms-auto fw-500">Get started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                </div>
            </div>
        </div>
    </div> 
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0 overflow-hidden">
    <div class="container-fluid">
        <div class="row justify-content-center mb-3 sm-mb-30px">
            <div class="col-lg-6 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="bg-base-color fw-600 text-white text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px">Testimonials</div>
                <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px mb-0">Happy <span class="text-highlight">customers<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span></h2>
            </div>
        </div>
        <div class="row mb-3 md-mb-35px" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-12 review-style-10 position-relative">
                <div class="outside-box-right-1 outside-box-left-1">
                    <div class="swiper magic-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 4 }, "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper mt-10px mb-10px">
                            <!-- start slider item --> 
                            <div class="swiper-slide"> 
                                <!-- start review item -->
                                <div class="border border-color-extra-medium-gray border-radius-6px d-flex">
                                    <div class="p-15px">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-15 text-dark-gray fw-700 text-uppercase ls-1px">Emma causer</div>
                                        </div>
                                    </div>
                                    <div class="p-35px border-start border-color-extra-medium-gray d-flex justify-content-center md-p-30px xs-p-25px">
                                        <div>
                                            <p class="mb-15px w-95 xl-w-100">Analytics has excellent up-time and remains fast and responsive, even with 2 million records in the database.</p>
                                            <div class="bg-golden-yellow text-white d-inline-block fs-13 lh-32 border-radius-100px ps-15px pe-15px">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- end review item --> 
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item --> 
                            <div class="swiper-slide"> 
                                <!-- start review item -->
                                <div class="border border-color-extra-medium-gray border-radius-4px d-flex">
                                    <div class="p-15px">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-15 text-dark-gray fw-700 text-uppercase ls-1px">Lesley simms</div>
                                        </div>
                                    </div>
                                    <div class="p-35px border-start border-color-extra-medium-gray d-flex justify-content-center md-p-30px xs-p-25px">
                                        <div>
                                            <p class="mb-15px w-95 xl-w-100">We implemented all our dashboards using this smart and amazing software. Analytics has changed my business!</p>
                                            <div class="bg-golden-yellow text-white d-inline-block fs-13 lh-32 border-radius-100px ps-15px pe-15px">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- end review item --> 
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item --> 
                            <div class="swiper-slide"> 
                                <!-- start review item -->
                                <div class="border border-color-extra-medium-gray border-radius-4px d-flex">
                                    <div class="p-15px">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-15 text-dark-gray fw-700 text-uppercase ls-1px">Nickie coombs</div>
                                        </div>
                                    </div>
                                    <div class="p-35px border-start border-color-extra-medium-gray d-flex justify-content-center md-p-30px xs-p-25px">
                                        <div>
                                            <p class="mb-15px w-95 xl-w-100">I chose crafto because of the interface and the robust features to handle our volumes of data quickly and efficiently.</p>
                                            <div class="bg-golden-yellow text-white d-inline-block fs-13 lh-32 border-radius-100px ps-15px pe-15px">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- end review item --> 
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item --> 
                            <div class="swiper-slide"> 
                                <!-- start review item -->
                                <div class="border border-color-extra-medium-gray border-radius-4px d-flex">
                                    <div class="p-15px">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-15 text-dark-gray fw-700 text-uppercase ls-1px">Bella roberts</div>
                                        </div>
                                    </div>
                                    <div class="p-35px border-start border-color-extra-medium-gray d-flex justify-content-center md-p-30px xs-p-25px">
                                        <div>
                                            <p class="mb-15px w-95 xl-w-100">Crafto analytics offers a free web-based reporting solution that usually only big-budget sites can afford.</p>
                                            <div class="bg-golden-yellow text-white d-inline-block fs-13 lh-32 border-radius-100px ps-15px pe-15px">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- end review item --> 
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item --> 
                            <div class="swiper-slide"> 
                                <!-- start review item -->
                                <div class="border border-color-extra-medium-gray border-radius-4px d-flex">
                                    <div class="p-15px">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-15 text-dark-gray fw-700 text-uppercase ls-1px">Lesley simms</div>
                                        </div>
                                    </div>
                                    <div class="p-35px border-start border-color-extra-medium-gray d-flex justify-content-center md-p-30px xs-p-25px">
                                        <div>
                                            <p class="mb-15px w-95 xl-w-100">Crafto analytics makes it a lot easier to have access to data tables, create pivot charts and reports.</p>
                                            <div class="bg-golden-yellow text-white d-inline-block fs-13 lh-32 border-radius-100px ps-15px pe-15px">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end review item --> 
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item --> 
                            <div class="swiper-slide"> 
                                <!-- start review item -->
                                <div class="border border-color-extra-medium-gray border-radius-4px d-flex">
                                    <div class="p-15px">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-15 text-dark-gray fw-700 text-uppercase ls-1px">Bella roberts</div>
                                        </div>
                                    </div>
                                    <div class="p-35px border-start border-color-extra-medium-gray d-flex justify-content-center md-p-30px xs-p-25px">
                                        <div>
                                            <p class="mb-15px w-95 xl-w-100">Impressive attention to detail in their data analysis. The service is reliable and delivers exceptional results.</p>
                                            <div class="bg-golden-yellow text-white d-inline-block fs-13 lh-32 border-radius-100px ps-15px pe-15px">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- end review item --> 
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item --> 
                            <div class="swiper-slide"> 
                                <!-- start review item -->
                                <div class="border border-color-extra-medium-gray border-radius-4px d-flex">
                                    <div class="p-15px">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-15 text-dark-gray fw-700 text-uppercase ls-1px">Lesley simms</div>
                                        </div>
                                    </div>
                                    <div class="p-35px border-start border-color-extra-medium-gray d-flex justify-content-center md-p-30px xs-p-25px">
                                        <div>
                                            <p class="mb-15px w-95 xl-w-100">We implemented all our dashboards using this smart and amazing software. Analytics has changed my business!</p>
                                            <div class="bg-golden-yellow text-white d-inline-block fs-13 lh-32 border-radius-100px ps-15px pe-15px">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- end review item --> 
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item --> 
                            <div class="swiper-slide"> 
                                <!-- start review item -->
                                <div class="border border-color-extra-medium-gray border-radius-4px d-flex">
                                    <div class="p-15px">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-15 text-dark-gray fw-700 text-uppercase ls-1px">Nickie coombs</div>
                                        </div>
                                    </div>
                                    <div class="p-35px border-start border-color-extra-medium-gray d-flex justify-content-center md-p-30px xs-p-25px">
                                        <div>
                                            <p class="mb-15px w-95 xl-w-100">I chose crafto because of the interface and the robust features to handle our volumes of data quickly and efficiently.</p>
                                            <div class="bg-golden-yellow text-white d-inline-block fs-13 lh-32 border-radius-100px ps-15px pe-15px">
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- end review item --> 
                            </div>
                            <!-- end slider item -->
                        </div>
                    </div>
                </div>
                <!-- start slider pagination -->
                <!--<div class="swiper-pagination slider-three-slide-pagination swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                <!-- end slider pagination -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center row-cols-3 row-cols-md-6 row-cols-sm-3 clients-style-03 mb-4 md-mb-6" data-anime='{ "el": "childs", "scale": [0, 1], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <!-- start client item -->
            <div class="col text-center sm-mb-35px">
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/192x192" alt="" class="box-shadow-extra-large border-radius-100px w-150px"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-mb-35px">
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/193x193" alt="" class="box-shadow-extra-large border-radius-100px w-150px"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-mb-35px">
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/192x192" alt="" class="box-shadow-extra-large border-radius-100px w-150px"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-mb-35px">
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/192x192" alt="" class="box-shadow-extra-large border-radius-100px w-150px"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-mb-35px">
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/192x193" alt="" class="box-shadow-extra-large border-radius-100px w-150px"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-mb-35px">
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/193x192" alt="" class="box-shadow-extra-large border-radius-100px w-150px"></a>
                </div>
            </div>
            <!-- end client item -->                 
        </div>
        <div class="row justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-auto text-center">
                <div class="d-inline-block"><img src="https://via.placeholder.com/60x50" alt=""></div>
                <div class="d-inline-block text-dark-gray fs-22 alt-font fw-500">World-class <span class="fw-700">30,000+ companies</span> are already work with crafto.</div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-gradient-very-ghost-white pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 position-relative text-center text-lg-start">
                <div class="bg-base-color fw-600 text-white text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-20px">Customer support</div>
                <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px w-50 mb-10px lg-w-100">Have you <span class="text-highlight">question?<span class="bg-base-color opacity-3 h-10px bottom-10px"></span></span></h2>
                <div class="row align-items-center g-0">
                    <div class="w-100 sm-mt-5px d-flex align-items-center justify-content-center justify-content-lg-start">
                        <img src="https://via.placeholder.com/156x113" alt="">
                        <span class="alt-font fw-500 lh-26 fs-18 position-relative text-start">Support executive <span class="fw-700 text-dark-gray d-block">1000+ satisfied.</span></span>
                    </div>
                </div>
                <img src="https://via.placeholder.com/280x390" class="position-absolute right-50px top-minus-180px animation-float xl-w-45 d-none d-lg-block" alt=""/>
            </div>
            <div class="col-lg-6">
                <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                    <!-- start accordion item -->
                    <div class="accordion-item active-accordion">
                        <div class="accordion-header border-bottom border-color-extra-medium-gray">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                    <i class="feather icon-feather-minus"></i><span class="fs-18 alt-font fw-600">What are some examples of AI technologies?</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                <p>Lorem ipsum is simply dummy text of the printing typesetting industry. Industry's standard dummy text ever since the dummy.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-extra-medium-gray">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                    <i class="feather icon-feather-plus"></i><span class="fs-18 alt-font fw-600">What is potential for AI in customer service?</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                <p>Lorem ipsum is simply dummy text of the printing typesetting industry. Industry's standard dummy text ever since the dummy.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-transparent">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                    <i class="feather icon-feather-plus"></i><span class="fs-18 alt-font fw-600">Do you charge by the job or by the hour?</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                <p>Lorem ipsum is simply dummy text of the printing typesetting industry. Industry's standard dummy text ever since the dummy.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                </div>
            </div>
        </div> 
    </div>
</section>
        <!-- end section -->



<?php
get_footer();