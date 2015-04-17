<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div class="body container">
	<div class="row">
	    <div class="col-md-9 rightnopadding">
	    	<div class="singleproduct-page pagebox">
			
				<?php
					/**
					 * woocommerce_before_main_content hook
					 *
					 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					 * @hooked woocommerce_breadcrumb - 20
					 */
					do_action( 'woocommerce_before_main_content' );
				?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php wc_get_template_part( 'content', 'single-product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php
					/**
					 * woocommerce_after_main_content hook
					 *
					 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
					 */
					do_action( 'woocommerce_after_main_content' );
				?>
			</div>
		</div>

		<div class="col-md-3 leftnopadding">
			<div class="rightside">
				
				<div class="catego">
					<h2 class="categ-head">Products Categories</h2>
					<nav class="rightnav" role="navigation">
		                <?php wp_nav_menu(array('menu'=> 'categories-nav'));?>
		            </nav>
		        </div>

		        <div class="toprated">
		        	<h2 class="categ-head">Top reated Products</h2>
		        	<?php echo do_shortcode('[featured_products per_page="4" columns="1"]');?>
		        </div>

	        </div>
		</div>

		
	</div>
</div>
	

<?php get_footer( 'shop' ); ?>
