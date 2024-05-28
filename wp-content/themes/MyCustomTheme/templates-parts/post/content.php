<?php
/*
Template for displaying posts
*/
?>

<div class="col-lg-6">
  <article id="post_<?php the_ID(); ?>" class="d-flex flex-column">
    <div class="post-img">
    <?php 
      //Post thumbnail
      if(has_post_thumbnail()): 
        the_post_thumbnail("large");
      endif; 
    ?>
    </div>

    <?php
      //Post title
      if(is_singular()): 
        the_title("<h1>","</h1>");
      else : 
        the_title("<h2 class='title'><a href='" . esc_url(get_permalink()) . "'>" , "</a></h2>"); 
      endif;
    ?>
    
    <div class="content">
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
    </div>

    <div class="read-more mt-auto align-self-end">
      <?php
      printf(
        "<a href='%s'>Read More</a>",
        esc_url(get_permalink())
      );
      ?>
    </div>
  </article>
</div>