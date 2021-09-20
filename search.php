<?php
/**
 * All search results are displayed here.
 *
 */
 
get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
 
            <?php if ( have_posts() ) : ?>
                
                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header>
 
                
 
                
                <?php while ( have_posts() ) : the_post(); ?>
                    <!-- Gets the template from content-page.php and shows the loop -->
                    <?php get_template_part( 'content-page', 'search' ); ?>
 
                <?php endwhile; ?>
 
                
 
            <?php else : ?>
                <!-- Gets the template from no-results.php if there are no search results -->
                <?php get_template_part( 'no-results', 'search' ); ?>
 
            <?php endif; ?>
 
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>