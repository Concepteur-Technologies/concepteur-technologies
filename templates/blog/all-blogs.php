<?php

/**
 * Template Name: All Blogs
 */
get_header();

?>
<section class="p-0 top-space-margin position-relative overflow-hidden">
      <div class="container-fluid p-0 h-100 position-relative">
            <div class="row g-0">
                  <div class="col-xl-4 col-lg-5 d-flex justify-content-center align-items-center ps-10 xxl-ps-6 xl-ps-4 md-ps-4 sm-ps-0 position-relative order-2 order-lg-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="vertical-title-center align-items-center justify-content-center flex-shrink-0 w-75px sm-w-50px">
                              <h1 class="title fs-15 alt-font text-dark-gray fw-700 text-uppercase ls-1px text-uppercase d-flex w-auto align-items-center m-0" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["about agency"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1>
                        </div>
                        <div class="border-start border-color-extra-medium-gray ps-40px sm-ps-20px position-relative z-index-9">
                              <h2 class="text-dark-gray fw-600 alt-font outside-box-right-10 xl-outside-box-right-15 lg-outside-box-right-20 md-me-0 sm-mb-0 ls-minus-3px">We are work on delivering unique visual solutions.</h2>
                        </div>
                  </div>
                  <div class="col-xl-8 col-lg-7 position-relative one-half-screen order-1 order-lg-2 md-mb-50px">
                        <div class="overflow-hidden position-relative">
                              <div class="w-100" data-anime='{ "effect": "slide", "direction": "lr", "color": "#f7f7f7", "duration": 1000, "delay": 0 }'>
                                    <img src="https://res.cloudinary.com/didxyeaj1/image/upload/v1732903139/us_khvnv7.jpg" alt="" class="w-100 liquid-parallax" data-parallax-liquid="true" data-parallax-position="top" data-parallax-scale="1.05">
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>




<!-- Blogs -->
<section class="pt-0 right-side-bar mt-7">
      <div class="container">
            <div class="row justify-content-center">
                  <div class="col-12 col-lg-8 blog-standard md-mb-50px sm-mb-40px">
                        <!-- start blog item -->
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get current page number
                        $newest_posts = new WP_Query([
                              'posts_per_page' => 1,
                              'post_status'    => 'publish',
                              'orderby'        => 'date',
                              'order'          => 'DESC',
                              'paged'          => $paged // Add pagination parameter
                        ]);

                        if ($newest_posts->have_posts()):
                              while ($newest_posts->have_posts()): $newest_posts->the_post(); ?>
                                    <div class="col-12 mb-40px">
                                          <div class="card border-0 no-border-radius box-shadow-extra-large">
                                                <div class="blog-image position-relative">
                                                      <a href="<?php the_permalink(); ?>">
                                                            <?php if (has_post_thumbnail()) {
                                                                  the_post_thumbnail('large');
                                                            } else { ?>
                                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-thumb.jpg" alt="Default Image" />
                                                            <?php } ?>
                                                      </a>

                                                      <?php if (has_tag('trending')): ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fire.png" alt="Trending" style="position: absolute; bottom: 0px; right: 15px; width: 70px; height: auto;" />
                                                      <?php endif; ?>

                                                      <div class="blog-categories">
                                                            <?php
                                                            $categories = get_the_category();
                                                            if (!empty($categories)) {
                                                                  echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-600">' . esc_html($categories[0]->name) . '</a>';
                                                            }
                                                            ?>
                                                      </div>
                                                </div>
                                                <div class="card-body p-9 bg-white">
                                                      <div class="entry-meta mb-20px fs-15">
                                                            <span><i class="feather icon-feather-calendar"></i><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></span>
                                                            <span><i class="feather icon-feather-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                                      </div>
                                                      <a href="<?php the_permalink(); ?>" class="text-dark-gray card-title mb-20px fw-600 fs-24 d-block"><?php the_title(); ?></a>
                                                      <p class="text-medium-gray mb-20px"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                                                      <a href="<?php the_permalink(); ?>" class="btn btn-link btn-large text-base-color fw-600">Continue reading<span class="bg-base-color"></span></a>
                                                </div>
                                          </div>
                                    </div>
                              <?php endwhile; ?>

                              <!-- Pagination -->
                              <div class="col-12 mt-8 d-flex justify-content-center">
                                    <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
                                          <?php
                                          echo paginate_links([
                                                'total'        => $newest_posts->max_num_pages,
                                                'current'      => max(1, $paged),
                                                'prev_text'    => '<i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i>',
                                                'next_text'    => '<i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i>',
                                                'type'         => 'list',
                                                'add_args'     => false,
                                                'add_fragment' => '',
                                                'before_page_number' => '',
                                                'after_page_number'  => ''
                                          ]);
                                          ?>
                                    </ul>
                              </div>

                        <?php wp_reset_postdata();
                        else: ?>
                              <p>No posts found.</p>
                        <?php endif; ?>
                        <!-- end blog item -->
                  </div>
                  <!-- start sidebar -->
                  <aside class="col-12 col-xl-4 col-lg-4 col-md-7 ps-55px xl-ps-50px lg-ps-15px sidebar">
                        <div class="mb-15 md-mb-50px xs-mb-35px">
                              <div class="fw-600 fs-19 lh-22 ls-minus-05px text-dark-gray border-bottom border-color-dark-gray border-2 d-block mb-30px pb-15px position-relative">Popular posts</div>
                              <ul class="popular-post-sidebar position-relative">
                                    <?php
                                    $popular_posts = new WP_Query([
                                          'tag' => 'popular_post',
                                          'posts_per_page' => 3,
                                          'post_status' => 'publish',
                                    ]);

                                    if ($popular_posts->have_posts()):
                                          while ($popular_posts->have_posts()): $popular_posts->the_post(); ?>
                                                <li class="d-flex align-items-center mb-20px">
                                                      <figure class="me-15px">
                                                            <a href="<?php the_permalink(); ?>">
                                                                  <?php if (has_post_thumbnail()): ?>
                                                                        <?php the_post_thumbnail('thumbnail'); ?>
                                                                  <?php else: ?>
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-thumb.jpg" alt="No Image" />
                                                                  <?php endif; ?>
                                                            </a>
                                                      </figure>
                                                      <div class="col media-body">
                                                            <a href="<?php the_permalink(); ?>" class="fw-600 fs-17 text-dark-gray d-inline-block mb-10px"><?php the_title(); ?></a>
                                                            <div><a href="<?php the_permalink(); ?>" class="d-inline-block fs-15"><?php echo get_the_date(); ?></a></div>
                                                      </div>
                                                </li>
                                          <?php endwhile;
                                          wp_reset_postdata();
                                    else: ?>
                                          <li>No popular posts found.</li>
                                    <?php endif; ?>
                              </ul>

                        </div>
                        <div class="mb-15 md-mb-50px xs-mb-35px">
                              <div class="fw-600 fs-19 lh-22 ls-minus-05px text-dark-gray border-bottom border-color-dark-gray border-2 d-block mb-30px pb-15px position-relative">Explore category</div>
                              <ul class="category-list-sidebar position-relative">
                                    <?php
                                    $categories = get_categories(['hide_empty' => false]);

                                    foreach ($categories as $category) {
                                          $image_id = get_term_meta($category->term_id, 'category_image', true);
                                          $image_url = wp_get_attachment_url($image_id);
                                          $category_link = get_category_link($category->term_id);
                                    ?>
                                          <li class="d-flex align-items-center h-80px cover-background ps-35px pe-35px" style="background-image: url('<?php echo esc_url($image_url); ?>')">
                                                <div class="opacity-medium bg-gradient-dark-transparent"></div>
                                                <a href="<?php echo esc_url($category_link); ?>" class="d-flex align-items-center position-relative w-100 h-100">
                                                      <span class="text-white mb-0 fs-20 fw-500 fancy-text-style-4"><?php echo esc_html($category->name); ?></span>
                                                      <span class="btn text-white position-absolute"><i class="bi bi-arrow-right ms-0 fs-24"></i></span>
                                                </a>
                                          </li>
                                    <?php } ?>
                              </ul>
                        </div>
                        <div class="mb-15 md-mb-50px xs-mb-35px elements-social social-icon-style-10">
                              <div class="fw-600 fs-19 lh-22 ls-minus-05px text-dark-gray border-bottom border-color-dark-gray border-2 d-block mb-30px pb-15px position-relative">Stay connected</div>
                              <div class="row row-cols-2 row-cols-lg-2 justify-content-center align-items-center g-0">
                                    <div class="col border-bottom border-end border-color-extra-medium-gray ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-10px lg-pe-10px pt-10px pb-10px">
                                          <a class="facebook text-dark-gray" href="https://www.facebook.com/" target="_blank">
                                                <i class="fa-brands fa-facebook-f fs-18 me-10px"></i>
                                                <span class="fw-500">Facebook</span>
                                          </a>
                                    </div>
                                    <div class="col border-bottom border-color-extra-medium-gray ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-10px lg-pe-10px pt-10px pb-10px">
                                          <a class="dribbble text-dark-gray" href="http://www.dribbble.com" target="_blank">
                                                <i class="fa-brands fa-dribbble fs-18 me-10px"></i>
                                                <span class="fw-500">Dribbble</span>
                                          </a>
                                    </div>
                                    <div class="col border-bottom border-end border-color-extra-medium-gray ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-10px lg-pe-10px pt-10px pb-10px">
                                          <a class="twitter text-dark-gray" href="http://www.twitter.com" target="_blank">
                                                <i class="fa-brands fa-twitter fs-18 me-10px"></i>
                                                <span class="fw-500">Twitter</span>
                                          </a>
                                    </div>
                                    <div class="col border-bottom border-color-extra-medium-gray ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-10px lg-pe-10px pt-10px pb-10px">
                                          <a class="youtube text-dark-gray" href="http://www.youtube.com" target="_blank">
                                                <i class="fa-brands fa-youtube fs-18 me-10px"></i>
                                                <span class="fw-500">Youtube</span>
                                          </a>
                                    </div>
                                    <div class="col border-bottom border-end border-color-extra-medium-gray ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-10px lg-pe-10px pt-10px pb-10px">
                                          <a class="instagram text-dark-gray" href="http://www.instagram.com" target="_blank">
                                                <i class="fa-brands fa-instagram fs-18 me-10px"></i>
                                                <span class="fw-500">Instagram</span>
                                          </a>
                                    </div>
                                    <div class="col border-bottom border-color-extra-medium-gray ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-10px lg-pe-10px pt-10px pb-10px">
                                          <a class="vimeo text-dark-gray" href="https://vimeo.com/" target="_blank">
                                                <i class="fa-brands fa-vimeo-v fs-18 me-10px"></i>
                                                <span class="fw-500">Vimeo</span>
                                          </a>
                                    </div>
                                    <div class="col border-end border-color-extra-medium-gray ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-10px lg-pe-10px pt-10px pb-10px">
                                          <a class="linkedin text-dark-gray" href="https://www.linkedin.com/" target="_blank">
                                                <i class="fa-brands fa-linkedin-in fs-18 me-10px"></i>
                                                <span class="fw-500">Linkedin</span>
                                          </a>
                                    </div>
                                    <div class="col ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-10px lg-pe-10px pt-10px pb-10px">
                                          <a class="behance text-dark-gray" href="http://www.behance.com/" target="_blank">
                                                <i class="fa-brands fa-behance fs-18 me-10px"></i>
                                                <span class="fw-500 fs-16">Behance</span>
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </aside>
                  <!-- end sidebar -->
            </div>
      </div>
</section>

<?php include_once(get_template_directory() . '/global/contact-us-section.php'); ?>

<?php get_footer() ?>