<?php 
// Load header template.
    get_header() 

?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary"class="col-xs-12 col-md-9">
                    <h1>Blogg</h1>
                        <!-- Gets all posts and its data -->
                        <?php if (have_posts()):
                            while (have_posts()): the_post();
                        ?>
                                                                                        
                        <article>
                            <!-- If post have image show image if not dont show image(broken image) -->
                            <?php if(has_post_thumbnail()) : ?>
                                <!-- If you click on the image than you will go to its post  -->
                                <a href="<?php the_permalink();?>">   
                                    <!-- Gets the Image  -->
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" />
                                </a>
                            <?php endif; ?>
                            <!-- If you click on the title than you will go to its post  -->
                            <a href="<?php the_permalink();?>"> 
                                                    <!-- Gets the title -->
                                <h1 class="title"><?php the_title();?></h1>
                            </a>
                            <ul class="meta">
                                <li>
                                                            <!-- Get the date when the post was created -->
                                    <i class="fa fa-calendar"></i><?php the_date();?>
                                </li>
                                <li>
                                                <!-- If you click on the author name than you will be send to a page where only the authors posts are  -->
                                    <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                                </li>                                                                 
                                <li>
                                                                                     <!-- Shows the post category-->
                                    <i class="fa fa-tag"></i> <a href="kategori.html"><?php the_category(" , ");?></a>
                                </li>
                            </ul>
                            <p>
                                <!-- Show the excrept of the post  -->
                                <?php the_excerpt();?>
                            </p>
                                                                                    
                        </article>
                                                                                
                        <?php
                        endwhile; else: _e('Inga blogginlägg tillgängliga', 'textdomain'); endif;
                        ?>
                        
                        <div class="navigation pagination">
                            <!-- Pagination -->
                            <?php
                                global $wp_query;
                                $big = 999999999; 
                                echo paginate_links(array(
                                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                    'format' => '?paged=%#%',
                                    'current' => max(1, get_query_var('paged')),
                                    'total' => $wp_query->max_num_pages,
                                ));
                            ?>
                        </div>
                        </div>
                        <aside id="secondary"class="col-xs-12 col-md-3">
                        <div id="sidebar">
                        <ul>
                        <li>
                        <!-- Gets the search bar -->
                        <?php get_search_form(); ?>
                        </li>
                        </ul>
                        <ul role="navigation">
                        <li class="pagenav">
                        <h2>Sidor</h2>

                        <?php
                        // Gets the menu from WP
                        wp_nav_menu(
                            array(
                                'container' => false,
                                'theme_location' => 'custom_pages'
                            )
                        );
                        ?>

                        </li>
                        <li>
                        <h2>Arkiv</h2>
                        <?php
                        // Gets the menu from WP
                        wp_nav_menu(
                            array(
                                'theme_location' => 'archive',
                                'container' => false   
                            )
                        );
                        ?>
                        </li>
                        <li class="categories">
                        <h2>Kategorier</h2>


                        <?php
                        // Gets the menu from WP
                        wp_nav_menu(
                            array(
                                'theme_location' => 'category',
                                'container' => false
                            )
                        );
                        ?>

                        </li>
                        </ul>
                        </div>
                    </aside>
                </div>
            </div>
    </section>
</main>
<!-- Load footer template. -->
<?php get_footer(); ?>