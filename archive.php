<?php 
	get_header();

?>
<main>
<section>
<div class="container">
<?php if (have_posts()):
    while (have_posts()): the_post();
        ?>
                                    <div id="primary" class="col-xs-12 col-md-9">¨
										<h1> <?php the_author();?> </h1>
                                    <article>
                                    <?php if(has_post_thumbnail()) : ?>
                                                                     <a href="<?php the_permalink();?>">   
                                                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" />
                                                                    </a>
                                                                    <?php endif; ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <h1 class="title"><?php the_title();?></h1>
                                        </a>
                                        <ul class="meta">
                                            <li>
                                                <i class="fa fa-calendar"></i><?php the_date();?>
                                            </li>
                                            <li>
                                                <i class="fa fa-user"></i> <a href=""><?php the_author();?></a>
                                            </li>
                                            <li>
                                                <i class="fa fa-tag"></i><?php the_category(" ,");?>
                                            </li>
                                        </ul><p><?php the_excerpt();?></p>
                                    </article>
                                </div>
                            <?php
    endwhile;
else:
    _e('Inga blogginlägg tillgängliga', 'textdomain');
endif;
?>
<div class="pagination">
                    <?php
                        global $wp_query;
 
                        $big = 999999999; // need an unlikely integer
 
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages
                        ) );
                    ?>
                </div> 
</div>
</section>
</main>
<?php get_footer();?>