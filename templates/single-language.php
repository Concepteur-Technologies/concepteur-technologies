<?php
/* 
Template Name: Language Posts 
Template Post Type: language
*/
get_header();
?>
<div class="content">
      <h1>All Language Posts</h1>
      <?php
      $query = new WP_Query([
            'post_type' => 'language',  // Use the registered post type slug
            'posts_per_page' => -1,     // Display all posts
            'post_status' => 'publish', // Only show published posts
      ]);

      if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
      ?>
                  <div class="post">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                  </div>
      <?php
            endwhile;
            wp_reset_postdata();
      else :
            echo '<p>No posts found.</p>';
      endif;
      ?>
</div>
<?php
get_footer();
