<?php 
/* Template Name: News */ 

$args = array( 'post_type' => 'news',
   'post_status' => 'publish',
   'tax_query'   => array(
       array(
           'taxonomy' => 'testimonial_service',
           'field'    => 'slug',

       )
   )
);

$news = new WP_Query( $args );
if( $news->have_posts() ) :



       while( $news->have_posts() ) :
           $news->the_post();

            printf( '%1$s - %2$s', get_the_title(), get_the_content() );

       endwhile;
       wp_reset_postdata();



else :
   esc_html_e( 'No Post Found');
endif;