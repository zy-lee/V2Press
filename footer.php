        </div>
    </div><!--END #content-->

    <footer id="footer">
        <div class="container">
            <?php if ( has_nav_menu( 'footer' ) ) { ?>
            <nav id="footer-navi">
                <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'depth' => 1) ); ?>
            </nav>
            <?php } ?>

            <div class="colophon inner">
                <?php if ( get_bloginfo( 'description' ) ) : ?>
                <?php endif; ?>
                <p><?php bloginfo( 'description' ); ?></p>
                <p><?php _e( 'Powered by WordPress', 'v2press' ); ?></p>
            </div>

            <div class="copyright inner">
                <p>&copy;2014 <?php bloginfo( 'name' ); ?></p>
            </div>
        </div>
    </footer><!--END #footer-->

    <?php get_template_part( 'content', 'helpers' ); ?>

    <?php wp_footer(); ?>
</body>
</html>
