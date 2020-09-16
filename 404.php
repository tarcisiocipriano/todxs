<?php
/**
 * The template for displaying 404 pages (not found)
 * 
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */
get_header(); ?>
<div class="content-area">
  <main>
    <div class="container">
      <div class="error-404">
        <div class="text-center">
          <h1>Página não encontrada</h1>
          <a href="<?php echo home_url( '/' ); ?>" style="width: 400px; margin: -50px 0;" id="pride"></a>
          <p>A página que você tentou acessar, não existe...</p>
          <div id="lottie-not-found"></div>
        </div>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>