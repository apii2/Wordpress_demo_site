<?php

/*
Template for displaying archive page
*/

get_header();
?>

<div>
  <main>
    <?php
      //Archive title
      if(have_posts()):
        the_archive_title("<h1>","</h1>");
        the_archive_description("<div>","</div>");
        
        //Display posts
        while(have_posts()):
          the_post();
          get_template_part("templates-parts/post/content");
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
</div>

<?php
get_footer();