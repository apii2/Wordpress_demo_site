<?php
/*
Template for displaying posts
*/
?>

<article id="post_<?php the_ID(); ?>">
  <header>
    <?php 
      //Post title
      if(is_singular()): 
        the_title("<h1>","</h1>");
      else : 
        the_title("<h1><a href='" . esc_url(get_permalink()) . "'>" , "</a></h1>"); 
      endif;
    ?>
  </header>

  <?php 
    //Post thumbnail
    if(has_post_thumbnail()): 
      the_post_thumbnail("large");
    endif; 
  ?>
  
  <p>
    <?php 
      //Post content
      if( is_home() || is_archive()):
        the_excerpt(); 
      elseif(is_single()):
        the_content();

        //Pagination
        wp_link_pages([
          'before' => "<div>" . esc_html__('Pages:','mytheme'),
          'after' => "</div>"
        ]);
      endif;
    ?>
  </p>
</article>