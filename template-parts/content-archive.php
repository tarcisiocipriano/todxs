<?php
/**
 * Template part for displaying posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Todxs
 */
?>
<article <?php post_class(); ?>>

  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <a href="<?php the_permalink(); ?>">

    <div class="post-thumbnail">
      <?php if( has_post_thumbnail() ):
        the_post_thumbnail( 'todxs-blog', array( 'class' => 'img-fluid' ) );
      endif; ?>
    </div>

  </a>

  <div class="meta">

    <p>Postado por <?php the_author_posts_link(); ?> em <?php echo get_the_date( 'd F, Y' ); ?>.</p>

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