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

		<!-- favicon -->
		<link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon.ico" type="image/x-icon" />

		<!-- header hook -->
		<?php wp_head(); ?>
	</head>

	<body>

		<?php if(is_ie($version)) { ?>
			<!-- Execute JavaScript -->
               <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/outdatedBrowser.js"></script> <!-- only link to outdatedBrowser.js if browser is outdated -->

			<!-- Create new content -->
			<div id="outdatedBrowser_outerDiv">
				<div id="outdatedBrowser_middleDiv">
					<div id="outdatedBrowser_innerDiv">
						<h1>Whoops!</h1>
						<p>This website is not optimized for your browser.</p>
						<p>Please use/install one of the following browsers to view this site properly.</p>
						</br>
						<a href="https://www.google.ca/chrome/browser/desktop/index.html" target="new">Google Chrome</a>
						<a href="https://www.mozilla.org/en-US/firefox/new/" target="new">Mozilla Firefox</a>
						<a href="https://www.microsoft.com/en-ca/download/details.aspx?id=48126" target="new">Microsoft Edge</a>
					</div>
				</div>
			</div>
		<?php } ?>

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
				<div class="highlightColor" id="currentColor"><?php include_once 'color.php'; echo $currentColor; ?></div> <!-- Include color.php file in header.php to have access to the current color value -->
				<br class="clear">
			</div><!-- header -->
