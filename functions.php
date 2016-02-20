<?php 
	add_theme_support( 'post-thumbnails' );  // add thumbnail functionality to WP
?>
<?php 
	function posts_by_year() {
  	// array to use for results
  	$years = array();

	  // get posts from WP
	  $posts = get_posts(array(
		'numberposts' => -1,
		'orderby' => 'post_date',
		'order' => 'ASC',
		'post_type' => 'post',
		'post_status' => 'publish'
	  ));
	
	  // loop through posts, populating $years arrays
	  foreach($posts as $post) {
		$years[date('Y', strtotime($post->post_date))][] = $post;
	  }
	
	  // reverse sort by year
	  krsort($years);
	
	  return $years;
}?>