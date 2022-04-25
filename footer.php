<?php $dir = get_template_directory_uri() . '/assets/'; ?>
<footer>
    <div class="top_line">
        <div class="box">
            <div class="left_box">
                <h3 class="title_h3"><?php the_field('footer_title', 'option') ?></h3>
                <p><?php the_field('newsletter_text', 'option') ?></p>
                <ul class="social_box">
                    <li>
                        <a href="<?php the_field('facebook_link', 'option') ?>">
                            <img src="<?php echo $dir ?>/img/facebook.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('instagram_link', 'option') ?>">
                            <img src="<?php echo $dir ?>/img/instagram.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right_box">
                <div class="wrap_email">
                    <?php echo apply_shortcodes('[mc4wp_form id="151"]'); ?>
                    <div class="info"><?php the_field('email_tip', 'option') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_line">
        <div class="box">
            <div class="left_b">
                <div class="copyright"><?php the_field('copyright', 'option') ?></div>
            </div>
            <div class="right_b">
                <nav class="footer_menu">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header_bottom',
                    )); ?>
                </nav>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


<style>
@media (max-width: 991px) {
    .gf_page_steps .gf_step_active:before {
        content: "...";
        background: url(<?php echo $dir ?>/img/back-arrow.png) no-repeat right
            center;
        width: 6.75rem;
        left: -7.8rem;
        background-size: 2.5rem;
        font-size: 1.5rem;
    }

    .gf_page_steps .gf_step_active:after {
        content: "...";
        background: url(<?php echo $dir ?>img/up-arrow.png) no-repeat left
            center;
        width: 6.75rem;
        right: -7.8rem;
        background-size: 2.5rem;
        font-size: 1.5rem;
        position: absolute;
    }
}
</style>

<script>
    AOS.init();
</script>
</body>

</html>