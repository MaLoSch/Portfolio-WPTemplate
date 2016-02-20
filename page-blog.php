		<!-- This is the 'Archive' page -->
        <?php get_header(); ?> <!-- get header.php file -->
			
			<div id="sidebar_menu">
				<?php get_sidebar(); ?> <!-- get sidebar.php -->
			</div><!-- sidebar_menu -->
	 	  	
			<div class="main">
				<h1 class="highlightColor"><?php the_field('pagetagline'); ?></h1> <!-- get title of page -->
				<h2><?php echo get_post_meta($post->ID, 'PageIntro', true); ?></h2> <!-- get post meta data --> 
                
				<!-- Loop for fun portfolio -->
				<?php $temp_query = $wp_query; ?>
				<?php query_posts( array( 'post_type' => 'feed' ) ); ?>
 
 				<div class="projectPanel">
				<?php while (have_posts()) : the_post(); ?>
	            	<div class="featureProject">
						<div class="featureImg">
		                    <?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('full');
							} else { ?>
								<div class="featureImgBackup"></div>
							<?php } ?>
	                		<a href="<?php the_permalink() ?>">
                            	<div class="mask">
									<span><?php echo get_the_title(); ?></span>
								</div>
                            </a>
	                	</div>
					</div>
				<?php endwhile; ?>
				</div>
				
				<br class="clear">