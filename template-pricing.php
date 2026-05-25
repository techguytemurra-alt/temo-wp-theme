<?php
/*
Template Name: Pricing Page
*/
get_header(); ?>

<div class="pricing-page-wrapper">
    <div class="pricing-page-container">
        <h1 class="pricing-page-title">ფასები და პაკეტები</h1>
        
        <div class="pricing-list-vertical">
            
            <?php
            $pricing_query = new WP_Query(array(
                'post_type' => 'pricing_packages',
                'posts_per_page' => -1,
                'order' => 'ASC'
            ));

            if ( $pricing_query->have_posts() ) :
                while ( $pricing_query->have_posts() ) : $pricing_query->the_post(); ?>
                    
                    <div class="pricing-long-card">
                        <div class="pricing-card-image">
                            <span class="pricing-icon-placeholder">
                                <?php 
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('thumbnail');
                                } else {
                                    echo '💰'; 
                                }
                                ?>
                            </span>
                        </div>
                        <div class="pricing-card-info">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            
                            <?php if ( has_excerpt() ) : ?>
                                <strong class="pricing-price-tag">ფასი: <?php echo get_the_excerpt(); ?></strong>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p style="color:white; text-align:center;">ჯერჯერობით ფასები და პაკეტები არ არის დამატებული.</p>';
            endif;
            ?>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>