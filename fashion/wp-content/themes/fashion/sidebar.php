<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fashion
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<!-- <aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>#secondary -->


<aside class="sidebar">
                    <div class="author">
                        <a href="<?php the_field('link_author'); ?>"><?php the_field('button_author'); ?></a>
                    </div>
    
                    <?php if( have_rows('author') ): 
                    
                        while( have_rows('author') ): the_row(); 
                            
                            // переменные
                            $image = get_sub_field('author_photo');
                            
                            ?>
                    
                            <div class="author__cards">
                                <div class="author__images">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </div>
                                <div class="author__name"><?php the_sub_field('name_author'); ?></div>
                                <div class="author__hobby"><?php the_sub_field('author_hobby'); ?></div>
                                <div class="author__about"><?php the_sub_field('author_about'); ?></div>
                                <div class="author__button"><?php the_sub_field('button_continue'); ?></div>
                            </div>
                    
                        <?php endwhile; ?>
                    
                    <?php endif; ?>
    
                <div class="category">
                    <div class="category__button">Categories</div>
                    <?php wp_nav_menu( [ 
                        'theme_location'  => 'categories',
                        'menu_id'        => 'categories',
                        'container'     => '',
                        ] ); ?>
                </div>
            </aside>
        </div>



