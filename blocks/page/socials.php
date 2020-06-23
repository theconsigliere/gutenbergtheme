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
$id = 'socials__section-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'socials__section';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>


<section class="pre__footer_section  <?php echo esc_attr($className); ?>" id="<?php echo esc_attr($id); ?>">


    <div class="footer_menu__buttons">
        <?php if (have_rows('socials_group')) : while (have_rows('socials_group')) : the_row(); 

        $link = get_sub_field('social_title');

            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self'; ?>

        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        <div class="social-item">
            <div class="social-logo"><?php the_sub_field('social_icon'); ?></div>
            <h6><?php echo esc_html( $link_title ); ?></h6>
        </div>
        </a>

        <?php endif; ?>

        <?php endwhile; endif; ?>
    </div>


</section>