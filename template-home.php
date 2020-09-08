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
          <h2>Os mais populares</h2>
          <!-- to-do: carousel -->
          <?php echo do_shortcode( '[products limit="4" columns="4" orderby="popularity"]' ); ?>
        </div>
      </section>
      <section class="new-arrivals">
        <div class="container">
          <h2>Os mais vendidos</h2>
          <!-- to-do: carousel -->
          <?php echo do_shortcode( '[products limit="4" columns="4" orderby="date"]' ); ?>
        </div>
      </section>
      <!-- to-do: implement deal of the week -->
      <!-- <section class="deal-of-the-week">
        <div class="container">
          <h2>Destaque da semana</h2>
          <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6 ml-auto text-center deal-img">

            </div>
            <div class="col-12 col-md-4 mr-auto text-center deal-desc">

            </div>
          </div>
        </div>
      </section> -->
      <section class="todxs-blog">
        <div class="container">
          <h2>Notícias</h2>
          <div class="row">
            <?php
              $blog_posts = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 2
              ));
              
              if( $blog_posts->have_posts() ):
                while( $blog_posts->have_posts() ): $blog_posts->the_post(); ?>

                <article class="col-12 col-md-6">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                      if( has_post_thumbnail() ):
                        the_post_thumbnail( 'todxs-blog', array( 'class' => 'img-fluid' ) );
                      endif;
                    ?>
                  </a>
                  <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <div class="excerpt"><?php the_excerpt(); ?></div>
                </article>
              <?php endwhile; wp_reset_postdata(); else: ?>
              <p>Nothing to display.</p>
            <?php endif; ?>
          </div>
        </div>
      </section>
    </main>
  </div>

<?php get_footer(); ?>