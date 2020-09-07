<?php
/*
Template Name: Home Page
*/
get_header(); ?>

  <div class="content-area">
    <main>
      <section class="slider">
        <div class="slick-carousel">
          <!-- to-do: create the carousel template -->
          <?php
          $carousel = new WP_Query(array(
            'post_type' => 'carousel',
            'posts_per_page' => '3'
          ));

          if( $carousel->have_posts() ):
            while( $carousel->have_posts() ):
              $carousel->the_post();?>

              <li style="height: 300px; background: tomato"></li>
          <?php
            endwhile;
            wp_reset_postdata();
            endif;
          ?>
          <li style="height: 300px; background: lightblue"></li>
          <li style="height: 300px; background: lightgreen"></li>
        </div>
      </section>
      <section class="popular-products">
        <div class="container">
          <div class="row">Popular Products</div>
        </div>
      </section>
      <section class="new-arrivals">
        <div class="container">
          <div class="row">New Arrivals</div>
        </div>
      </section>
      <section class="deal-of-the-week">
        <div class="container">
          <div class="row">Deal of the week</div>
        </div>
      </section>
      <section class="todxs-blog">
        <div class="container">
          <div class="row">
            <?php
              if( have_posts() ):
                while( have_posts() ): the_post();
                  ?>
                    <article>
                      <h2><?php the_title(); ?></h2>
                      <div><?php the_content(); ?></div>
                    </article>
                  <?php
                endwhile;
              else:
            ?>
              <p>Nothing to display.</p>
            <?php endif; ?>
          </div>
        </div>
      </section>
    </main>
  </div>

<?php get_footer(); ?>