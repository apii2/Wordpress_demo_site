<?php

/*
Template for displaying the page that has no content
*/

?>

<div>
  <h1><?php esc_html_e('Content Not Found','mytheme'); ?></h1>

  <?php
    //If it is home page, it directs the user to create a new post
    if(is_home() && current_user_can('publish_posts')):
      printf(
        '<p>'. wp_kses(
          __('Ready to publish your first post? <a href="%1$s">Get started here.</a>','mytheme'),
          array(
            'a' => array(
              'href' => array()
            )
          )
        ).'</p>',
        esc_url(admin_url('sidebar.php'))
      );

    //for search query
    elseif(is_search()):
  ?>
      <p><?php esc_html_e('Sorry, nothing matched your search keys. Please try again with different keywords.','mytheme'); ?></p>
      <?php get_search_form();

    //for other page
    else:
      ?>
      <p><?php esc_html_e("It seems we can't find what you're looking for. Perhaps searching might help.",'mytheme'); ?></p>
      <?php get_search_form();
    endif;
  ?>
</div>
