<?php

/**
 * Template Name: Contact Us
 */
get_header('header.php');
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
                        <textarea class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" name="comment" placeholder="Describe about your project" rows="3"></textarea>
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


<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center elements-social social-icon-style-06">
                <div class="fs-22 mb-30px text-dark-gray">Connect with <span class="fw-600">social media</span></div>
                <ul class="extra-large-icon fw-600 appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [10, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 300, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <li style=""><a class="facebook" href="https://www.facebook.com" target="_blank"><span class="brand-label text-dark-gray">Fb</span><span class="brand-icon fa-brands fa-facebook-f"></span></a></li>
                    <li style=""><a class="dribbble" href="http://www.dribbble.com" target="_blank"><span class="brand-label text-dark-gray">Db</span><span class="brand-icon fa-brands fa-dribbble"></span></a></li>
                    <li style=""><a class="twitter" href="http://www.twitter.com" target="_blank"><span class="brand-label text-dark-gray">Tw</span><span class="brand-icon fa-brands fa-twitter"></span></a></li>
                    <li style=""><a class="behance" href="http://www.behance.com" target="_blank"><span class="brand-label text-dark-gray">Be</span><span class="brand-icon fa-brands fa-behance"></span></a></li>
                    <li style=""><a class="pinterest" href="https://in.pinterest.com" target="_blank"><span class="brand-label text-dark-gray">Pt</span><span class="brand-icon fa-brands fa-pinterest-p"></span></a></li>
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