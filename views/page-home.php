<?php

/** * Template Name: Front Page  */
?>
<?php $dir = get_template_directory_uri() . '/assets/';
$size = 'full'; ?>

<?php get_header(); ?>
<div class="wrapper">
    
    <main>
        <section id="fullpage" class="fullpage">
            <section class="section section_top" style=" 
                <?php if ( get_field('top_image') ): ?>
                    background-image: url('<?php the_field('top_image'); ?>')
                <?php else: ?>
                    background-image: url('<?php echo $dir ?>/img/section_top_bg.jpg')
                <?php endif ?>
            ">
                <div class="box"  data-aos="zoom-in">
                    <div class="content_box">
                        <?php if( get_field('heading') ): ?>
                            <h3 class="title_h3"><?php the_field('heading'); ?></h2>
                        <?php endif; ?>
                        <p><?php the_field('p'); ?></p>
                        <a href="#screen_2" class="bg_title">
    						<span class="icon">
    							<img src="<?php echo $dir ?>/img/post_icon_link.png" alt="">
    						</span>
                            <?php the_field('button'); ?></a>
                    </div>
                    <a href="#screen_2" class="link_down">
                        <img src="<?php echo $dir ?>/img/arrow_down.png" alt="">
                    </a>
                </div>
            </section>
            <section class="section how_works">
                <div class="box" data-aos="zoom-in">
                    <h3 class="title_h3"><?php the_field('title'); ?></h3>
                    <div class="row items_works">
                        <?php 
                            $items = get_field('items');

                            if($items){
                                foreach ($items as $item): ?>
                                    <div class="col-3">
                                        <div class="item">
                                            <div class="icon">
                                                    <img src="<?php echo $item['image']?>" alt="">

                                            </div>
                                            <div class="title"><?php  echo $item['title']?></div>
                                        </div>
                                    </div>
                                <?php endforeach;
                            }
                         ?>

                    </div>
                    <div class="row wrap_post">
                        <div class="col-6">
                            <div class="item">
                                <div class="image">
                                    <?php if (get_field('how_works1_image')): ?>
                                        <img src="<?php the_field('how_works1_image')?>" alt="">
                                    <?php else: ?>
                                        <img src="<?php echo $dir ?>/img/how_works_img_1.jpg" alt="">
                                    <?php endif ?>
                                    <div class="text_image"><?php the_field('how_works1_title')?></div>
                                </div>
                                <a href="<?php echo get_page_link(33); ?>" class="title">
                                    <div class="icon">
                                        <img src="<?php echo $dir ?>/img/post_icon_link.png" alt="">
                                    </div>
                                    Jetzt starten
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item">
                                <div class="image">
                                    <?php if (get_field('how_works2_image')): ?>
                                        <img src="<?php the_field('how_works2_image')?>" alt="">
                                    <?php else: ?>
                                        <img src="<?php echo $dir ?>/img/how_works_img_2.jpg" alt="">
                                    <?php endif ?>
                                    <div class="text_image"><?php the_field('how_works2_title')?></div>
                                </div>
                                <a href="<?php echo get_page_link(35); ?>" class="title">
                                    <div class="icon">
                                        <img src="<?php echo $dir ?>/img/post_icon_link.png" alt="">
                                    </div>
                                    Jetzt starten
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section team">
                <div class="box" data-aos="zoom-in">
                    <h1 class="title_h1"><?php the_field('title_team')?></h1>
                    <div class="row wrap_team">
                        <?php 
                            $team_members = get_field('team_members');

                            if($team_members){
                                foreach ($team_members as $member): ?>
                                    <div class="col-4">
                                        <div class="item">
                                            <div class="image">
                                                <img src="<?php echo $member['image']?>" alt="">
                                            </div>
                                            <div class="content_box">
                                                <div class="name"><?php echo $member['name']?></div>
                                                <div class="position"><?php echo $member['position']?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;
                            }
                         ?>
                    </div>
                    <h2 class="title_h2"><?php the_field('mission_h2')?></h2>
                    <p><?php the_field('mission_text')?>
                    </p>
                </div>
            </section>
            <section class="section team team_2">
                <div class="box" data-aos="zoom-in">
                    <div class="section_form">
                        <div class="wrap_box">
                            <div class="left_box">
                                <h2 class="title_h2"><?php the_field('title_contact')?></h2>
                                <p><?php the_field('p')?><p>
                                <h3 class="title_h3"><?php the_field('title_h3')?></h3>
                                 <ul class="list">
                                    <?php $list = get_field('list_contact');
                                        foreach($list as $listValue){
                                            echo '<li>' . $listValue['field'] .  '</li>';
                                        }
                                     ?>
                                </ul>
                            </div>
                            <div class="right_box">
                                <?php echo apply_shortcodes( '[contact-form-7 id="40" title="contact-form"]' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="section_content_page content_page_contact" style='display:none'>
                            <h1>Vielen Dank</h1>
                            <div class="sub_title">Wir haben Ihre Nachricht erhalten und werden uns in Kürze mit Ihnen in Verbindung
                                setzen.
                            </div>

                            <div class="arrow_box">
                                <div class="icon">
                                    <img src="http://spilart.dp.ua/zwung/wp-content/themes/zwung/assets/img/arrow_contact.png" alt="">
                                </div>
                                <p>In der Zwischenzeit beantworten wir Ihnen gerne die häufigsten Fragen in unseren FAQ. Schauen Sie mal
                                    rein</p>
                            </div>
                    </div>
                </div>
            </section>
            <section class="section faq">
                <div class="wrap_faq">
                    <div class="inner_faq">
                        <div class="box" data-aos="zoom-in">
                            <h2 class="title_h2">FAQ</h2>
                            <div class="wrap_item">
                                <div class="module__item_faq item_1">
                                    <h3 class="title_h3">Prämien</h3>
                                    <div class="wrap_link">
                                        <?php 
                                            $args = array( 'category' => 5, 'post_type' =>  'post', 'posts_per_page' => 3); 
                                            $postslist = get_posts( $args );  
                                        ?>
                                        <?php foreach ($postslist as $post): setup_postdata($post); ?>
                                            <a href="<?php the_permalink(); ?>" class='link'><?php the_title(); ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php 
                                        $count = get_category(5)->category_count; 
                                    ?>
                                    <?php if ($count > 3): ?>
                                       <a href="<?php echo get_category_link(5) ?>" class="more">Mehr anzeigen…</a> 
                                    <?php endif ?>
                                    
                                </div>
                                <div class="module__item_faq item_2">
                                    <h3 class="title_h3">THG-Quote</h3>
                                    <div class="wrap_link">
                                        <?php 
                                            $args = array( 'category' => 6, 'post_type' =>  'post', 'posts_per_page' => 1); 
                                            $postslist = get_posts( $args );  
                                        ?>
                                        <?php foreach ($postslist as $post): setup_postdata($post); ?>
                                            <a href="<?php the_permalink(); ?>" class='link'><?php the_title(); ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php 
                                        $count = get_category(6)->category_count; 
                                    ?>
                                    <?php if ($count > 1): ?>
                                       <a href="<?php echo get_category_link(6) ?>" class="more">Mehr anzeigen…</a> 
                                    <?php endif ?>
                                </div>
                                <div class="module__item_faq item_3">
                                    <h3 class="title_h3">Antrag</h3>
                                    <div class="wrap_link">
                                        <?php 
                                            $args = array( 'category' => 7, 'post_type' =>  'post', 'posts_per_page' => 1); 
                                            $postslist = get_posts( $args );  
                                        ?>
                                        <?php foreach ($postslist as $post): setup_postdata($post); ?>
                                            <a href="<?php the_permalink(); ?>" class='link'><?php the_title(); ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php 
                                        $count = get_category(7)->category_count; 
                                    ?>
                                    <?php if ($count > 1): ?>
                                       <a href="<?php echo get_category_link(7) ?>" class="more">Mehr anzeigen…</a> 
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <?php get_footer(); ?>
            </section>

        </section>
    </main>
    
</div>