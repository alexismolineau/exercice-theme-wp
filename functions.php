<?php

/* prise en charge de <title> */
add_theme_support('title-tag');

/* prise en charges des images mises en avant */

add_theme_support('post-thumbnails');

/* chargement CSS et JS */
function mpf_enqueue_styles_and_scripts(){
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Audiowide|Exo+2:300,300i,400,400i,700,700i&amp;subset=latin-ext', [], '1.0');
    wp_enqueue_style('fonts2', 'https://fonts.googleapis.com/css?family=Space+Mono', [], '1.0');
    wp_enqueue_style('evil-icons-css', 'https://cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.css', [], '1.0');
    wp_enqueue_script('detection', get_stylesheet_directory_uri() . '/js/detection.js', [], '1.1', false);
    wp_enqueue_script('evil-icons-js', 'https://cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.js', [], '1.1', false);
    wp_enqueue_script('navigation', get_stylesheet_directory_uri() . '/js/navigation.js', [], '1.0', true);
    wp_enqueue_script('skip-link-focus-fix', get_stylesheet_directory_uri() . '/js/skip-link-focus-fix.js', [], '1.0', true);
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css', [], '1.1');

}

add_action('wp_enqueue_scripts','mpf_enqueue_styles_and_scripts');



/* menus */
register_nav_menus([
    'main' => 'Menu principal',
    'social' => 'Réseaux sociaux'
                   ]);



/* ajout class previous posst next posts*/
add_filter('next_posts_link_attributes', 'next_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'previous_posts_link_attributes');

function next_posts_link_attributes() {
    return 'class="next-posts-link button"';
}

function previous_posts_link_attributes() {
    return 'class="previous-posts-link button"';
}


add_filter( 'nav_menu_item_args', 'ajoutIconesMenu', 10, 3 );
function ajoutIconesMenu($args, $item, $depth) {

    if ($args->theme_location === 'social') {
        $args->link_before = '<span class="screen-reader-text">' . $item->title .'</span><span data-icon="ei-sc-' . str_replace(' ', '-', strtolower($item->title))  .'"><noscript>' . $item->title .'</noscript></span>';
        $args->link_after  = '</span>';
        $item->title = '';
    }
    return $args;
}





/* widgets */

register_sidebar(
    [
        'name' => 'menu widget',
        'id' => 'menu-widget',
        'description'    => 'menu widget',
        'class'          => 'widget',
        'before_title'   => '<h2 class="widget-title h5">',
        'after_title'    => '</h2>',
        'before_widget'  => '<section id="%1$s" class="widget menu-widget %2$s">',
        'after_widget'   => "</section>\n",
    ]
);

register_sidebar(
    [
        'name' => 'page widget',
        'id' => 'page-widget',
        'description'    => 'page widget',
        'class'          => 'widget',
        'before_title'   => '<h2 class="widget-title h5">',
        'after_title'    => '</h2>',
        'before_widget'  => '<section id="%1$s" class="widget %2$s">',
        'after_widget'   => "</section>\n",
    ]
);

register_sidebar(
    [
        'name' => 'footer widget',
        'id' => 'footer-widget',
        'description'    => 'footer widget',
        'class'          => 'widget',
        'before_title'   => '<h2 class="widget-title h5">',
        'after_title'    => '</h2>',
        'before_widget'  => '<section id="%1$s" class="widget footer-widget %2$s">',
        'after_widget'   => "</section>\n",
    ]
);

