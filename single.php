<?php
    get_header();
?>
<main>
<section>
<div class="container">
<?php if (have_posts()):
    while (have_posts()): the_post();
        ?>
                                    <div id="primary" class="col-xs-12 col-md-9">
                                    <article>
                                    <?php if(has_post_thumbnail()) : ?>
                                                                     <a href="<?php the_permalink();?>">   
                                                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" />
                                                                    </a>
                                                                    <?php endif; ?>
                                                                    <a href="<?php the_permalink();?>"> 
                                                                    <h1 class="title"><?php the_title();?></h1>
                                                                    </a>
                                        <ul class="meta">
                                            <li>
                                                <i class="fa fa-calendar"></i><?php the_date();?>
                                            </li>
                                            <li>
                                                <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                                            </li>
                                            <li>
                                                <i class="fa fa-tag"></i><?php the_category(" ,");?>
                                            </li>
                                        </ul><p><?php the_content();?></p>
                                    </article>
                                </div>
                            <?php
    endwhile;
else:
    _e('Inga blogginlägg tillgängliga', 'textdomain');
endif;
?>
</section>
</main>
<?php 
    get_footer();
?>