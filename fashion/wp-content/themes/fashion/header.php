<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fashion
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="logo">
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
            <nav class="menu">
                <?php wp_nav_menu( [ 
                    'theme_location'  => 'menu',
                    'menu_id'        => 'header_menu',
                    'container'     => '',
                ] ); ?>
            </nav>
            <div class="burger">
                <span></span>
            </div>
        </div>