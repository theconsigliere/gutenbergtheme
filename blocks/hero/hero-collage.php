<?php

/**
 *  Hero Collage
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
$className = 'hero-collage';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('hero_title');
$images = get_field('hero_images');
$background_color = get_field('hero_background');
$text_color = get_field('hero_colour');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

?>

<div id="<?php echo esc_attr($id); ?>" class="hero-collage <?php echo esc_attr($className); ?>" style='background-color: <?php echo $background_color; ?>'>

    <div class="grid-collage">

    <?php 
    if( $images ): ?>

    <?php foreach( $images as $key=>$image_id ): ?>
    
            <?php echo wp_get_attachment_image( $image_id, $size, "", array( "class" => "grid__collage_item  skip-lazy grid__collage_item_" . $key . "" )  ); ?>
        
    <?php endforeach;  endif; ?>

    </div>

    <div class="full-width-text-group">
        <h1 class='collage-title cursive' style='color: <?php echo $text_color; ?>'><?php echo $text; ?></h1>
    </div>

</div>