<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>


	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	
	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">   
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">   
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" /> 
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	
	<div>
		<header>

	        <div class="top">
	            <div class="container">
	              <div class="col-md-12">
	               
	              </div>        
	            </div>
	        </div>

	        <div class="menu-contentwrap">
	            <div class="menubg-wrap">
	            <div class="container">
	                
	                <div class="col-md-4">
	                    <div class="logo">
	                    	<img src="<?php bloginfo('template_directory');?>/images/logo.png" class="img-responsive">
	                    </div>
	                </div>

	                <div class="col-md-8">
	                    <div class="nav">
	                      <nav>
	                          <ul>
	                            <li>Home</li>
	                            <li>About Us</li>
	                            <li>Products</li>
	                            <li>Services</li>
	                            <li>Gallery</li>
	                            <li>Contact Us</li>
	                          </ul>
	                      </nav>
	                    </div>
	                </div> 

	              </div>       
	            </div>             
	        </div>
    			
		</header>
		
         
          			
    			

	    	
	    
		

			
		

