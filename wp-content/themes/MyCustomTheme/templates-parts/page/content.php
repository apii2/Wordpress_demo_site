<?php
/*
Template for displaying posts
*/
?>

<article id="post_<?php the_ID(); ?>">
  <header><?php the_title("<h1><a href='".esc_url(get_permalink())."'>","</a></h1>"); ?></header>
  <?php if(has_post_thumbnail()): ?>
    <?php the_post_thumbnail("large"); ?>
  <?php endif; ?>
  <p><?php the_excerpt(); ?></p>
</article>