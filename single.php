

<?php // Edit the loop in /templates/single-loop. Or roll your own. ?>
<?php //get_template_part( 'templates/single', 'loop'); ?>



<?php // related posts function; uncomment below to use ?>
<?php // plate_related_posts(); ?>



<?php get_header(); ?>


<div id="article-page">

    <div id="inner-content" class="wrap">

    <?php the_content(); ?>


    </div>
</div>





<?php get_footer(); ?>
