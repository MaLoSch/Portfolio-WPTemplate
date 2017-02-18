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
<?php
	// Exlude categories from the_category -- http://wordpress.stackexchange.com/questions/31181/exclude-categories-from-the-category
	function exclude_post_categories($excl='', $spacer=' ') { // create new function called exclude_post_categories
  		$categories = get_the_category($post->ID); // get all categories and store them in $categories
  		if (!empty($categories)) {
    			$exclude = $excl; // store categories that should be excluded in $exclude
			$exclude = explode(",", $exclude); // if there are more than one category, they are separated by commas
			$thecount = count(get_the_category()) - count($exclude); // count the number of categories to be excluded and store the number in $thecount
			foreach ($categories as $cat) { // for each entry in $categories do the following
				$html = ''; // create empty html
			     if (!in_array($cat->cat_ID, $exclude)) { // if the current category should not be excluded
					$html .= '<li class="cat-item cat-item-' . $cat->cat_ID . '">'; // append <li> to $html
			     	$html .= '<a href="' . get_category_link($cat->cat_ID) . '" '; // append <a> to $html with a link to the category
			     	$html .= '">' . $cat->cat_name . '</a></li>'; // append title to $html using the current category title then close the <a> tag and the <li> tag
			     	if ($thecount >= 1) { // if there is more than one category to be excluded remaining
			     		$html .= $spacer; // append $spacer to html
			     	}
			     	$thecount--; // substract 1 from $thecount
			     	echo $html; // give back $html
			     }
			}
		}
	}
?>
<?php
	// Exlude categories from the_category -- http://wordpress.stackexchange.com/questions/31181/exclude-categories-from-the-category
	function exclude_post_categories_archive($excl='', $spacer=' ') { // create new function called exclude_post_categories_archive
		$categories = get_the_category($post->ID); // get all categories and store them in $categories
		if (!empty($categories)) {
			$exclude = $excl; // store categories that should be excluded in $exclude
			$exclude = explode(",", $exclude); // if there are more than one category, they are separated by commas
			$thecount = count(get_the_category()) - count($exclude); // count the number of categories to be excluded and store the number in $thecount
			foreach ($categories as $cat) { // for each entry in $categories do the following
				$html = ''; // create empty html
				if (!in_array($cat->cat_ID, $exclude)) { // if the current category should not be excluded
					$html .= '<span>'; // append <li> to $html
			     	$html .= $cat->cat_name . '</span>'; // append title to $html using the current category title then close the <li> tag
					if ($thecount >= 1) { // if there is more than one category to be excluded remaining
			     		$html .= $spacer; // append $spacer to html
			     	}
			     	$thecount--; // substract 1 from $thecount
			     	echo $html; // give back $html
			     }
			}
		}
	}
