
<div class="footer__notice_inner">
<?php

// COLUMN REPEATER
if( have_rows('footer_notices', 'option') ): ?>

  
    <?php while ( have_rows('footer_notices', 'option') ) : the_row(); ?>



       <?php // FLEXIBLE CONTENT IN COLUMNS ?>

           <?php if (have_rows('footer_notice_item')) : while (have_rows('footer_notice_item')) : the_row();

                    // Footer Menu
                    if (get_row_layout() == 'title_desc') : ?>

                        <div class="footer__notice_item">
                            <?php if (get_sub_field('title')) : ?>
                                <h5><?php the_sub_field('title'); ?></h5>
                            <?php endif; ?>

                            <?php if (get_sub_field('desc')) : ?>
                                <p><?php the_sub_field('desc'); ?></p>
                            <?php endif; ?>


                             <?php 
                            $link = get_sub_field('button');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class='main-button' href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                         
                        </div>
                        
                

                    <?php endif;
    
                endwhile; // close the loop of flexible content

            endif; ?>

  

    <?php   endwhile; 

 endif; ?>
</div>
