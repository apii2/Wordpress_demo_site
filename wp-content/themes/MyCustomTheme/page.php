<?php

/*
Template for displaying all the page
*/

get_header();
get_post_format();

?>

<div>
  <main>
    <?php
    
      if(have_posts()):
        while(have_posts()):
          the_post();
          get_template_part("templates-parts/page/content","page");
        endwhile;
      endif;

    ?>
  </main>
  <?php get_sidebar(); ?>
</div>

<?php
get_footer();