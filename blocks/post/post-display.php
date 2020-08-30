<?php

/**
 *  Post Display
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'post-display-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'post-display';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// Load values and assign defaults.


$title = get_field('blogs_title') ?: 'Enter your title';
$posts = get_field('display_posts');

?>


<section id="post-display  <?php echo esc_attr($className); ?>" id="<?php echo esc_attr($id); ?>">

    <div class="container">
        <?php 


        if ( $title) { ?>

        <div class="blog__title-section">
            <h3><?php echo $title; ?></h3>
        </div>

        <?php } ?>

        <?php 

      

        if( $posts ): ?>
        
        <div class="blog__holder">
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
            

                <a class="blog-item" href="<?php the_permalink(); ?>">
                    <article class='blog-item__inner'>
                        <div class="blog__image">
                            <?php the_post_thumbnail('full'); ?>
                        </div>


                        <h4><?php the_title(); ?></h4>
                        <h6><?php the_date(); ?></h6>
                        <!-- only output first 32 words -->
                        <p><?php echo wp_trim_words(get_the_excerpt(), 32); ?></p>

                        <div class="byline">
                            
                                <?php foreach((get_the_category()) as $category): ?>
                                   <div class="block-button"><?php echo esc_html( $category->name ); ?></div>
                                <?php endforeach; ?>
                        </div>

                    </article>
                </a>
            <?php endforeach; ?>
        </div>
        
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </div>

</section>