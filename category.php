		<!-- This is the 'Category' page -->
        <?php get_header(); ?> <!-- get header.php file -->

			<div id="sidebar_menu"> <!-- div containing the sidebar -->
				<?php get_sidebar(); ?> <!-- get sidebar.php -->
			</div><!-- sidebar_menu -->

			<div class="main"> <!-- div containing the main bulk of the site -->
				<h1 class="highlightColor">This is the archive.</h1> <!-- get title of page -->
				<h2>Like any good archive the archivist is on the never ending quest to find, document, and classify all projects with the ultimate goal of a complete collection... Showing projects in category: <span class="highlightColor"><?php single_cat_title(); ?></span>.</h2> <!-- blurp beneath the page title -->
				<ul class="categories_ul"> <!-- list all categories of this WordPress site -->
					<?php wp_list_categories( array( // create array of categories
        				'orderby' => 'name', // order categories by name
						'title_li' => '', // don't show a title over the category links
						'exclude' => array(40) // exclude 'portfolio' from categories (since I have a separate page for them)
				    ) ); ?>
				</ul>

				<!-- <?php if ( have_posts() ) : ?> <!-- If posts are availble, do the following... -->
					<h3 class="highlightColor"><?php single_cat_title(); ?></h3> <!-- Show selected category over the single entries -->

					<?php
						if ( have_posts() ):
							while ( have_posts() ):
								the_post();
					?> <!-- WordPress loop -->

						<div class="projectPanel"> <!-- div usually contains a single project but is here used to have the right width for the single project links -->
							<div class="featureProject"> <!-- a single post link (image, title, and excerpt (if available) -->
								<div class="featureImg"> <!-- div containing post featured image -->
     		                    		<?php if ( has_post_thumbnail() ) { // if there is a thumbnail
     										the_post_thumbnail('thumbnail'); // take the thumbnail
     									} else { ?> <!-- if there is no thumbnail -->
     										<div class="featureImgBackup"></div> <!-- create a div -->
     								<?php } ?>
     	                				<a href="<?php the_permalink() ?>"> <!-- link to the posts -->
                                 			     <div class="mask"> <!-- mask for image on mouseOver -->
     									     <span><?php echo get_the_title(); ?></span> <!-- display title of post on mouse over -->
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
						</div>

					<?php
							endwhile;
						endif;
					?>
				<!-- <?php endif; ?> -->

                <?php get_footer(); ?> <!-- get footer.php file -->
