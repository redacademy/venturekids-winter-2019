<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package daria-day
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
    <div class="page-banner">
      
    
    <div class="page-banner" ></div>  

            <h1 class="page-banner__title">Events</h1>
        </div>  
    </div>
        <h1>Current/Upcoming Events</h1>
			  <div class="full-width-split group">
              <div class="full-width-split__one">
                <div class="full-width-split__inner">
                  <!-- <h2 class="headline headline--small-plus t-center">Upcoming Events</h2> -->
                  <?php 
                    $today = date('Ymd');
                    $homepageEvents = new WP_Query(array(
                      'posts_per_page' => -1, //-1 will return all posts that meet following reqs
                      'post_type' => 'event',
                      'meta_key' => 'event_date',
                      'orderby' => 'meta_value_num', //meta-value is how we tell wp that we wanna use meta-key and for numbers, we use num
                      'order' => 'ASC',
                      'meta_query' => array(
                        array(
                          'key' => 'event_date',
                          'compare' => '>=',
                          'value' => $today,
                          'type' => 'numeric'
                        ),
                      ),
                    ));
                    while($homepageEvents->have_posts()) {
                      $homepageEvents-> the_post();
                      get_template_part('template-parts/content', get_post_type()); //second argument adds to first with a dash, like content-event
                   }
                  ?>
                    <?php echo paginate_links(); ?>
           
                </div>
                <hr class="section-break">
      <p>Looking for a recap of our past events? <a href="<?php echo site_url('/past-events') ?>">Click to see more...</a></p>
              </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();