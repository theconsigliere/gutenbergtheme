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
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero-fullwidth';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$heroimage = get_field('hero_image');
$position = get_field('text_position');
$title = get_field('hero_title');
$subtitle = get_field('hero_sub_title');
$desc = get_field('hero_desc');
$button = get_field('hero_button');

?>


<div class="full-width-hero <?php echo esc_attr($className); ?>"  id="<?php echo esc_attr($id); ?>">
    <?php 

    if (!empty($heroimage)) : ?>

    <?php echo wp_get_attachment_image( $heroimage, 'full'); ?>

    <?php endif; ?>

    <div class="full-width-text-group <?php echo $position; ?>">

        <h1><?php echo $title; ?></h1>
        <!-- <div class="underline"></div> -->

        <?php if ( $subtitle ) { ?>
        <h4><?php echo $subtitle; ?></h4>
        <?php } ?>
       
        <?php if ( $desc ) { ?>
        <p class='full-width__desc'><?php echo $desc; ?></p>
        <?php } ?>


        <?php 
        if( $button ): 
            $button_url = $button['url'];
            $button_title = $button['title'];
            $button_target = $button['target'] ? $button['target'] : '_self';
            ?>
            <a class="main-button" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
        <?php endif; ?>
    </div>

</div>