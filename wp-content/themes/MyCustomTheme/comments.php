<?php

/*
Template for displaying comments
*/

get_header();
?>

<div>
  <main>
    <h3>
      <?php
        //Comment title also showing the number of comments
        if(have_comments()):
          $comments_count = get_comments_number();
          if($comments_count):
            printf(
              esc_html__('Comments (%d)','mytheme'), $comments_count
            );
          endif;
        else:
          //If there are no comments
          printf(
            esc_html__('No comments. Would you like to be the first one?')
          );
        endif;
      ?>
    </h3>

    <ol>
      <?php
        //Display comments
        wp_list_comments();
      ?>
    </ol>
    
    <?php 
      //show comment form
      comment_form();
    ?>
  </main>
</div>

<?php
get_footer();