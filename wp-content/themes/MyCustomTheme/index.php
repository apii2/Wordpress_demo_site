<?php

/*

*/

function dd($value){
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

get_header();
if(have_posts()):
  while(have_posts()):
    the_post();
    get_template_part("templates-parts/page/content");
  endwhile;
endif;
get_footer();