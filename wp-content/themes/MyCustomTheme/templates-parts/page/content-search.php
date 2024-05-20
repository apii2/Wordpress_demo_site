<?php
/*
Template part for displaying the search results
*/
?>

<article id="post_<?php the_ID(); ?>">
  <header>
    <?php 
      //Page title
      the_title("<h1>","</h1>");
    ?>
  </header>
  <p>
    <?php 
      //Page excerpt
      the_excerpt();

      //link to post content
      printf('<a href="' . esc_url(get_permalink()) . '">Read more</a>');
    ?>
  </p>
</article>