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
          <?php
            if( have_posts() ):
              while( have_posts() ): the_post(); ?>
                <article <?php post_class(); ?>>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <a href="<?php the_permalink(); ?>"">
                    <div class="post-thumbnail">
                      <?php if( has_post_thumbnail() ):
                        the_post_thumbnail( 'todxs-blog', array( 'class' => 'img-fluid' ) );
                      endif; ?>
                    </div>
                  </a>
                  <div class="meta">
                    <p>Postado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?></p>
                    <br />
                    <?php if( has_category() ): ?>
                      Categorias: <span><?php the_category( ' ' ) ?></span>
                    <?php endif; ?>
                    <br />
                    <?php if( has_tag() ): ?>
                      Tags: <span><?php the_tags( '', ', ' ) ?></span>
                    <?php endif; ?>
                  </div>
                  <div><?php the_excerpt(); ?></div>
                </article>
            <?php
              endwhile;
              the_posts_pagination( array(
                'prev_text' => 'Anterior',
                'next_text' => 'Próximo'
              ));
              else:
            ?>
            <p>Nenhuma postagem.</p>
          <?php endif; ?>
        </div>
      </div>
    </main>
  </div>

<?php get_footer(); ?>