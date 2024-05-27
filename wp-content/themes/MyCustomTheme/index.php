<?php

/*
The main template file
*/

get_header();
?>

<div>
  <main id="main">

    <!-- Page title -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blogs</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blogs</li>
          </ol>
        </div>

      </div>
    </div>

    <!-- Blog Section -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">

                
                <?php 
                  if(have_posts()):
                    while(have_posts()):
                      the_post();

                      // echo '<div class="col-lg-6">';
                      // echo '<article class="d-flex flex-column">';

                      get_template_part("templates-parts/post/content", get_post_format());

                      // echo '</article>';
                      // echo '</div>';
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
                
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Sidebar -->
  <?php get_sidebar(); ?> 
  
</div>

<?php
get_footer();