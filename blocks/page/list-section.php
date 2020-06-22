<?php

/**
 *  Hero Full-Width
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'list-section-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'list-section';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>


<section class="full-width-section  <?php echo esc_attr($className); ?>" id="<?php echo esc_attr($id); ?>">

    <div class="container">

        <div class='list__column_group'>

            <?php if (have_rows('list_column')) : ?>

                
                    
                    <?php while (have_rows('list_column')) : the_row(); 

                        // Title Text Section
                        if (get_row_layout() == 'title_text_section') : ?>

                            <div class="list__column">

                                <div class="list__title_text">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>

                            </div>


                        <?php // List Section
                        elseif (get_row_layout() == 'list_list_section') : ?>

                            <div class="list__column">

                            
                                    <h3 class='list__master_title'><?php the_sub_field('list_list_title'); ?></h3>

                                    <?php if (have_rows('list_item')) : while (have_rows('list_item')) : the_row(); ?>

                                    <div class="list__item">

                                        <div class="list__item_title">
                                            <div class="list__item_span">
                                                <span class="list__left"></span>                                          
                                                <span class="list__right"></span>   
                                            </div>
                                            <h6><?php the_sub_field('list_title'); ?></h6>
                                        </div>

                                        <div class="list__item_desc">
                                            <p><?php the_sub_field('list_description'); ?></p>
                                        </div>

                                    </div>    

                                    <?php endwhile; endif; ?>


                            </div>    


                        <?php endif; ?>

                    <?php endwhile; ?>
            
            
            <?php endif; ?>

        </div>

    </div>

</section>