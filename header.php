<?php
/**
 * The header for our theme
 * 
 * This is the template that displays all of the <head> section
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Todxs
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div id="page" class="site">

    <header class="header header-desktop">
      
      <!-- nav header -->
      <?php if ( !(is_cart() || is_checkout() )): ?>
      <div class="header__nav" >
        <div class="container">
          <div class="row">

            <div class="col-6 header__nav__contact">
              <ul>
                <li>
                  <span class="icon icon--social-whatsapp"></span>
                  <span>(81) 98222-0235</span>
                </li>
              </ul>
            </div>

            <!-- navigation -->
            <?php if( class_exists( 'WooCommerce' ) ): ?>
              <div class="col-6 header__nav__navigation">
                <?php wp_nav_menu( array(
                  'theme_location' => 'todxs_nav_menu',
                  'container'      => false ));
                ?>

                <ul>
                  <?php if( is_user_logged_in() ): ?>
                  <li>
                    <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>">
                      Minha Conta
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ); ?>">
                      Sair
                    </a>
                  </li>
                  <?php else: ?>
                  <li>
                    <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>">
                      Entrar / Criar conta
                    </a>
                  </li>
                  <?php endif; ?>
                </ul>

              </div> <!-- /col-2 -->
            <?php endif; ?> <!-- /navigation -->

          </div> <!-- /row --> 
        </div> <!-- /container -->
      </div> <!-- /nav header -->
      <?php endif; ?>

      <div class="header__main py-4">
        <div class="container">
          
          <!-- main header -->
          <div class="d-flex align-items-center">
  
            <h1 class="header__logo">
              <a href="<?php echo home_url( '/' ); ?>">
                <img class="d-block header__main__logo h-100" src="<?php echo get_theme_file_uri( "/assets/icons/todxs-logo-white.svg" ); ?>" alt="" width="150" height="50">
              </a>
            </h1>
  
            <div class="w-100 mx-5"><?php echo do_shortcode('[wcas-search-form]'); ?></div>
  
            <?php if( class_exists( 'WooCommerce' ) ): ?>
              <a class="cart__btn" href="<?php echo wc_get_cart_url(); ?>">
                <span class="cart__btn__icon icon icon--misc-cart"></span>
                <span class="cart__btn__quantity"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
              </a>
            <?php endif; ?>
  
          </div>
  
        </div> <!-- /container -->
      </div> <!-- /main header -->

      <!-- category menu -->
      <?php if ( !(is_cart() || is_checkout() )): ?>
      <div class="category-menu">
        <nav class="container">
          <?php get_template_part( 'template-parts/category-menu' ); ?>
        </nav>
      </div> <!-- /category menu -->
      <?php endif; ?>

    </header>
    
    <!--  -->

    <header class="header header-mobile">
      
      <div class="header__main py-2">
        <div class="container pt-1">

          <div class="row">
            <div class="col-12">
              <!-- main header -->
              <div class="d-flex align-items-center justify-content-between">
      
                <div class="button-burger">
                  <div class="line1"></div>
                  <div class="line2"></div>
                  <div class="line3"></div>
                </div>
      
                <h1 class="header__logo">
                  <a href="<?php echo home_url( '/' ); ?>">
                    <img class="d-block header__main__logo h-100" src="<?php echo get_theme_file_uri( "/assets/icons/todxs-logo-white.svg" ); ?>" alt="" width="150" height="50">
                  </a>
                </h1>
      
                <?php if( class_exists( 'WooCommerce' ) ): ?>
                  <a class="cart__btn" href="<?php echo wc_get_cart_url(); ?>">
                    <span class="cart__btn__icon icon icon--misc-cart"></span>
                    <span class="cart__btn__quantity"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                  </a>
                <?php endif; ?>
      
              </div>
            </div> <!-- /col-12 -->
          </div> <!-- /row -->
          
          <div class="row mt-2">
            <div class="col-12">
              <div class="w-100"><?php echo do_shortcode('[wcas-search-form]'); ?></div>
            </div>
          </div> <!-- /row -->
  
        </div> <!-- /container -->
      </div> <!-- /main header -->

    </header>

    <!-- category menu -->
    <div class="category-menu category-menu--mobile">
      <nav>
        <?php get_template_part( 'template-parts/category-menu' ); ?>
      </nav>
    </div> <!-- /category menu -->
    <div class="category-menu__backdrop"></div>
