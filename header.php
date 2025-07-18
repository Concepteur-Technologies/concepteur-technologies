<!doctype html>
<html class="no-js" lang="en">

<head>
      <title>Concepteur Technologies | Empowering Your Digital Journey</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="author" content="Proparna">
      <meta name="viewport" content="width=device-width,initial-scale=1.0" />
      <link rel="apple-touch-icon" href="https://res.cloudinary.com/didxyeaj1/image/upload/v1732902963/natycu58tp3knx6cplro.png">
      <link rel="apple-touch-icon" sizes="72x72" href="https://res.cloudinary.com/didxyeaj1/image/upload/v1732902963/natycu58tp3knx6cplro.png">
      <link rel="apple-touch-icon" sizes="114x114" href="https://res.cloudinary.com/didxyeaj1/image/upload/v1732902963/natycu58tp3knx6cplro.png">
      <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <link rel="icon" href="https://res.cloudinary.com/didxyeaj1/image/upload/v1735134659/C_TEC_2_mrxjep.png" type="image/x-icon" />
      <link rel="shortcut icon" href="https://res.cloudinary.com/didxyeaj1/image/upload/v1735134659/C_TEC_2_mrxjep.png" type="image/x-icon">
      <?php wp_head(); ?>
      <?php
      $current_page = trim($_SERVER['REQUEST_URI'], '/');
      $extra_class = ($current_page === 'why-choose-us') ? 'new-class' : '';
      $extra_class_2 = ($current_page === 'why-choose-us') ? 'new-class-new' : '';
      ?>
</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#252840" class="custom-cursor">

      <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light header-reverse header-demo" data-header-hover="light">
                  <div class="container-fluid">
                        <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                              <a class="navbar-brand" href="<?php echo home_url() . '/home-page' ?>">
                                    <img src="https://res.cloudinary.com/didxyeaj1/image/upload/v1735134518/asterisk_media_inc._1_emvx0w.png" data-at2x="https://res.cloudinary.com/didxyeaj1/image/upload/v1732902963/natycu58tp3knx6cplro.png" alt="" class="default-logo">
                                    <img src="https://res.cloudinary.com/didxyeaj1/image/upload/v1735134518/asterisk_media_inc._1_emvx0w.png" data-at2x="https://res.cloudinary.com/didxyeaj1/image/upload/v1732902963/natycu58tp3knx6cplro.png" alt="" class="alt-logo">
                                    <img src="https://res.cloudinary.com/didxyeaj1/image/upload/v1735134518/asterisk_media_inc._1_emvx0w.png" data-at2x="https://res.cloudinary.com/didxyeaj1/image/upload/v1732902963/natycu58tp3knx6cplro.png" alt="" class="mobile-logo">
                              </a>
                        </div>
                        <div class="col-auto col-lg-8 menu-order position-static">
                              <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-line"></span>
                                    <span class="navbar-toggler-line"></span>
                                    <span class="navbar-toggler-line"></span>
                                    <span class="navbar-toggler-line"></span>
                              </button>
                              <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

                                    <ul class="navbar-nav alt-font">
                                          <li class="nav-item dropdown submenu">
                                                <a href="javascript:void(0);" class="nav-link">Who we are</a>
                                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <div class="dropdown-menu submenu-content background-position-center cover-background" aria-labelledby="navbarDropdownMenuLink1" style="background-image: url(image path)">
                                                      <div class="d-lg-flex mega-menu m-auto">
                                                            <ul class="col">
                                                                  <a href="<?php echo home_url() . '/about-us' ?>"></i>About Us<i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                            </ul>
                                                            <ul class="col">
                                                                  <a href="<?php echo home_url() . '/why-choose-us' ?>">Why Choose Us <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                            </ul>
                                                            <ul class="col">
                                                                  <a href="<?php echo home_url() . '/coming-soon' ?>">Events & Activities<i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                            </ul>
                                                            <ul class="col">
                                                                  <a href="<?php echo home_url() . '/coming-soon' ?>">Success Stories<i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                            </ul>

                                          <li class="nav-item dropdown simple-dropdown">
                                                <a href="javascript:void(0);" class="nav-link <?php echo esc_attr($extra_class); ?>">Services</a>
                                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink5" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu" style="width: 274px;" aria-labelledby="navbarDropdownMenuLink5">
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/web-app-development' ?>">Web Development<i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/mobile-app-development' ?>">App Development<i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/coming-soon' ?>">Enterprises we worked with</a>
                                                      </li>
                                                </ul>
                                          </li>

                                          <li class="nav-item dropdown simple-dropdown">
                                                <a href="javascript:void(0);" class="nav-link <?php echo esc_attr($extra_class); ?>">Technologies</a>
                                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink5" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu col" aria-labelledby="navbarDropdownMenuLink5">
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/react' ?>">React <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/react-native' ?>">React Native <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/wordpress' ?>">Wordpress <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/php' ?>">PHP <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/woocommerce' ?>">Woocommerce <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/laravel' ?>">Laravel <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/symfony' ?>">Symfony <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/angular' ?>">Angular <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/next-js' ?>">Next Js <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/yii' ?>">Yii <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/node-js' ?>">Node Js <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/postgre-sql' ?>">PostgreSQL <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/mongo-db' ?>">MongoDB <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/google-cloud' ?>">Google Cloud <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/express-js' ?>">Express Js <i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/drupal' ?>">Drupal<i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/codeigniter' ?>">Codeigniter<i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/vue' ?>">Vue<i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/vue' ?>">Vue<i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/aws' ?>">AWS<i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                      <li class="dropdown">
                                                            <a href="<?php echo home_url() . '/flutter' ?>">Flutter<i class="bi bi-arrow-up-right-square-fill"></i></a>
                                                      </li>
                                                </ul>
                                          </li>

                                          <li class="nav-item dropdown simple-dropdown">
                                                <a href="<?php echo home_url() . '/coming-soon' ?>" class="nav-link <?php echo esc_attr($extra_class); ?>">Case Study</a>
                                          </li>
                                          <li class="nav-item dropdown simple-dropdown">
                                                <a href="<?php echo home_url() . '/coming-soon' ?>" class="nav-link <?php echo esc_attr($extra_class); ?>">Work with us</a>
                                          </li>
                                          <div class="header-button"><a href="<?php echo home_url() . '/contact-us' ?>" class="btn btn-large d-table d-lg-inline-block xl-mb-15px md-mx-auto btn-rounded text-concep-back" style="margin-bottom: 0px !important">Contact us<i class="fa-solid fa-arrow-right"></i></a></div>
                                    </ul>
                              </div>
                        </div>
                        </li>
                        </ul>
                  </div>
                  </div>

                  </div>
            </nav>
            <!-- end navigation -->
      </header>