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
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
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
	            	<div class="row">

	            		<div class="col-md-9">
	            			<div class="quote-wrapper">
	            				<?php echo do_shortcode('[WooCommerceWooCartPro]'); ?>
	            			</div>
	            		</div>
		            	
		            	<div class="col-md-3">
		               		
		               		<div class="search-wrapper">
					            <div class="search"> 
					                <?php  
						                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-sidebar') ) :
						                endif; 
						            ?>
						        </div>
				            </div>

		              	</div>   
		            </div>     
	            </div>
	        </div>

	        <div class="menu-contentwrap">
	            <div class="menubg-wrap">
		            <div class="container">
		                <div class="row">
			                
			                <div class="col-md-4">
			                    <div class="logo">
			                    	<a href="<?php echo get_option('home'); ?>/">
			                    		<img src="<?php bloginfo('template_directory');?>/images/logo.png" class="img-responsive">
			                    	</a>
			                    </div>
			                </div>
			            

			                <div class="col-md-8">
			                    <div class="nav">
				                    <nav>
				                          	<div class="navbar navbar-default topnav" role="navigation">
								                <div class="navbar-header">
								                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								                    <span class="sr-only">Toggle navigation</span>
								                    <span class="icon-bar"></span>
								                    <span class="icon-bar"></span>
								                    <span class="icon-bar"></span>
								                  </button>
								                  <a class="navbar-brand" href="#">Menu</a>
								                </div>
								                <div class="navbar-collapse collapse" role="navigation">
								                   	<?php
											            wp_nav_menu( array(
											                'menu'              => 'topnav',
											                'theme_location'    => 'primary',
											                'depth'             => 2,
											                'container'         => 'div',
											                'container_class'   => 'collapse navbar-collapse',
											        		'container_id'      => 'bs-example-navbar-collapse-1',
											                'menu_class'        => 'nav navbar-nav',
											                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
											                'walker'            => new wp_bootstrap_navwalker())
											            );
											        ?>	 
								                </div>
								            </div>
				                    </nav>
			                    </div>

			                </div>

			            </div>
		            </div>       
	            </div>             
	        </div>
    			
		</header>
		
         
          			
    			

	    	
	    
		

			
		

