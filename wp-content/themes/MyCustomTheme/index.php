<?php

function dd($value){
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}


get_header();

get_search_form();

if(have_posts()):
  while(have_posts()):
    the_post();
    get_template_part("templates-parts/post/content");
  endwhile;

  //Pagination of pages containing limited posts
  echo paginate_links( [
    'prev-text' => esc_html__('Prev','mytheme'),
    'next-text' => esc_html__('Next','mytheme')
  ] );
endif;

get_footer();