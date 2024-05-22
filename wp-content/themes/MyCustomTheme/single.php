<?php

/*
Single page template
*/
get_header();
?>

<div class="content-area">
  <main class="site-main">
    <?php
      if(have_posts()):
        while(have_posts()):
          the_post();
          get_template_part("templates-parts/post/content");
        endwhile;
      endif;

      // If the comments are open we can show the comments template
      if(comments_open() || get_comments_number()):
        comments_template();
      endif;
    ?>
  </main>
</div>

<?php
get_footer();