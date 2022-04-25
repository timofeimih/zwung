<div class="wrapper">
<?php get_header(); ?>

<main class="search" style='margin-top:10rem'>
  <div class="box">
    <div class="search_title">Searching results for: <span>"<?php echo $_GET['s']; ?>"</span></div>
    <ul class="accordeon_wrapper">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="accordeon_item">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </li>
        <?php endwhile; ?>
    </ul>
  <?php else : ?>

    <p class="search_title">Sorry, but nothing was found</p>
  <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
  </div>