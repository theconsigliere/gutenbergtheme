</main>
</section>


        <?php // FOOTER NOTICES

        // Grab the select field data
        $footernotices = get_field('show_footer_notices', 'option');		
        // check the selection
        if($footernotices == 'yes') { ?>

        <div class="footer__notices" style='background-color: <?php the_field('notice_background_colour', 'option'); ?>'>

                <?php get_template_part( 'page-components/footer/footer-notices' ); ?>

        </div>

        <?php   } ?>



<footer id="footer" class="footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">

        <?php   //Footer Main
             
        get_template_part( 'page-components/footer/footer-main' ); ?>




        <?php   // Footer Bottom
             
        get_template_part( 'page-components/footer/footer-bottom' ); ?>



</footer>

</div>


<?php // all js scripts are loaded in library/functions.php 
?>


<?php wp_footer(); ?>

</body>

</html> <!-- This is the end. My only friend. -->