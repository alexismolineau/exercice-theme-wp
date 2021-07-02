<footer id="colophon" class="site-footer" >

    <aside id="footer-widget-area" class="footer-widget-area" role="complementary">
        <div class="footer-widgets">

            <?php dynamic_sidebar('footer-widget')?>

        </div>
    </aside>

    <div class="footer-wrapper" role="contentinfo">

        <div class="site-info">
            <a href="https://wordpress.org">Proudly Powered by WordPress</a>
            <span class="sep"> | </span>
            Theme: Carbon by <a href="" rel="designer">Vincent Dubroeucq</a>
        </div><!-- .site-info -->

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

        </div><!-- .footer-wrapper -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
