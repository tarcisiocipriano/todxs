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
      <section class="slider">Slider</section>
      <section class="popular-products">Popular Products</section>
      <section class="new-arrivals">New Arrivals</section>
      <section class="deal-of-the-week">Deal of the week</section>
      <section class="todxs-blog">News</section>
    </main>
  </div>

<?php get_footer(); ?>