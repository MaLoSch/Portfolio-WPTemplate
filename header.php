<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width" />
		
		<!-- <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title> Text displayed in tab -->
		<title><?php if (is_front_page()) { ?> Portfolio - <?php bloginfo('name'); } else { wp_title(''); ?> - <?php bloginfo('name'); } ?></title>
		
		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.php" type="text/css" media="screen" /> <!-- Link to theme css -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/pushy.css" type="text/css" media="screen" /> <!-- Link to pushy css -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/hover.css" rel="stylesheet" media="all"> <!-- Link to hover css -->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> <!-- Pingback -->
		
		<!-- other -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> <!-- jQuery -->
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> <!-- Font Awesome -->
				
		<!-- header hook -->
		<?php wp_head(); ?>
	</head>
	
	<body>
		   		
		<nav class="pushy pushy-left"> <!-- Pushy Menu -->
			<h1><span class="white" id="pushyGreeting">Hello!</span></h1>
			<ul>
				<?php wp_list_pages('sort_column=menu_order&title_li='); ?> <!-- List all WP pages in a list -->
			</ul>
			<?php $atts = array('unique_id' => 1 ); ?>
			<?php if(function_exists('ditty_news_ticker')) { ditty_news_ticker( 705, 'ditty-pushy', $atts ); } ?>
		</nav>
					
		<div class="site-overlay"></div> <!-- Site overlay when responsive menu is open -->
		
        <div id="headerLine"></div> <!-- Colored line at top of window -->

		<div id="container"> <!-- Container aka "wrapper" (needs to be named '#container' for pushy menu to work -->
		   	<div class="header">
				<div class="menu-btn">&#9776; Menu</div> <!-- Menu Button -->
				<p class="highlightColor" id="currentColor"><?php include_once 'color.php'; echo $currentColor; ?></p> <!-- Include color.php file in header.php to have access to the current color value -->
                <br class="clear">
			</div><!-- header -->