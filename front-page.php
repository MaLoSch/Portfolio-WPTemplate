		<!-- This is the 'Portfolio' page -->
		<?php get_header(); ?> <!-- get header.php file -->
			
			<div id="sidebar_menu">
				<?php get_sidebar(); ?> <!-- get sidebar.php -->
			</div><!-- sidebar_menu -->
	 	  	
			<div class="main">
				<h1 class="highlightColor"><?php the_field('pagetagline'); ?></h1> <!-- get title of page -->
				<h2 ><?php echo get_post_meta($post->ID, 'PageIntro', true); ?></h2> <!-- get post meta data -->             
                
				<h3 class="highlightColor">Design</h3>                
                <!-- Loop for design portfolio -->
				<?php $temp_query = $wp_query; ?>
				<?php query_posts(array('category__and' => array(19,17))); ?> <!-- 17 = Design, 19 = Portfolio -->
 				
				<div class="projectPanel">
				<?php while (have_posts()) : the_post(); ?>
	            	<div class="featureProject">
						<div class="featureImg">
		                    <?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('thumbnail');
							} else { ?>
								<div class="featureImgBackup"></div>
							<?php } ?>
	                		<a href="<?php the_permalink() ?>">
                            	<div class="mask">
									<span><?php echo get_the_title(); ?></span>
								</div>
                            </a>
	                	</div>
						<a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a>
						<p class="excerpt"><?php echo(get_the_excerpt()); ?></p>
					</div>
				<?php endwhile; ?>
				</div>
                
                <br class="clear">
                
				<h3 class="highlightColor">Research</h3>
                <!-- Loop for research portfolio -->
				<?php $temp_query = $wp_query; ?>
				<?php query_posts(array('category__and' => array(19,18))); ?> <!-- 18 = Research, 19 = Portfolio -->
 
 				<div class="projectPanel">
				<?php while (have_posts()) : the_post(); ?>
	            	<div class="featureProject">
						<div class="featureImg">
		                    <?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('thumbnail');
							} else { ?>
								<div class="featureImgBackup"></div>
							<?php } ?>
	                		<a href="<?php the_permalink() ?>">
                            	<div class="mask">
									<span><?php echo get_the_title(); ?></span>
								</div>
                            </a>
	                	</div>
						<a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a>
						<p class="excerpt"><?php echo(get_the_excerpt()); ?></p>
					</div>
				<?php endwhile; ?>
				</div>
				
				<br class="clear">
				
				<h3 class="highlightColor">Teaching</h3>
				<!-- Loop for fun portfolio -->
				<?php $temp_query = $wp_query; ?>
				<?php query_posts(array('category__and' => array(19,21))); ?> <!-- 21 = Teaching, 19 = Portfolio -->
 
 				<div class="projectPanel">
				<?php while (have_posts()) : the_post(); ?>
	            	<div class="featureProject">
						<div class="featureImg">
		                    <?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('thumbnail');
							} else { ?>
								<div class="featureImgBackup"></div>
							<?php } ?>
	                		<a href="<?php the_permalink() ?>">
                            	<div class="mask">
									<span><?php echo get_the_title(); ?></span>
								</div>
                            </a>
	                	</div>
						<a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a>
						<p class="excerpt"><?php echo(get_the_excerpt()); ?></p>
					</div>
				<?php endwhile; ?>
				</div>
				
				<br class="clear">
				
                <h3 class="highlightColor">Fun</h3>
				<!-- Loop for fun portfolio -->
				<?php $temp_query = $wp_query; ?>
				<?php query_posts(array('category__and' => array(19,20))); ?> <!-- 20 = Fun, 19 = Portfolio -->
 
 				<div class="projectPanel">
				<?php while (have_posts()) : the_post(); ?>
	            	<div class="featureProject">
						<div class="featureImg">
		                    <?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('thumbnail');
							} else { ?>
								<div class="featureImgBackup"></div>
							<?php } ?>
	                		<a href="<?php the_permalink() ?>">
                            	<div class="mask">
									<span><?php echo get_the_title(); ?></span>
								</div>
                            </a>
	                	</div>
						<a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a>
						<p class="excerpt"><?php echo(get_the_excerpt()); ?></p>
					</div>
				<?php endwhile; ?>
				</div>
				
				<br class="clear">
				
                <?php get_footer(); ?> <!-- get footer.php file -->