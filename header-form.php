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
                <ul>
                    <li><a href="<?php echo get_home_url(); ?>" class="active">Start</a></li>
                    <li><a href="<?php echo get_home_url(); ?>#screen_2">So funktioniert's</a></li>
                    <li><a href="<?php echo get_home_url(); ?>#screen_3">Über uns</a></li>
                    <li><a href="<?php echo get_home_url(); ?>#screen_5">FAQ's</a></li>
                </ul>
            </nav>
            <a href="<?php echo get_home_url(); ?>#screen_4" class="btn">
				<span class="icon">
					<img src="<?php echo $dir ?>/img/contact.png" alt="">
				</span>
                Kontakt zu uns</a>
        </div>
        <div class="burger">
            <img src="<?php echo $dir ?>/img/burger.svg" alt="">
        </div>
    </div>
</header>


