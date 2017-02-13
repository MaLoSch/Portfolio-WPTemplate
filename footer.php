                <div id="footer">
                    <p>Copyright &copy; 2015 - <?php echo date('Y'); ?> malosch.com | Hosted by <a href="https://www.greengeeks.com/going-green/" target="blank">Greengeeks</a> 300% Green Web Hosting by Renewable Energy | Developed with <a href="https://www.wordpress.org" target="blank">WordPress</a></p>
				</div> <!-- footer -->
            </div><!-- main -->
		</div> <!-- container -->

		<!-- Back to top button -->
		<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

		<!-- Google Analytics -->
		<?php include_once("analyticstracking.php") ?>

 		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/pushy.min.js"></script> <!-- link to pushy.js file -->
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/JSStuff.js"></script> <!-- link to JSStuff.js file -->

		<?php wp_footer(); ?> <!-- Necessary wp footer hook -->

	</body>
</html>
