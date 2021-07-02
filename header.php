<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body  <?php body_class('medium-content-area sidebar-right medium-body-text large-headings large-icons'); ?> >
<?php wp_body_open(); ?>

<div id="page" class="site">

    <a class="skip-link screen-reader-text" href="#content">
        <span>Skip to content</span>
        <span data-icon="ei-arrow-right"></span>
    </a>

    <header id="masthead" class="site-header" role="banner">

        <div class="header-info">
            <h1 class="header-title">
                <?php
                if(is_category()){
                    single_cat_title();
                }elseif(is_date()){
                   ?>Articles publiés le <?php echo get_the_date('j F Y');
                }elseif(is_home()){
                    echo get_bloginfo( 'name' );
                }
                else{
                    single_post_title();
                }
                ?></h1>
            <p class="header-meta"><?php echo get_bloginfo( 'description' ); ?></p>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">

            <a href="<?php echo get_home_url(); ?>" class="custom-logo-link">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" />
            </a>

            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span data-icon="ei-navicon"></span>
                <span>Menu</span>
            </button>

            <div class="menu-wrapper">

                <header class="menu-header">
                    <h2 class="menu-title">Menu</h2>
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span data-icon="ei-close"></span>
                        <span class="screen-reader-text">Close Menu</span>
                    </button>
                </header>

                <!--<ul class="primary-menu">
                    <li><a href="">Menu Item 1</a>
                        <ul class="sub-menu">
                            <li><a href="#">Sub menu item 1</a></li>
                            <li><a href="#">Sub menu item 2</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Sub sub menu item 1</a></li>
                                    <li><a href="#">Sub sub menu item 2</a></li>
                                    <li><a href="#">Sub sub menu item 3</a></li>
                                    <li><a href="#">Sub sub menu item 4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sub menu item 3</a></li>
                            <li><a href="#">Sub menu item 4</a></li>
                        </ul>
                    </li>
                    <li><a href="">Menu Item 2</a></li>
                    <li><a href="">Menu Item 3</a></li>
                    <li><a href="">Menu Item 4</a></li>
                </ul>
                -->
                <?php wp_nav_menu([
                                      'theme_location' => 'main',
                                      'container' => '',
                                      'container_class' => '',
                                      'menu_id' => 'menu',
                                      'menu_class' => 'primary-menu',
                                      'fallback_cb' => false,
                                  ]); ?>

                <!--<ul class="social-icons">
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Facebook</span>
                            <span data-icon="ei-sc-facebook"><noscript>Facebook</noscript></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Twitter</span>
                            <span data-icon="ei-sc-twitter"><noscript>Twitter</noscript></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Google Plus</span>
                            <span data-icon="ei-sc-google-plus"><noscript>Google Plus</noscript></span>
                        </a>
                    </li>
                </ul>-->

                <?php wp_nav_menu([
                                      'theme_location' => 'social',
                                      'container' => '',
                                      'container_class' => '',
                                      'menu_id' => 'menu',
                                      'menu_class' => 'social-icons',
                                      'fallback_cb' => false,
                                      'link_before'          => '<span class="screen-reader-text">',
                                      'link_after'           => '</span>',
                                  ]); ?>

                <aside id="menu-widget-area" class="menu-widget-area">

                    <?php dynamic_sidebar('menu-widget')?>

                </aside>

            </div>

        </nav><!-- #site-navigation -->

    </header><!-- #masthead -->