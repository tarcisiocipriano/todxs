<?php
/**
 * The template for displaying the footer
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Todxs
*/
?>
    <footer class="footer pt-4">
      <section class="footer-widgets">
        <div class="container">
          <div class="row">
            <?php if( is_active_sidebar( 'todxs-sidebar-footer-1' ) ): ?>
              <div class="col-12 col-md-4">
                <?php dynamic_sidebar( 'todxs-sidebar-footer-1' ); ?>
              </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'todxs-sidebar-footer-2' ) ): ?>
              <div class="col-12 col-md-4">
                <?php dynamic_sidebar( 'todxs-sidebar-footer-2' ); ?>
              </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'todxs-sidebar-footer-3' ) ): ?>
              <div class="col-12 col-md-4">
                <?php dynamic_sidebar( 'todxs-sidebar-footer-3' ); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </section>
      <section class="copyright">
        <div class="container">
          <div class="copyright-text text-center">
            <p>Ⓒ 2020 - Sex Shop Todxs - Todos os direitos reservados | Desenvolvido por <a href="https://tarcisiocipriano.com/"><strong>Tarcísio Cipriano</strong></a></p>
            <!-- to-do: remove the get_theme_mode later -->
            <!-- <p><?php echo get_theme_mod( 'set_copyright', 'Copyright X - All rights reserved' ); ?></p> -->
          </div>
        </div>
      </section>
    </footer>
  </div>
<?php wp_footer(); ?>
</body>
</html>