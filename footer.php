<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info row">
                    
                    
                    <div class="col-md-3">

    <p>52 Hopton Street, London , SE1 9JH</p>

    <p><i class="fa fa-phone" aria-hidden="true"></i> 02079281899</p>
    <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:user&#064;example&#046;com">user&#064;example&#046;com</a></p>


                    </div>
                    
                    
                                        <div class="col-md-3">
                    
                    

                     
                      <h3><a href=""><i class="fa fa-beer" aria-hidden="true"></i> This is a header</a></h3>
                 
                    
                    
                    
                    <ul class="times">
                    <li class="spaced  text  text--xsmall  text--upper"><b>Opening Hours</b></li>
                    
		<li><span>Monday:</span> 9am - 11pm</li><li><span>Tuesday:</span> 9am - 11pm</li><li><span>Wednesday:</span> 9am - 11pm</li><li><span>Thursday:</span> 9am - 11pm</li><li><span>Friday:</span> 9am - 12am</li><li><span>Saturday:</span> 9am - 12am</li><li><span>Sunday:</span> 9am - 11pm</li>
	                </ul>
            </div>

                    
                    
                                        <div class="col-md-3">
    <p><i class="fa fa-twitter" aria-hidden="true"></i> <a href="">Twitter</a></p>
    <p><i class="fa fa-facebook" aria-hidden="true"></i> <a href="">Facebook</a></p>
        <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="">02079281899</a></p>



                    </div>
                    
                    
                    
                                        <div class="col-md-3">
    <p><i class="fa fa-phone" aria-hidden="true"></i> privacy</p>



                    </div>
                    

                    
                    
                    
						<?php //understrap_site_info(); ?>
                        


					</div><!-- .site-info -->
                    
                    <div class="row border-top border-white py-2"><div class="col"><p class="text-right font-weight-bold">Codescheme</p></div></div>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

