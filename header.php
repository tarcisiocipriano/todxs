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

    <header class="header fixed-top">
      
      <!-- small header -->
      <div class="header__small" >
        <div class="container">
          <div class="row">

            <div class="col-6 header__small__contact">
              <ul>
                <li>
                  <span class="icon icon--social-whatsapp"></span>
                  <span>(81) 98222-0235</span>
                </li>
              </ul>
            </div>

            <!-- navigation -->
            <?php if( class_exists( 'WooCommerce' ) ): ?>
              <div class="col-6 header__small__navigation">
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
      </div> <!-- /small header -->

      <div class="header__main py-4">
        <div class="container">
          
          <!-- main header -->
          <div class="d-flex align-items-center">
  
            <!-- <div class="button__burger">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
            </div> -->
  
            <h1>
              <a href="<?php echo home_url( '/' ); ?>">
                <img class="d-block header__logo" src="<?php echo get_theme_file_uri( "/assets/icons/todxs-logo-white.svg" ); ?>" alt="" width="150" height="50">
              </a>
            </h1>
  
            <div class="w-100 mx-5"><?php echo do_shortcode('[wcas-search-form]'); ?></div>
  
            <?php if( class_exists( 'WooCommerce' ) ): ?>
              <button class="cart__btn">
                <span class="cart__btn__icon icon icon--misc-cart"></span>
                <span class="cart__btn__quantity"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
              </button>
            <?php endif; ?>
  
          </div>
  
        </div> <!-- /container -->
      </div> <!-- /main header -->

      <!-- category menu -->
      <div class="category__menu">
        <nav class="container">
          <ul>
            <li>
              <a href="<?php echo site_url( '/categoria-produto/preservativos' ); ?>">
                <span class="icon icon--cat-preservativos"></span>
                Preservativos
              </a>
            </li>
            <li>
              <a href="<?php echo site_url( '/categoria-produto/cosmeticos' ); ?>">
                <span class="icon icon--cat-cosmeticos"></span>
                Cosméticos
              </a>
            </li>
            <li>
              <a href="<?php echo site_url( '/categoria-produto/lubrificantes' ); ?>">
                <span class="icon icon--cat-lubrificantes"></span>
                Lubrificantes
              </a>
            </li>
            <li>
              <a href="<?php echo site_url( '/categoria-produto/higiene' ); ?>">
                <span class="icon icon--cat-higiene"></span>
                Higiene
              </a>
            </li>
            <li>
              <a href="<?php echo site_url( '/categoria-produto/vibradores' ); ?>">
                <span class="icon icon--cat-vibradores"></span>
                Vibradores
              </a>
            </li>
            <li>
              <a href="<?php echo site_url( '/categoria-produto/proteses-e-cintas' ); ?>">
                <span class="icon icon--cat-proteses"></span>
                Cintas
              </a>
            </li>
            <li>
              <a href="<?php echo site_url( '/categoria-produto/plug-anal' ); ?>">
                <span class="icon icon--cat-plug-anal"></span>
                Plug Anal
              </a>
            </li>
            <li>
              <a href="<?php echo site_url( '/categoria-produto/brincadeiras' ); ?>">
                <span class="icon icon--cat-brincadeiras"></span>
                Brincadeiras
              </a>
            </li>
            <li>
              <a href="<?php echo site_url( '/categoria-produto/acessorios' ); ?>">
                <span class="icon icon--cat-acessorios"></span>
                Acessórios
              </a>
            </li>
            <li>
              <a href="<?php echo site_url( '/categoria-produto/linha-sado' ); ?>">
                <span class="icon icon--cat-linha-sado"></span>
                Linha Sado
              </a>
            </li>
          </ul>
        </nav>
      </div> <!-- /category menu -->

    </header>

    