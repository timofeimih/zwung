<?php

/** * Template Name: Form  */
?>
<?php $dir = get_template_directory_uri() . '/assets/';
$size = 'full'; ?>

<div class="wrapper">
    <?php get_header('form'); ?>
    <main>
        <section class="section_content_page form_page">
            <div class="box">
                <div class="wrap__form">
                    <div class="left_box">
                        <?php the_content(); ?>
                    </div>
                    <aside>
                        <h3 class="title_h3">Gut zu wissen!</h3>
                        <ul class="list">
                            <?php 
                                $args = array( 'category' => 5, 'post_type' =>  'post', 'posts_per_page' => 3); 
                                $postslist = get_posts( $args );  
                            ?>
                            <?php foreach ($postslist as $post): setup_postdata($post); ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?php echo get_category_link(5) ?>" class="link">
                            <div class="icon">
                                <img src="<?php echo $dir ?>/img/post_icon_link_black.png" alt="">
                            </div>
                            Mehr anzeigen</a>
                    </aside>
                </div>
        </section>
    </main>
    <?php get_footer(); ?>
</div>
