<?php
/**
 * The main template file
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matchs a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 * 
 * @package Todxs
*/
get_header(); ?>

  <div class="content-area">
    <main>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 col-lg-9">
            <?php
            
              if( have_posts() ):
  
                while( have_posts() ): the_post();
                  get_template_part( 'template-parts/content' );
                endwhile;
  
                the_posts_pagination( array(
                  'prev_text' => 'Anterior',
                  'next_text' => 'Próximo'
                ));
                
              else: ?>
  
              <p>Nenhuma postagem.</p>
  
            <?php endif; ?>

          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </main>
  </div>

<?php get_footer(); ?>