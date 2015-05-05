<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>

  <footer>    
        <div class="footerwrap transparent animate-waypoint" data-animation="moveUp slow">    
          <div class="container">
            <div class="row">

              <div class="col-md-3 col-xs-3 footer-about-wrapper">
                <div class="footer-about">
                  <h3>Services</h3>
                  <ul>
                    <li><a href="/about-us/">Trailer Inspection</a></li>
                    <li><a href="/about-us/">Trailer Repair</a></li>
                    <li><a href="/about-us/">Engineering Works</a></li>
                    <li><a href="/about-us/">Metal Works</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-md-6 col-xs-6 footer-products-wrapper">
                <div class="footer-products">
                  <h3>Products</h3>
                    <div class="col-md-6 col-xs-6 footermenu">
                      <ul>
                        <li><a href="/product-category/20′-skeletal/">20′ Skeletal</a></li>
                        <li><a href="/product-category/40′-platform-2-axle/">40′ Platform (2-axle)</a></li>
                        <li><a href="/product-category/40′-platform-tri-axle/">40′ Platform (Tri-axle)</a></li>
                        <li><a href="/product-category/40′-skeletal-2-axle/">40′ Skeletal (2-axle)</a></li>
                        <li><a href="/product-category/bogie-axle/">Bogie Axle</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-xs-6 footermenu">
                      <ul>
                        <li><a href="/product-category/car-carrier-trailer/">Car Carrier Trailer</a></li>
                        <li><a href="/product-category/lowbed-15550mm/">Lowbed 15550mm</a></li>
                        <li><a href="/product-category/lowbed-2-axle-with-slope/">lowbed-2-axle-with-slope/</a></li>
                        <li><a href="/product-category/lowbed-tri-axle-with-slope/">Lowbed Tri-axle with Slope</a></li>                       
                      </ul>
                    </div>
                </div>
              </div>

              <div class="col-md-3 social-wrapper">
                <div class="social">
                  <ul>
                    <li><img src="<?php bloginfo('template_directory');?>/images/facebook.png"></li>
                    <li><img src="<?php bloginfo('template_directory');?>/images/twitter.png"></li>
                    <li><img src="<?php bloginfo('template_directory');?>/images/googleplus.png"></li>
                  </ul>
                </div>
              </div>

            </div>           

          </div>
        </div>

        <div class="copyright">
          <div class="container">
              <div class="row">
                <div class="col-md-12">
                <p>© 2015 Kim Eng Seng Machinery Pte Ltd .Developed by <a href="http://exhibitmedia.sg/" target="_blank">Exhibit Media Pte Ltd</a>. All Rights Reserved </p>
                </div>
              </div>
          </div>
        </div>
  </footer>
</div>

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/functions.php"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"><\/script>');</script>
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/animate-waypoints.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/waypoints.js"></script>
<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->
	
</body>

</html>
