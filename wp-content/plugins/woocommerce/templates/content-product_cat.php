<?php
/**
 * The template for displaying product category thumbnails within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Increase loop count
$woocommerce_loop['loop']++;
?>
<li class="product-category product<?php
    if ( ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] == 0 || $woocommerce_loop['columns'] == 1 )
        echo ' first';
	if ( $woocommerce_loop['loop'] % $woocommerce_loop['columns'] == 0 )
		echo ' last';
	?>">

	<?php do_action( 'woocommerce_before_subcategory', $category ); ?>
	<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>">

		<?php
			/**
			 * woocommerce_before_subcategory_title hook
			 *
			 * @hooked woocommerce_subcategory_thumbnail - 10
			 */
			do_action( 'woocommerce_before_subcategory_title', $category );
		?>

		<div class="products-content products-catego">
		<!--	<img src="<?php bloginfo('template_directory');?>/images/products-logo.png" class="products-logo">-->

				<div class="flip-container-wrapper">
					  <div class="flipper">
					    <div class="front">
					      <img src="<?php bloginfo('template_directory');?>/images/products-logo.png" class="products-logo">
					    </div>
					    <div class="back">
					      <img src="<?php bloginfo('template_directory');?>/images/products-logo.png" class="products-logo">
					    </div>
					  </div>
				</div>

			<h3>
				<?php echo $category->name;?>
			</h3>

		</div>

		

		<?php
			/**
			 * woocommerce_after_subcategory_title hook
			 */
			do_action( 'woocommerce_after_subcategory_title', $category );
		?>

	</a>
	</div>
	<?php do_action( 'woocommerce_after_subcategory', $category ); ?>

</li>
