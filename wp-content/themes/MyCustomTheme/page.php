<?php

/*
Template for displaying all the page
*/

get_header();
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
</div>

<?php
get_footer();