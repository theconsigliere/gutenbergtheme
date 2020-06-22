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
$id = 'card-section-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'card-section';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>



<section id="<?php echo esc_attr($id); ?>" class='card-section'>


    <div class="full-width-section">


        <?php 

        $subtitle = get_field('card_title');

        if ( $subtitle) { ?>


            <div class="title-section <?php the_field('card_position'); ?>">
                <h1><?php the_field('card_title'); ?></h1>
            </div>

        <?php } ?>

        <div class="container">





            <div class="row">

                <?php if (have_rows('card_item')) : while (have_rows('card_item')) : the_row(); ?>


                <div class="column">
                    <div class="card__item">
                        <div class="card__item_image">

                        <?php 

                            $image = get_sub_field('card_image');

                            if ( $image) { ?>

                            <?php echo wp_get_attachment_image($image, 'full'); ?>

                            <?php } ?>

                        </div>

                        <div class="card_item__text">
                            <h3><?php the_sub_field('card_title'); ?></h3>
                            <p><?php the_sub_field('card_desc'); ?></p>

                            <?php 
                            $link = get_sub_field('card_button');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="main-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>


                        </div>


                    </div>
                </div>


                <?php endwhile;
        endif; ?>
            </div>


        </div>


    </div>



</section>