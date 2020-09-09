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
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div id="page" class="site">
    <header>

      <section class="navbar-small py-2" >
        <div class="container">
          <div class="row">
            <div class="col-6">
              <span>(81) 8222-0235</span>
            </div>
            <?php if( class_exists( 'WooCommerce' ) ): ?>
            <div class="col-6">

              <div class="navbar-small__menu">
                <?php endif; wp_nav_menu( array(
                  'theme_location' => 'todxs_nav_menu',
                  'container'      => false ));
                ?>
                <ul>
                  <?php if( is_user_logged_in() ): ?>
                  <li>
                    <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>" class="nav-link">Minha Conta</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ); ?>" class="nav-link">Sair</a>
                  </li>
                  <?php else: ?>
                  <li>
                    <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>" class="nav-link">Entrar / Criar conta</a>
                  </li>
                  <?php endif; ?>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="top-bar">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">

            <div id="top-bar__actions--left" class="mr-2 top-bar__actions">
              <div class="button__burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
              </div>

            </div>

            <h1>
              <a href="<?php echo home_url( '/' ); ?>">
                <img class="d-block top-bar__logo" src="<?php echo get_theme_file_uri( "/assets/icons/todxs-logo-white.svg" ); ?>" alt="" width="150" height="50">
              </a>
            </h1>

            <div class="my-3 ml-3 mr-3 mx-lg-5 w-100 search-form__container"><?php get_search_form(); ?></div>

            <div id="top-bar__actions--right" class="d-flex align-items-center top-bar__actions" >
              <?php if( class_exists( 'WooCommerce' ) ): ?>
                <div class="cart">
                  <a href="<?php echo wc_get_cart_url(); ?>"><span class="cart__icon"></span></a>
                  <span class="cart__quantity"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                </div>
              <?php endif; ?>
            </div>

          </div>

          
        </div> <!-- /container -->
        <div class="category__menu">
          <nav class="container">
            <ul>
              <li>
                <a href="<?php echo site_url( '/categoria-produto/preservativos' ); ?>">Preservativos</a>
              </li>
              <li>
                <a href="<?php echo site_url( '/categoria-produto/cosmeticos' ); ?>">Cosméticos</a>
              </li>
              <li>
                <a href="<?php echo site_url( '/categoria-produto/lubrificantes' ); ?>">Lubrificantes</a>
              </li>
              <li>
                <a href="<?php echo site_url( '/categoria-produto/higiene' ); ?>">Higiene</a>
              </li>
              <li>
                <a href="<?php echo site_url( '/categoria-produto/vibradores' ); ?>">Vibradores</a>
              </li>
              <li>
                <a href="<?php echo site_url( '/categoria-produto/proteses-e-cintas' ); ?>">Próteses e Cintas</a>
              </li>
              <li>
                <a href="<?php echo site_url( '/categoria-produto/plug-anal' ); ?>">Plug Anal</a>
              </li>
              <li>
                <a href="<?php echo site_url( '/categoria-produto/brincadeiras' ); ?>">Brincadeiras</a>
              </li>
              <li>
                <a href="<?php echo site_url( '/categoria-produto/acessorios' ); ?>">Acessórios</a>
              </li>
              <li>
                <a href="<?php echo site_url( '/categoria-produto/linha-sado' ); ?>">Linha Sado</a>
              </li>
            </ul>
          </nav>
        </div>
      </section>
    </header>

    