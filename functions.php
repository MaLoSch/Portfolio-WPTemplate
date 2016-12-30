<?php 
	add_theme_support( 'post-thumbnails' );  // add thumbnail functionality to WP
?>
<?php 
	function posts_by_year() {
	  	// array to use for results
	  	$years = array();

		// get posts from WP
		$posts = get_posts(array(
			'numberposts' => -1, // get all posts
			'orderby' => 'post_date', // sort posts by date
			'order' => 'ASC', // sort posts by name
			'post_type' => 'post', // only posts
			'post_status' => 'publish' // only published
		));
		
		// loop through posts, populating $years arrays
		foreach($posts as $post) {
			$years[date('Y', strtotime($post->post_date))][] = $post;
		}
		
		// reverse sort by year
		krsort($years); // start with most recent
		return $years;
	}
?>
<?php
	function all_posts_per_page( $query ) {
		
		if(is_home()) {
			$query->set( 'cat', 'Portfolio' );
		}
		
		$query->set('posts_per_page', -1); // for all queries, get all posts (instead of only 10)
        return;
	}
	add_action( 'pre_get_posts', 'all_posts_per_page');
?>