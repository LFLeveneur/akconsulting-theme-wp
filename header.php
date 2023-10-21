<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/variables.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/header.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/footer.css">

        <!-- Animate On Scroll Library -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Swiper Library -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <!-- favicon -->
        <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon.ico">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/images/favicon/favicon-16x16.png">

        <title>Ak Consulting</title>
    </head>
    <body>
        <style>
            @font-face {
                font-family: 'Arial';
                src: url('<?php bloginfo('template_url'); ?>/assets/fonts/Arial/ARIAL.TTF');
                font-weight: regular;
            }
            @font-face {
                font-family: 'Arial';
                src: url('<?php bloginfo('template_url'); ?>/assets/fonts/Arial/ARIALDB.TTF');
                font-weight: bold;
            }
            @font-face {
                font-family: 'Ubuntu';
                src: url('<?php bloginfo('template_url'); ?>/assets/fonts/Ubuntu/Ubuntu-Regular.ttf');
                font-weight: regular;
            }
            @font-face {
                font-family: 'Ubuntu';
                src: url('<?php bloginfo('template_url'); ?>/assets/fonts/Ubuntu/Ubuntu-Medium.ttf');
                font-weight: medium;
            }
            @font-face {
                font-family: 'Ubuntu';
                src: url('<?php bloginfo('template_url'); ?>/assets/fonts/Ubuntu/Ubuntu-Bold.ttf');
                font-weight: bold;
            }
        </style>
        <nav
            class="navbar"
            id="navbar"
            data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="500"
            data-aos-anchor-placement="center-bottom"
        >
            <div class="navbar-logo black" id="navbar-logo-black">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/ak-logo-black.png" alt="AK Logo Black">
                </a>
            </div>
            <div class="navbar-logo white" id="navbar-logo-white">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/ak-logo-white.png" alt="AK Logo White">
                </a>
            </div>
            <?php wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'container' => false,
                'menu_class' => 'navbar-menu',
            ) ); ?>
        </nav>
        <label class="navbar-burger" for="navbar-burger-check" id="navbar-burger" style="box-sizing: content-box !important;">
            <input class="navbar-burger-input" type="checkbox" id="navbar-burger-check"/> 
            <span class="navbar-burger-item"></span>
            <span class="navbar-burger-item"></span>
            <span class="navbar-burger-item"></span>
        </label>

        <!-- Navbar Logo black 2 (for the mobile) -->
        <div class="navbar-logo-2" id="navbar-logo-2">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/ak-logo-black.png" alt="AK Logo Black">
            </a>
        </div>