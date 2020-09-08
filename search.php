<?php
/**
 * The template for displaying search results pages
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * 
 * @package Todxs
*/
get_header(); ?>

  <div class="content-area">
    <main>
      <div class="container">
        <div class="row">
          
          <h1>Resultado da busca por: <?php echo get_search_query(); ?></h1>
          
          <?php

            get_search_form();

            if( have_posts() ):

              while( have_posts() ): the_post();
                get_template_part( 'template-parts/content', 'search' );
              endwhile;

              the_posts_pagination( array(
                'prev_text' => 'Anterior',
                'next_text' => 'Próximo'
              ));

            else: ?>

            <p>Nenhum resultado para sua pesquisa</p>

          <?php endif; ?>
        </div>
      </div>
    </main>
  </div>

<?php get_footer(); ?>