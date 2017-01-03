		<!-- This is for the single projects / posts -->
		
		<?php get_header(); ?> <!-- get header.php file -->
        
        	<div id="sidebar_menu">
				<?php get_sidebar(); ?> <!-- get sidebar.php -->
			</div><!-- sidebar_menu -->
            
            <div class="main">
				<h1 class="highlightColor"><?php echo get_the_title(); ?></h1> <!-- get title of page -->

      			<!-- Start the loop -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                	<?php the_post_thumbnail('full'); ?> <!-- display the full size feature image of the current post -->
	                <div class="project_description">
						<p class="highlightColor bold">Project Description</p>
						<p><?php the_field('project_description'); ?></p> <!-- accessing advanced custom field data - see: http://www.advancedcustomfields.com/ for more info -->
						<br/>
						<p class="highlightColor bold">Year</p>
						<p><?php the_date('Y'); ?></p>
						<br/>
						<p class="highlightColor bold">Categories</p>
						<ul class="categories_ul">
							<?php the_category(); ?> 
						</ul>
					</div>
					<?php the_content(); ?> <!-- display the content of the current post -->
      			<?php endwhile; endif; ?>
                <!-- End the loop -->
                <br class="clear" /> <!-- remove all floats -->
				<?php get_footer(); ?>