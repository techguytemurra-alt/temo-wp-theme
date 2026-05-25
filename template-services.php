<?php
/*
Template Name: Services List
*/
get_header(); ?>

<div class="services-page-wrapper">
  <div class="services-page-container">
    <h1 class="page-title">ჩემი სერვისები</h1>
    
    <div class="services-list-vertical">
      
      <?php
      // ვიძახებთ სპეციალურ ციკლს მხოლოდ სერვისების პოსტებისთვის
      $services_query = new WP_Query(array(
          'post_type' => 'services',
          'posts_per_page' => -1, // -1 ნიშნავს, რომ ყველა გამოიტანოს, რაც კი არსებობს
          'order' => 'ASC'        // დაალაგოს დამატების მიხედვით
      ));

      if ( $services_query->have_posts() ) :
          while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
              
              <div class="service-long-card">
                <div class="service-card-image">
                  <span class="service-icon-placeholder">
                    <?php 
                    // თუ პოსტს აქვს "Featured Image", გამოიტანს მას, თუ არა - დეფაულტ იკონკას
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('thumbnail');
                    } else {
                        echo '🖥️'; 
                    }
                    ?>
                  </span>
                </div>
                <div class="service-card-info">
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>
                </div>
              </div>

          <?php endwhile;
          wp_reset_postdata();
      else :
          echo '<p style="color:white; text-align:center;">ჯერჯერობით სერვისები არ არის დამატებული.</p>';
      endif;
      ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>