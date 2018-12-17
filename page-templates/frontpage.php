<?php
/**
 * Template Name: Front Page
 *
 * Template for displaying custom front page
 *
 * @package alehouse
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

                
<div id="hero-wine" class="jumbotron jumbotron-fluid">
  <div class="container text-right">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
<h1>This is a heading</h1>








<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                

<?php
/*
    $args = [
    'post__in' => [1,2,4],
    'ignore_sticky_posts' => true
    ];
    
    // The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
	echo '</ul>';

	wp_reset_postdata();
} else {
	// no posts found
}*/
    
  ?>  
    <i class="fa fa-beer" aria-hidden="true"></i>
  <?php
    /* Custom post plugin function */
   //echo cs_frontpage([1,2,4]); ?>
    
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						//if ( comments_open() || get_comments_number() ) :

							//comments_template();

						//endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->




<div id="hero-wine" class="jumbotron jumbotron-fluid">
  <div class="container text-right">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>



<?php get_footer(); ?>
