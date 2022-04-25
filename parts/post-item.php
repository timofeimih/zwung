<div class="news_preview roll_over wow fadeIn" data-wow-delay="<?php echo $i; ?>00ms">
  <a href="<?php echo get_the_permalink(); ?>" class="news_thumbnail">
    <?php the_post_thumbnail('medium'); ?>
  </a>
  <span class="news_date"><?php echo get_the_date(); ?></span>
  <div class="news_title anim_border">
    <h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
  </div>
  <div class="news_desc">
    <p><?php the_excerpt(); ?></p>
  </div>
  <a class="style_hover" href="<?php echo get_the_permalink(); ?>">
    <span class="ac-btn-text-wrapper">
      <span class="ac-btn-text">En savoir plus</span>
    </span>
    <svg class="ac-btn-out" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 157.34 51.71" style="enable-background:new 0 0 157.34 51.71;" xml:space="preserve">
      <polyline class="st0" points="128.65,45.62 148.36,25.91 128.47,6.02 "></polyline>
      <line class="st0" x1="8.46" y1="25.91" x2="147.73" y2="25.91"></line>
    </svg>
    <svg class="ac-btn-in" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 157.34 51.71" style="enable-background:new 0 0 157.34 51.71;" xml:space="preserve">
      <polyline class="st0" points="128.65,45.62 148.36,25.91 128.47,6.02 "></polyline>
      <line class="st0" x1="8.46" y1="25.91" x2="147.73" y2="25.91"></line>
    </svg>
  </a>
</div>