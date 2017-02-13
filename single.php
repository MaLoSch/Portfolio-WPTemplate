		<!-- This is for the single projects / posts -->

		<?php get_header(); ?> <!-- get header.php file -->

        	<div id="sidebar_menu">
				<?php get_sidebar(); ?> <!-- get sidebar.php -->
			</div><!-- sidebar_menu -->

            <div class="main">
			  	<?php if (has_tag('WIP')) { ?>
					<h1 class="highlightColor"><?php echo get_the_title(); ?> (Work in Progress)</h1> <!-- get title of page -->
				<?php } else { ?>
					<h1 class="highlightColor"><?php echo get_the_title(); ?></h1> <!-- get title of page -->
				<?php } ?>

      			<!-- Start the loop -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                	<?php the_post_thumbnail('full'); ?> <!-- display the full size feature image of the current post -->
	                <div class="project_description">
						<p class="highlightColor">Project Description</p>
						<p><?php the_field('project_description'); ?></p> <!-- accessing advanced custom field data - see: http://www.advancedcustomfields.com/ for more info -->
						<br/>
						<p class="highlightColor">Year</p>
						<?php if (has_tag('WIP')) { ?>
							<p>Work in Progress</p> <!-- display Work in Progress -->
						<?php } else { ?>
							<p><?php the_date('Y'); ?></p> <!-- Display year when project ended -->
						<?php } ?>
						<br/>
						<p class="highlightColor">Categories</p>
						<ul class="categories_ul">
							<?php exclude_post_categories("19"); ?> <!-- list all categories but exclude cat 19 (Portfolio). See functions.php for more info or visit http://wordpress.stackexchange.com/questions/31181/exclude-categories-from-the-category -->
						</ul>
					</div>
					<?php the_content(); ?> <!-- display the content of the current post -->
      			<?php endwhile; endif; ?>
                <!-- End the loop -->
                <br class="clear" /> <!-- remove all floats -->
				<?php get_footer(); ?>
