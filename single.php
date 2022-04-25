<div class="wrapper">
  <?php get_header(); ?>

    <main role="main">
      <section class="start_section like_bg single_intro" style='margin-top:10rem'>
        <?php the_post_thumbnail('full'); ?>
        <div class="box">
          <div class="title_box">
            <h1 class="wow fadeInLeft"><?php the_title(); ?></h1>
          </div>
        </div>
      </section>

      <section class="offer_section single_content">
        <div class="box">
          <?php the_content(); ?>
        </div>
      </section>
    </main>

  <?php get_footer(); ?>
</div>