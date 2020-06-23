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
$id = 'contact-section-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact-section';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>


<section class="full-width-section  <?php echo esc_attr($className); ?>" id="<?php echo esc_attr($id); ?>" style='background-color: <?php the_field('contact_background_colour'); ?>'>


    <div class="container">
        <div class="row">
            <div class="column column-40 column-center">
                <h3><?php the_field('form_title'); ?></h3>
                <p><?php the_field('form_desc'); ?></p>
            </div>
            <div class="column column-60 column-center">
                <?php 

                $form_id = get_field('contact_form_id'); 
                echo do_shortcode($form_id); 

                ?>

            </div>
        </div>


    </div>

</section>