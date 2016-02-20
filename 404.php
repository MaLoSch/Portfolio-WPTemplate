		<?php get_header(); ?> <!-- get header.php file -->
			
			<div id="sidebar_menu">
				<?php get_sidebar(); ?> <!-- get sidebar.php -->
			</div><!-- sidebar_menu -->
	 	  	
			<div class="main">
				<h1 class="highlightColor">Uh-oh... (aka 404 error)</h1> <!-- get title of page -->
				<h2>Isn't that the worst? Looking for something that isn't there? Hate that... But here, look at these quotes from Douglas Adams. That'll make you feel better. You're welcome. </h2> <!-- get post meta data -->
                
                <!-- Douglas Adams quotes -->
				<div id="DouglasAdams">
					<p id="loadedQuote"></p>
					<p class="highlightColor">Douglas Adams</p>
					<br class="clear"/>
					<p class="reload hvr-icon-rotate"></p>
				</div>
                <!-- Douglas Adams quotes -->
                
                <?php get_footer(); ?> <!-- get footer.php file -->