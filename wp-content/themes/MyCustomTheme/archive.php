<?php

/*
Template for displaying archive page
*/

get_header();
?>

<div>
  <main>
    <?php
      if(have_posts()):
        
        //Archive title
        the_archive_title("<h1>","</h1>");
        the_archive_description("<div>","</div>");
        
        //Display posts
        while(have_posts()):
          the_post();
          get_template_part("templates-parts/post/content", get_post_format());
        endwhile;
        
        //Pagination of pages containing limited posts
        echo paginate_links( [
          'prev-text' => esc_html__('Prev','mytheme'),
          'next-text' => esc_html__('Next','mytheme')
        ] );

      else:
        get_template_part('templates-parts/page/content','none');
      endif;
    ?>
  </main>

  <?php get_sidebar(); ?> 

</div>

<?php
get_footer();