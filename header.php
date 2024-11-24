<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Concepteur Technologies| Empowering Your Digital Journey</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Proparna">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#252840" class="custom-cursor">
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse glass-effect" data-header-hover="light">
            <div class="container-fluid">
                <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="<?php echo home_url() . '/home-page' ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.jpg'; ?>" data-at2x="<?php echo get_template_directory_uri() . '/assets/images/logo.jpg'; ?>" alt="" class="default-logo">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.jpg'; ?>" data-at2x="<?php echo get_template_directory_uri() . '/assets/images/logo.jpg'; ?>" alt="" class="alt-logo">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.jpg'; ?>" data-at2x="<?php echo get_template_directory_uri() . '/assets/images/logo.jpg'; ?>" alt="" class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto col-xxl-6 col-lg-8 menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="<?php echo home_url() . '/home-page' ?>" class="nav-link">Home</a></li>
                            <li class="nav-item dropdown dropdown-with-icon-style02">
                                <a href="#" class="nav-link"> Services</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a href="<?php echo home_url() . '/services' ?>"><i class="bi bi-briefcase"></i>WEB Development</a></li>
                                    <li><a href="<?php echo home_url() . '/mobile-app-development' ?>"><i class="bi bi-phone"></i>Mobile App Development</a></li>
                                    <li><a href="<?php echo home_url() . '/e-commerce-development' ?>"><i class="bi bi-briefcase"></i>E-Commerce Development</a></li>
                                    <li><a href="<?php echo home_url() . '/services/software-development/' ?>"><i class="bi bi-globe2"></i>Technology innovation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="<?php echo home_url() . '/industries' ?>" class="nav-link">Who we are</a></li>

                            <!-- Technologies -->
                            <li class="nav-item"><a href="<?php echo home_url() . '/technologies' ?>" class="nav-link">Technologies</a></li>

                            <!-- Portfolio -->
                            <li class="nav-item"><a href="<?php echo home_url() . '/portfolio' ?>" class="nav-link">Our Projects</a></li>

                            <!-- Blog -->
                            <li class="nav-item"><a href="<?php echo home_url() . '/blog' ?>" class="nav-link">Blogs</a></li>

                            <!-- Contact -->
                            <li class="nav-item"><a href="<?php echo home_url() . '/contact-us' ?>" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-xxl-3 col-lg-2 text-end d-none d-sm-flex">
                    <div class="header-icon">
                        <div class="header-button"><a href="http://company.local/contact-us/" class="btn btn-large btn-gradient-fast-pink-light-yellow d-table d-lg-inline-block xl-mb-15px md-mx-auto btn-rounded">Book a Meeting<i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->