		<!-- This is the 'Archive' page -->
        <?php get_header(); ?> <!-- get header.php file -->
			
			<div id="sidebar_menu">
				<?php get_sidebar(); ?> <!-- get sidebar.php -->
			</div><!-- sidebar_menu -->
	 	  	
			<div class="main">
				<?php $current_cat = single_cat_title(); ?>
				<h1 class="highlightColor"><?php $current_cat ?></h1> <!-- get title of page -->
				<!--<h1 class="highlightColor"><?php the_field('pagetagline'); ?></h1>  get title of page <p><?php single_cat_title('Currently browsing '); ?>.</p>-->
				<h2><?php echo get_post_meta($post->ID, 'PageIntro', true); ?></h2> <!-- get post meta data -->
				<ul class="categories_ul">
					<?php wp_list_categories( array(
        				'orderby' => 'name',
						'title_li' => '', // don't show a title over the category links
						'exclude' => array(19) // exclude 'portfolio' from categories (since I have a separate page for them)
				    ) ); ?> 
				</ul> 
                <?php foreach(posts_by_year() as $year => $posts) : ?>
					<?php if(is_category()) { ?>
						<h3 class="highlightColor"><?php echo $year; ?></h3>
						<div class="projectPanel">
                    	<?php foreach($posts as $post) : setup_postdata($post); ?>
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
							</div>
                    	<?php endforeach; ?>
						</div>
                    	<br class="clear" />
					<?php } ?>
				<?php endforeach; ?>
                <?php get_footer(); ?> <!-- get footer.php file -->