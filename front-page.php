		<!-- This is the 'Portfolio' page -->
		<?php 
			get_header(); // get header.php file
		?>
			
			<div id="sidebar_menu"> <!-- create div for sidebar -->
				<?php 
					get_sidebar(); // get sidebar.php
				?>
			</div><!-- sidebar_menu -->
	 	  	
			<div class="main"> <!-- create div for main bulk of page -->
				<h1 class="highlightColor"><?php the_field('pagetagline'); ?></h1> <!-- get title of page (portfolio) -->
				<h2 ><?php echo get_post_meta($post->ID, 'PageIntro', true); ?></h2> <!-- get post meta data -->             
                
				<h3 class="highlightColor">Portfolio</h3>
                <!-- Custom WP Query -->
				<?php
					query_posts(array( // Create a custom WP query
						'category_name' => 'Portfolio', // look for posts in the category 'Portfolio'
						'posts_per_page' => '-1' // display all posts (-1)					
					)); 
				?>
 				<?php 
					if(have_posts()):
						while (have_posts()):
							the_post();
				?>
						<div class="projectPanel">
		            		<div class="featureProject">
								<div class="featureImg">
			                    	<?php 
										if ( has_post_thumbnail() ) {
											the_post_thumbnail('thumbnail');
										} else { 
									?>
										<div class="featureImgBackup"></div>
									<?php 
										}
									?>
		                			<a href="<?php the_permalink() ?>">
	                            		<div class="mask">
											<span><?php echo get_the_title(); ?></span>
										</div>
	                            	</a>
		                		</div>
								<a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a>
								<p class="excerpt"><?php echo(get_the_excerpt()); ?></p>
							</div>
						</div>
				<?php
						endwhile;
					endif;
				?>
				
                <?php
					get_footer(); // get footer.php file
				?>