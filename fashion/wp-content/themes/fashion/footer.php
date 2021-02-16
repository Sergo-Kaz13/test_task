<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fashion
 */

?>

<!-- <footer class="footer">
            <div class="footer__logo">
                <a href="#">
                    <img src="image/Logotype.png" alt="">
                </a>
            </div>
            <nav class="menu footer__menu">
                
            </nav>
            <p class="footer__text">@2019 Logwork. <a href="#">All Right Reserved.</a></p>
        </footer>
    </div> -->


    <footer class="footer">
            <div class="footer__logo">
                <a href="<?php echo home_url() ?>">
                    <?php 
                        $image = get_field('logo');
                        $size = 'full'; // (thumbnail, medium, large, full или ваш размер)

                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
                    ?>
                </a>
            </div>
            <nav class="menu footer__menu">
                <?php wp_nav_menu( [ 
                    'theme_location'  => 'menu',
                    'menu_id'        => 'footer_menu',
                    'container'     => '',
                ] ); ?>
            </nav>
            <div class="footer__text"><?php the_field('footer_text'); ?><a href="<?php the_field('footer_link'); ?>"><?php the_field('footer_text_link'); ?></a></div>
        </footer>
    </div>

<?php wp_footer(); ?>

</body>
</html>
