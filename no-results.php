<?php
/**
 * Template for message if no search result was fund 
 *
 */
?>
 
<article id="post-0" class="post no-results not-found">
    <header class="entry-header">
        <h1 class="entry-title"><?php _e('Inga blogginlägg hittades..', 'shape');?></h1>
    </header>

    <!-- If there are no search results than it will show this error message -->
    <div class="entry-content">
        <?php if (is_search()): ?>
 
            <p><?php _e('Tyvärr kunde vi inte hitta något, försök gärna igen med andra sökord.', 'shape');?></p>
            <?php get_search_form();?>
 
        <?php endif;?>
    </div>
</article>