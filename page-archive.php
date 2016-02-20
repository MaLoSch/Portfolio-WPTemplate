		<!-- This is the 'Archive' page -->
        <?php get_header(); ?> <!-- get header.php file -->
			
			<div id="sidebar_menu">
				<?php get_sidebar(); ?> <!-- get sidebar.php -->
			</div><!-- sidebar_menu -->
	 	  	
			<div class="main">
				<h1 class="highlightColor"><?php the_field('pagetagline'); ?></h1> <!-- get title of page -->
				<h2><?php echo get_post_meta($post->ID, 'PageIntro', true); ?></h2> <!-- get post meta data --> 
                <?php foreach(posts_by_year() as $year => $posts) : ?>
                    <h3 class="highlightColor"><?php echo $year; ?></h3>
					<div class="projectPanel">
                    <?php foreach($posts as $post) : setup_postdata($post); ?>
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
							<a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a>
						</div>
                    <?php endforeach; ?>
					</div>
                    <br class="clear" />
				<?php endforeach; ?>
                <?php get_footer(); ?> <!-- get footer.php file -->