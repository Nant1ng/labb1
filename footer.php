
<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<!-- Gets widget from WP -->
					<?php dynamic_sidebar('footer-left-widget'); ?> 	
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<!-- Gets widget from WP -->
					<?php dynamic_sidebar('footer-center-widget'); ?> 
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<h4>Social media</h4>
					<?php
								// Gets the menu from WP, in the admin panel you can see i used a plugin so i can get the socials ikons in the menu.  
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'socials',
										'container' => 'ul',
										'menu_class' => 'social'
                                    )
                                );
                            ?>
							
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
										<!-- Gets the name of the blog      	Display the Year when the blog(first user) was created -->
						<p>Copyright &copy; <?php echo bloginfo('name') ?> <?php echo mysql2date('Y', get_user_option('user_registered', 1) ); ?></p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- Prints scripts or data before the closing body tag on the front end. -->
    <?php wp_footer(); ?>
</body>
</html>
