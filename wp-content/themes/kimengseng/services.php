<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name: Services
*/
?>
<?php get_header();  ?>
<div class="body container">
  <div class="row">

      <div class="col-md-12 breadcurmb">
          <div class="" id="breadcrumb">
              <?php woocommerce_breadcrumb(); ?>
          </div>
      </div>


      <div class="col-md-9 rightnopadding">       
            <div class="pagebox">
              <h2 class="categ-head"><?php the_title(); ?></h2>
              <?php $id =9; $page_data = get_page($id);?>                                                              
              <?php $post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content; ?>

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
 
 
 