
<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
					<?php dynamic_sidebar('footer-left-widget'); ?> 	
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<?php dynamic_sidebar('footer-center-widget'); ?> 
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<h4>Social media</h4>
					
					<?php 
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
						<p>Copyright &copy; <?php echo bloginfo('name') ?> <?php echo date('Y') ?></p>
					</div>
				</div>
			</div>
		</footer>
	</div>
    <?php wp_footer(); ?>
</body>
</html>
