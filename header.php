<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    get_template_part('parts/meta');
    wp_head();
    ?>
    <title><?php echo get_bloginfo('name');
            wp_title('|', true); ?></title>


</head>
<?php $dir = get_template_directory_uri() . '/assets/'; ?>

<body>

    <header>
        <div class="box">
            <a href="<?php echo get_home_url(); ?>" class="logo">
                <img src="<?php echo $dir ?>/img/logo.svg" alt="">
            </a>
            <div class="wrap_menu">
                <nav class="main_menu">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header_top',
                    )); ?>
                </nav>
                <a href="#screen_4" class="btn">
                    <span class="icon">
                        <img src="<?php echo $dir ?>/img/contact.png" alt="">
                    </span>
                    <?php the_field('contact_button', 'option') ?></a>
            </div>
            <div class="burger">
                <img src="<?php echo $dir ?>/img/burger.svg" alt="">
            </div>
        </div>
    </header>

    <div id="cookie-law-info-bar" data-nosnippet="true" data-cli-style="cli-style-v2" style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); font-family: inherit; bottom: 0px; position: fixed; display: block;"><span>
            <div class="cli-bar-container cli-style-v2">
                <div class="cli-bar-message">We use cookies on our website to give you the most relevant experience by remembering your preferences and repeat visits. By clicking “Accept All”, you consent to the use of ALL the cookies. However, you may visit "Cookie Settings" to provide a controlled consent.</div>
                <div class="cli-bar-btn_container"><?php echo apply_shortcodes('[cookie_settings margin="0px 5px 0px 0px"]'); ?>
                    <?php echo apply_shortcodes('[cookie_accept_all]'); ?>
                </div>
            </div>
        </span></div>