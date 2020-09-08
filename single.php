<?php
/**
 * The template for displaying all single posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package Todxs
*/
get_header(); ?>

  <div id="primary" class="content-area">
    <div id="main">
      <div class="container">
        <div class="row">
          <?php while( have_posts() ): the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
              <header>
                <h1><?php the_title(); ?></h1>
                <div class="meta">
                  <p>Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?><br />
                  Categorias: <span><?php the_category( ' ' ); ?><br/>
                  <?php if(has_tag()): ?>
                    Tags: <span><?php the_tags( '', ', '); ?></span>
                  <?php endif; ?>
                  </p>                            
                </div>        
                <div class="post-thumbnail">
                  <?php if( has_post_thumbnail() ): 
                    the_post_thumbnail( 'fancy-lab-blog', array( 'class' => 'img-fluid') );
                  endif; ?>
                </div>
              </header>    
              <div class="content">
                <?php the_content(); ?>
              </div>
            </article>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>