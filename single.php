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
          <div class="col-12 col-md-8 col-lg-9">
            <?php

              while( have_posts() ): the_post();

                get_template_part( 'template-parts/content', 'single' );

                if( comments_open() || get_comments_number() ):
                  comments_template();
                endif;

              endwhile;
              
            ?>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>