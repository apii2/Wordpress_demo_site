<?php

/*
Template part for displaying the content of the page
*/

?>
<article id="post_<?php the_ID(); ?>">
  <header>
    <?php 
      //Page title
      the_title("<h1>","</h1>");
    ?>
  </header>
  <?php 
    //Page thumbnail
    if(has_post_thumbnail()): 
      the_post_thumbnail("full");
    endif; 
  ?>
  <p>
    <?php 
      //Page content
      the_content();

      //Pagination
      wp_link_pages(array(
        'before' => '<div class="page-links'. esc_html__('Pages:','mytheme'),
        'after' => '</div>',
      ));
    ?>
  </p>
</article>