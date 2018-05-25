<?php

/**
 * 
 *Template Name: Locations
 * 
 * 
 * **/
?>

<?php 
$args = array( 'post_type' => 'location', 'posts_per_page' => 100 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<h2><?php the_title(); ?></h2>
<div class="entry-content">
<h3><?php the_field('location') ?></h3>
<h3><?php the_field('address_1') ?></h3>
<h3><?php the_field('address_2') ?></h3> 
</div>
<?php wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>