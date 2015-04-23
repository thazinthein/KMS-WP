<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<div class="sliderwrapper">
        <?php echo do_shortcode('[layerslider id="1"]'); ?>
    </div>

    <div class="container">
      	<div class="row">

	        <div class="col-md-12">
		        <div class="parallelogram-img">
			        
			        	<img src="<?php bloginfo('template_directory');?>/images/parallelogram.png" class="img-responsive">
			          <!--<div class="parallelogram-img-content">
			          	<h2>Kim Eng Seng Machinery</h2>
			          	<div class="callservices">Require our services? Call us now!</div>
			          	<div class="phoneno">(+65) 6261 2867</div>
			          	<div class="phoneno">(+65) 6261 4369</div>
			          </div>-->
			       
		        </div>
	    	</div>
	    </div>


	    <div class="row">

	        <div class="col-md-4 col-xs-4 trapezoid-wrapper">
	          <div class="trapezoid-wrap">
	            <div class="trapezoid">
	              <h2>Our Products</h2>
	              <ul>
	                <li>Skeletal Trailers</li>
	                <li>Platform Trailers Maintenance</li>
	                <li>Car Carrier Trailers</li>	                
	              </ul>
	              <span class="products-read-more"><a href="products/">READ MORE</a></span>
	            </div>
	          </div>
	        </div>

	        <div class="col-md-3 col-xs-3 parallelogram-wrapper">
	          <div id="parallelogram">
	            <h2>Our Services</h2>
	            <ul>
	                <li>Trailer Inspection</li>
	                <li>Trailer Repair</li>
	                <li>Engineering Works</li>
	                <li>Metal Works</li>
	                <span class="services-read-more"><a href="services/">READ MORE</a></span>
	              </ul>
	          </div>
	        </div>

	        <div class="col-md-5 col-xs-5 award-wrapper">
	          <div class="award">
	            <h2>Our Award</h2>
	            <img src="<?php bloginfo('template_directory');?>/images/award.png" class="img-responsive">
	          </div>
	        </div>

	    </div>
    </div>      


    <div class="container">
    	<div class="row">
	        <div class="col-md-8 homecontent-wrapper">
	          <div class="homecontent">
	            <h2>About Kim Eng Seng Machinery</h2>
	            <p>Our company has been manufacturing and repairing all kinds of trailers in Singapore. Examples are Skeletal Trailers, Platform Trailers, Low Loader Trailer and all kinds of metal projects. We have more than 30 years experience in this field and we also deal with 2nd hand trailers for export. We have customers from Malaysia, Brunei, Doha and also the Asia Pacific region.</p>
	            <span class="read-more"><a href="company-profile/">READ MORE</a></span>
	          </div>
	        </div>

	        <div class="col-md-4 gallery-wrapper">
	          <div class="gallery">
	            <h2>Our Gallery</h2>
	            <?php echo do_shortcode('[Best_Wordpress_Gallery id="1" gal_title="home-gallery"]'); ?>
	          </div>
	        </div>
	    </div>
    </div>
    

	



<?php get_footer(); ?>
