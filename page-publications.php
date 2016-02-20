		<?php get_header(); ?> <!-- get header.php file -->
			
			<div id="sidebar_menu">
				<?php get_sidebar(); ?> <!-- get sidebar.php -->
			</div><!-- sidebar_menu -->
	 	  	
			<div class="main">
				<h1 class="highlightColor"><?php the_field('pagetagline'); ?></h1> <!-- get title of page -->
				<h2><?php echo get_post_meta($post->ID, 'PageIntro', true); ?></h2> <!-- get post meta data -->
                
                <!-- Start the loop -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                	<?php the_content(); ?>
                <?php endwhile; else : ?>
                <?php endif; ?>
                <!-- End the loop -->
                
                <?php get_footer(); ?> <!-- get footer.php file -->