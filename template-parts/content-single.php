<?php
/**
 * Template part for displaying posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Todxs
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 

  <header>

    <h1><?php the_title(); ?></h1>

    <div class="meta">

      <p>Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date( 'd F, Y' ); ?>.
      
        <br />

        Categorias: <span><?php the_category( ' ' ); ?>

        <br />

        <?php if(has_tag()): ?>
          Tags: <span><?php the_tags( '', ', '); ?></span>
        <?php endif; ?>

      </p>

    </div>

    <div class="post-thumbnail">
      <?php if( has_post_thumbnail() ):
        the_post_thumbnail( 'todxs-blog', array( 'class' => 'img-fluid') );
      endif; ?>
    </div>

  </header>

  <div class="content">

    <?php wp_link_pages(array(
      'before' => '<p class="inner-pagination">' . 'Pages',
      'after'  => '</p>'
    )); ?>
    <?php the_content(); ?>

  </div>

</article>