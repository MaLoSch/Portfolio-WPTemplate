		<!-- This is the 'Archive' page -->
        <?php get_header(); ?> <!-- get header.php file -->

			<div id="sidebar_menu">
				<?php get_sidebar(); ?> <!-- get sidebar.php -->
			</div><!-- sidebar_menu -->

			<div class="main">
				<h1 class="highlightColor"><?php the_field('pagetagline'); ?></h1> <!-- get title of page -->
				<h2><?php echo get_post_meta($post->ID, 'PageIntro', true); ?></h2> <!-- get post meta data -->
				<ul class="categories_ul">
					<?php wp_list_categories( array(
        				'orderby' => 'name',
						'title_li' => '', // don't show a title over the category links
						'exclude' => array(40) // exclude 'portfolio' from categories (since I have a separate page for them)
				    ) ); ?>
				</ul>
                <?php foreach(posts_by_year() as $year => $posts) : ?>
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
                                             <span><?php echo get_the_title(); ?></span> <!-- get title of page -->
     							</div>
                            	     </a>
                		     </div>
                              <?php if (has_tag('Ongoing')) { ?>
                                   <a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a> (ongoing) <!-- get title of page -->
                              <?php } else { ?>
                                   <a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a> <!-- get title of page -->
                              <?php } ?>
                              <p class="categories_archive">
							<?php exclude_post_categories_archive("40", ", "); ?> <!-- list all categories but exclude cat 19 (Portfolio). See functions.php for more info or visit http://wordpress.stackexchange.com/questions/31181/exclude-categories-from-the-category -->
						</p>
					</div>
                    <?php endforeach; ?>
					</div>
                    <br class="clear" />
				<?php endforeach; ?>
                <?php get_footer(); ?> <!-- get footer.php file -->
