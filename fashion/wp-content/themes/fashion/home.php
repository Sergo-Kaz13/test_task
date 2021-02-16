<?php
/**
 * Template name: Home
 */

get_header();
?>

        <?php if( have_rows('slider') ): ?>
            <div class="slider">
                <?php while( have_rows('slider') ): the_row(); 
                    // переменные
                    $image = get_sub_field('img');
                    $link = get_sub_field('slider_link');
                    $link_text = get_sub_field('slider_link_text');
                    $content_text = get_sub_field('slider_text');
                    $content_date = get_sub_field('slider_date');
                ?>

                    <div class="slider__item">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        <div class="slider__text">
                            <?php if( $link ): ?>
                                <a href="<?php echo $link; ?>" class="slider__text--category"><?php echo $link_text; ?></a>
                            <?php endif; ?>
                            <div class="slider__text--title"><?php echo $content_text; ?></div>
                            <div class="slider__text--date"><?php echo $content_date; ?></div>
                        </div>   
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>  

        <div class="content">
            <section class="cards">
                
                <?php if( have_rows('cards') ): ?>
                    <div class="cards__block">
                        <?php while( have_rows('cards') ): the_row(); 
                            // переменные
                            $image = get_sub_field('cards_img');
                            $link = get_sub_field('cards_link');
                            $link_text = get_sub_field('cards__category');
                            $cards_text = get_sub_field('cards__text');
                            $cards_date = get_sub_field('cards__date');
                        ?>
                        <div class="cards__item">
                            <div class="cards__images">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            </div>

                            <div class="cards__content">
                                    <p class="cards__category">
                                        <?php if( $link ): ?>
                                            <a href="<?php echo $link; ?>"><?php echo $link_text; ?></a>
                                        <?php endif; ?>
                                    </p>
                                    <p class="cards__text"><?php echo $cards_text; ?></p>
                                    <p class="cards__date"><?php echo $cards_date; ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                                
                <ul class="pagination">
                    <li><span>&#60;</span><a href="#">OLDER POST</a></li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>...</li>
                    <li>8</li>
                    <li><a href="#">NEXT POST</a><span>&#62;</span></li>
                </ul>
            </section>

<?php
get_sidebar();
get_footer();