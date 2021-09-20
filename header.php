<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	<!-- Prints scripts or data in the head tag on the front end. -->
    <?php wp_head(); ?>

</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<!-- If you click on the logo "Labb 1" you will be send to the front-page -->
						<a class="logo" href="<?php bloginfo('url')?>">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<!-- Gets the search bar -->
						<?php get_search_form(); ?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
        
		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<!-- Gets the search bar -->
					<?php get_search_form(); ?>
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					
                            <?php 
								// Gets the menu from WP
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'top-menu',
                                        'container_class' => 'col-xs-12',
                                        'menu_class' => 'menu'
                                    )
                                );
                            ?>
						
				</div>
			</div>
		</nav>