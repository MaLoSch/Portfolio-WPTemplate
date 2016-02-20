<h1><span class="highlightColor" id="sidebarGreeting">Hello!</span></h1>

<ul>
	<?php wp_list_pages('sort_column=menu_order&title_li='); ?> <!-- List all WP pages in a list -->
</ul>

<?php $atts = array('unique_id' => 2 ); ?>
<?php if(function_exists('ditty_news_ticker')) { ditty_news_ticker( 705, 'ditty-sidebar', $atts ); } ?>