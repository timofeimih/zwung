<?php
function true_loadmore_scripts()
{
	wp_enqueue_script('jquery');
	wp_enqueue_script('true_loadmore', get_stylesheet_directory_uri() . '/loadmore.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'true_loadmore_scripts');

function true_load_posts()
{
	$args = unserialize(stripslashes($_POST['query']));
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';

	query_posts($args);
	if (have_posts()) :
		while (have_posts()) : the_post();
			get_template_part('parts/post-item', get_post_format());
		endwhile;
	endif;
	die();
}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
