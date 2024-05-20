<?php

/*
Template for displaying 404 pages(not found)
*/

get_header();
?>

<div>
  <main>
    <h1><?php esc_html_e("Oops! The page can't be found."); ?></h1>
    <div><?php esc_html_e("It looks like nothing was found in this location. Perhaps searching might help.") ?></div>
    <?php get_search_form(); ?>
  </main>
</div>

<?php
get_footer();