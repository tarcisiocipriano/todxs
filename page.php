<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php
          while (have_posts()) {
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
          <?php } ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>