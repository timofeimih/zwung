<div class="wrapper">
  <?php get_header(); ?>

  <main role="main">
    <section class="news_section news_page" style='margin-top:10rem'>
      <div class="box">
        <div class="news_top_bar">
          <div class="news_search wow fadeIn">
            <form method="get" id="searchform" class="search_form" action="<?php bloginfo('home'); ?>/">
              <input type="text" value="" name="s" id="s" placeholder="Recherchez une news" autocomplete="off" />
              <!-- <input type="hidden" name="search-type" value="news" /> -->
              <input type="hidden" value="post" name="post_type" />
              <input type="submit">
            </form>
          </div>
          <ul class="news_filter wow fadeIn" data-wow-delay=".2s">
            <li><a href="<?php echo get_the_permalink(66); ?>" class="filter_btn">ALL</a></li>
            <?php
            if (is_category()) {
              $cat_name = get_queried_object()->name;
            }
            $categories = get_categories(array(
              'orderby' => 'name',
              'order' => 'ASC'
            ));
            foreach ($categories as $category) : ?>
              <li>
                <a href="<?php echo get_category_link($category->term_id); ?>" class="filter_btn <?php if ($cat_name == $category->name) : ?>current<?php endif; ?>"><?php echo $category->name ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="news_preview_wrapper">
          <?php
          wp_reset_postdata();
          $perPage = 3;
          $paged   = (get_query_var('paged')) ? get_query_var('paged') : 1;
          if (is_category()) {
            $cat_name = get_queried_object()->name;
          }
          $posts    = new WP_Query(array(
            'posts_per_page' => $perPage,
            'category_name'  => $cat_name,
            'order'          => 'DESC',
            'orderby'        => 'date',
            'post_type'      => 'post',
            'paged'          => $paged
          ));

          $temp_query = $wp_query;
          $wp_query   = NULL;
          $wp_query   = $posts;

          if ($posts->have_posts()) :
            while ($posts->have_posts()) : $posts->the_post(); ?>
              <?php get_template_part('parts/post-item', get_post_format()); ?>
            <?php endwhile;
          else : ?>

          <?php endif;
          wp_reset_postdata();
          ?>
        </div>
        <?php if ($posts->max_num_pages > 1) : ?>
          <script>
            var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
            var posts = '<?php echo serialize($posts->query_vars); ?>';
            var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
            var max_pages = '<?php echo $posts->max_num_pages; ?>';
          </script>
          <div id="true_loadmore" class="style_btn loadmore" data-loading="Loading...">Load More</div>
        <?php endif; ?>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
</div>