<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name: Profile
*/
?>
<?php get_header();  ?>
<div class="pageheaderbg">
</div>
<div class="body container">
  <div class="row">

      <div class="col-md-12 breadcurmb">
          <div class="" id="breadcrumb">
              <?php woocommerce_breadcrumb(); ?>
          </div>
      </div>


      <div class="col-md-9 rightnopadding">       
            <div class="pagebox">

              <div class="prfilecontent">
                <h2 class="categ-head"><?php the_title(); ?></h2>

                <div class="profilecontent-row">
                  <div class="col-md-3">
                    <img src="<?php bloginfo('template_directory');?>/images/profile-1.png" class="img-responsive profile-img">
                    <div style="border-color:#000;" class="icon_list_connector"></div>
                  </div>
                  <div class="col-md-9">
                    <p>Our company has been manufacturing and repairing all kinds of trailers in Singapore. Examples are Skeletal Trailers, Platform Trailers, Low Loader Trailer and all kinds of metal projects. We have more than 30 years experience in this field and we also deal with 2nd hand trailers for export. We have customers from Malaysia, Brunei, Doha and also the Asia Pacific region.</p>
                  </div>
                </div>

               <div class="profilecontent-row">
                  <div class="col-md-3">
                    <img src="<?php bloginfo('template_directory');?>/images/profile-2.png" class="img-responsive profile-img">
                    <div style="border-color:#000;" class="icon_list_connector"></div>
                  </div>
                  <div class="col-md-9">
                    <p>Our company has been manufacturing and repairing all kinds of trailers in Singapore. Examples are Skeletal Trailers, Platform Trailers, Low Loader Trailer and all kinds of metal projects. We have more than 30 years experience in this field and we also deal with 2nd hand trailers for export. We have customers from Malaysia, Brunei, Doha and also the Asia Pacific region.</p>
                  </div>
                </div>

                <div class="profilecontent-row">
                  <div class="col-md-3">
                    <img src="<?php bloginfo('template_directory');?>/images/profile-3.png" class="img-responsive profile-img">
                    <div style="border-color:#000;" class="icon_list_connector"></div>
                  </div>
                  <div class="col-md-9">
                    <p>Our company has been manufacturing and repairing all kinds of trailers in Singapore. Examples are Skeletal Trailers, Platform Trailers, Low Loader Trailer and all kinds of metal projects. We have more than 30 years experience in this field and we also deal with 2nd hand trailers for export. We have customers from Malaysia, Brunei, Doha and also the Asia Pacific region.</p>
                  </div>
                </div>

                <div class="profilecontent-row">
                  <div class="col-md-3">
                    <img src="<?php bloginfo('template_directory');?>/images/profile-4.png" class="img-responsive profile-img">                    
                  </div>
                  <div class="col-md-9">
                    <p>Our company has been manufacturing and repairing all kinds of trailers in Singapore. Examples are Skeletal Trailers, Platform Trailers, Low Loader Trailer and all kinds of metal projects. We have more than 30 years experience in this field and we also deal with 2nd hand trailers for export. We have customers from Malaysia, Brunei, Doha and also the Asia Pacific region.</p>
                  </div>
                </div>


               

              </div>
              
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
 

<?php get_footer(); ?>
 
 
 