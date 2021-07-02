<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php html_schema(); ?> <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>

    <?php /**
     * updated with non-blocking order
     * see here: https://csswizardry.com/2018/11/css-and-network-performance/
     * 
     * In short, place any js here that doesn't need to act on css before any css to
     * speed up page loads.
     */
    ?>

    <?php // Analytics login to 'dashboard theme settings > analytics' to change values ?>

    <?php 
   $google = get_field('google_analytics', 'option');
   $fb = get_field('facebook_pixel', 'option');
   
   if ($google):
    echo $google;
   endif; 

   if ($fb):
    echo $fb;
   endif;
   
     ?>


    <?php // See everything you need to know about the <head> here: https://github.com/joshbuchea/HEAD 
    ?>
    <meta charset='<?php bloginfo('charset'); ?>'>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php // favicons (for more: https://realfavicongenerator.net/) ?>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <?php // updated pingback. Thanks @HardeepAsrani https://github.com/HardeepAsrani  ?>
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>

    <?php
        #twitter cards hack
        if(is_single() || is_page()) {
        $twitter_url    = get_permalink();
        $twitter_title  = get_the_title();
        $twitter_desc   = get_the_excerpt();
        $twitter_thumb = get_theme_file_uri() . '/favicon/favicon-16x16.png';
        $twitter_name   = str_replace('@', '', get_the_author_meta('twitter'));
        ?>

    <meta name="twitter:card" value="summary" />
    <meta name="twitter:url" value="<?php echo $twitter_url; ?>" />
    <meta name="twitter:title" value="<?php echo $twitter_title; ?>" />
    <meta name="twitter:description" value="<?php echo $twitter_desc; ?>" />
    <meta name="twitter:image" value="<?php echo $twitter_thumb; ?>" />
    <meta name="twitter:site" value="@dirtymartiniexe" />
    <?
        if($twitter_name) {
        ?>
    <meta name="twitter:creator" value="@<?php echo $twitter_name; ?>" />
    <?
        }
        }
    ?>


    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

    <?php // Page Transitions  ?>
    <svg id="header-fader"></svg>
    <script src='<?php echo get_theme_file_uri(); ?>/build/js/fade-min.js'></script>


    <?php // PRE-LOADER 

    // Grab the select field data
    $activated = get_field('loading_activate', 'option');		
    // check the selection
    if($activated == 'yes') { ?>

    <div class="pre_loader">

        <?php get_template_part( 'page-components/theme-settings/pre-loader' ); ?>

    </div>

    <?php   } ?>



    <header class="header" id="header" role="banner" itemscope itemtype="https://schema.org/WPHeader">

        <?php // HEADER TOP BAR ?>

        <?php
            // Grab the select field data
            $activate = get_field('activate_header_bar', 'option');		
            // check the selection
            if($activate == 'yes') { ?>

        <div class="header-top-bar">

            <?php get_template_part( 'page-components/theme-settings/announcement-bar' ); ?>

        </div>

        <?php   } ?>




        <?php 
             
             
             // Header Template Loop
             
             get_template_part( 'page-components/header/header-components' ); ?>

    </header>



    <div class="modal-group">

        <?php
            // check we're on the front page
            if(is_front_page()) {
            // grab the select field data
            $active = get_field('active', 'option');		
            // check the selection
            if($active == 'yes') {
            // get the modal code
            get_template_part( 'page-components/theme-settings/modal' );
            } 
            }
            ?>

    </div>

    <div class="page-cover"></div>

    <main data-barba='wrapper' class='page-in-full'>
        <section data-barba='container'>