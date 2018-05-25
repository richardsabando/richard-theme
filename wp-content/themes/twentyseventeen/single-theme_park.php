<?php
/**
 * Template Name: Theme Park
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0

 */

get_header(); ?>

<?php
//Declaring my needed variables

//get the location feild
if( get_field('location') ){
	$location = get_field('location');
}

//get the website feild
if( get_field('website') ){
	$website = get_field('website');
}

//get the video feild
if( get_field('video') ){
	$video = get_field('video');
}

//get the picture feild
if( get_field('picture') ){
	$picture = get_field('picture');
}
?>




<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1><?php echo get_the_title(); ?></h1>
			<!-- /* Start the Loop */ -->
			<?php	while ( have_posts() ) : the_post();	

				get_template_part( 'template-parts/post/theme_park', get_post_format() ); 

			?>

				
				<h2><?php echo $location; ?></h2>
				<br>
				<h2><a href="<?php echo $website; ?>"><?php echo get_the_title(); ?> Website</a></h2>
				<br>
				<h2><?php echo $video; ?></h2>



		<?php	endwhile; // End of the loop. 	?>
		

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();