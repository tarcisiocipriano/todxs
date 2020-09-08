<?php
/**
 * The template for displaying archive pages
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
          <?php

            the_archive_title( '<h1 class="article-title">', '</h1>' );

            if( have_posts() ):

              while( have_posts() ): the_post();
                get_template_part( 'template-parts/content', 'archive' );
              endwhile;
              
              the_posts_pagination( array(
                'prev_text' => 'Anterior',
                'next_text' => 'Próximo'
              ));

            else: ?>
            
            <p>Nenhuma postagem.</p>

          <?php endif; ?>
        </div>
      </div>
    </main>
  </div>

<?php get_footer(); ?>