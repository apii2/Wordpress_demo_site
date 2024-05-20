<?php

/*
Template for displaying search page
*/

get_header();
?>

<div>
  <main>
    <?php
      if(have_posts()):

        //Display posts
        while(have_posts()):
          the_post();
          get_template_part("templates-parts/page/content","search");
        endwhile;
        
        //Pagination of pages containing limited posts
        echo paginate_links( [
          'prev-text' => esc_html__('Prev','mytheme'),
          'next-text' => esc_html__('Next','mytheme')
        ] );

      else:
        //If the search has no result
        get_template_part('templates-parts/page/content','none');
      endif;
    ?>
  </main>
</div>

<?php
get_footer();