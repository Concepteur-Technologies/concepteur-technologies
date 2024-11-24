<?php
get_header();
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="case-study">
            <h1><?php the_title(); ?></h1>
            <div class="case-study-content">
                <?php the_content(); ?>
            </div>
            <div class="case-study-image">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail();
                } ?>
            </div>
        </div>
<?php
    endwhile;
endif;
get_footer('footer.php');
?>